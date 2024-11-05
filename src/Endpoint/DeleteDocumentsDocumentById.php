<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Endpoint;

use Steefdw\Simplicate\Runtime\Client\BaseEndpoint;
use Steefdw\Simplicate\Runtime\Client\Endpoint;

class DeleteDocumentsDocumentById extends BaseEndpoint implements Endpoint
{
    use \Steefdw\Simplicate\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     *
     *
     * @param string $id The template's id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/documents/document/{id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Steefdw\Simplicate\Exception\DeleteDocumentsDocumentByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteDocumentsDocumentByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteDocumentsDocumentByIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Steefdw\Simplicate\Exception\DeleteDocumentsDocumentByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Steefdw\Simplicate\Exception\DeleteDocumentsDocumentByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new \Steefdw\Simplicate\Exception\DeleteDocumentsDocumentByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
