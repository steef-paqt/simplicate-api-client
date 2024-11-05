<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetCrmDocumentByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetCrmDocumentByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetCrmDocumentByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetCrmDocumentByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultDocument;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetCrmDocumentById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/crm/document/{id}');
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
     *@throws GetCrmDocumentByIdNotFoundException
     * @throws GetCrmDocumentByIdUnprocessableEntityException
     * @throws GetCrmDocumentByIdInternalServerErrorException
     * @throws GetCrmDocumentByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultDocument::class, 'json');
        }
        if (401 === $status) {
            throw new GetCrmDocumentByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetCrmDocumentByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetCrmDocumentByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetCrmDocumentByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
