<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetProjectsDocumentByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetProjectsDocumentByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetProjectsDocumentByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetProjectsDocumentByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultDocument;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetProjectsDocumentById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/projects/document/{id}');
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
     * @throws GetProjectsDocumentByIdNotFoundException
     * @throws GetProjectsDocumentByIdUnprocessableEntityException
     * @throws GetProjectsDocumentByIdInternalServerErrorException
     * @throws GetProjectsDocumentByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultDocument::class, 'json');
        }
        if (401 === $status) {
            throw new GetProjectsDocumentByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetProjectsDocumentByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetProjectsDocumentByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetProjectsDocumentByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
