<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Endpoint;

use Steefdw\Simplicate\Runtime\Client\BaseEndpoint;

class GetSalesDocumentById extends BaseEndpoint
{
    use \Steefdw\Simplicate\Runtime\Client\EndpointTrait;

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
        return str_replace(['{id}'], [$this->id], '/sales/document/{id}');
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
     * @throws \Steefdw\Simplicate\Exception\GetSalesDocumentByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesDocumentByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesDocumentByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetSalesDocumentByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDocument
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, \Steefdw\Simplicate\Model\RestResultDocument::class, 'json');
        }
        if (401 === $status) {
            throw new \Steefdw\Simplicate\Exception\GetSalesDocumentByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Steefdw\Simplicate\Exception\GetSalesDocumentByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new \Steefdw\Simplicate\Exception\GetSalesDocumentByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new \Steefdw\Simplicate\Exception\GetSalesDocumentByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
