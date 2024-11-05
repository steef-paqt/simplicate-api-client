<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Endpoint;

use Steefdw\Simplicate\Runtime\Client\BaseEndpoint;
use Steefdw\Simplicate\Runtime\Client\Endpoint;

class PostSalesSalesByIdDuplicate extends BaseEndpoint implements Endpoint
{
    use \Steefdw\Simplicate\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     *
     *
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\PostDuplicateSales $body Optional parameters to overwrite
     */
    public function __construct(string $id, \Steefdw\Simplicate\Model\PostDuplicateSales $body)
    {
        $this->id = $id;
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/sales/sales/{id}/duplicate');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Steefdw\Simplicate\Exception\PostSalesSalesByIdDuplicateBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PostSalesSalesByIdDuplicateUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostSalesSalesByIdDuplicateNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PostSalesSalesByIdDuplicateInternalServerErrorException
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
        if (400 === $status) {
            throw new \Steefdw\Simplicate\Exception\PostSalesSalesByIdDuplicateBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Steefdw\Simplicate\Exception\PostSalesSalesByIdDuplicateUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Steefdw\Simplicate\Exception\PostSalesSalesByIdDuplicateNotFoundException($response);
        }
        if (500 === $status) {
            throw new \Steefdw\Simplicate\Exception\PostSalesSalesByIdDuplicateInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
