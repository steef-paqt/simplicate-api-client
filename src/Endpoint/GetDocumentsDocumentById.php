<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetDocumentsDocumentByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetDocumentsDocumentByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetDocumentsDocumentByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetDocumentsDocumentByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultDocument;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetDocumentsDocumentById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     */
    public function __construct(protected string $id)
    {
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/documents/document/{id}');
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     * @return null|RestResultDocument
     *@throws GetDocumentsDocumentByIdNotFoundException
     * @throws GetDocumentsDocumentByIdUnprocessableEntityException
     * @throws GetDocumentsDocumentByIdInternalServerErrorException
     * @throws GetDocumentsDocumentByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultDocument::class, 'json');
        }
        if (401 === $status) {
            throw new GetDocumentsDocumentByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetDocumentsDocumentByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetDocumentsDocumentByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetDocumentsDocumentByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
