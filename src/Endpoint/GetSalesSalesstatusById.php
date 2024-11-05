<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Endpoint;

use Steefdw\Simplicate\Runtime\Client\BaseEndpoint;
use Steefdw\Simplicate\Runtime\Client\Endpoint;

class GetSalesSalesstatusById extends BaseEndpoint implements Endpoint
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
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/sales/salesstatus/{id}');
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
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesstatusByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesstatusByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesstatusByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesstatusByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultSalesStatus
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, \Steefdw\Simplicate\Model\RestResultSalesStatus::class, 'json');
        }
        if (401 === $status) {
            throw new \Steefdw\Simplicate\Exception\GetSalesSalesstatusByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Steefdw\Simplicate\Exception\GetSalesSalesstatusByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new \Steefdw\Simplicate\Exception\GetSalesSalesstatusByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new \Steefdw\Simplicate\Exception\GetSalesSalesstatusByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
