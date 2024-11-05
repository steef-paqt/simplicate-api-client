<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;

class GetSalesSalesreasonById extends BaseEndpoint
{
    use \Paqtcom\Simplicate\Runtime\Client\EndpointTrait;

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
        return str_replace(['{id}'], [$this->id], '/sales/salesreason/{id}');
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
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesreasonByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesreasonByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesreasonByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesreasonByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultSalesReason
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, \Paqtcom\Simplicate\Model\RestResultSalesReason::class, 'json');
        }
        if (400 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetSalesSalesreasonByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetSalesSalesreasonByIdUnauthorizedException($response);
        }
        if (422 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetSalesSalesreasonByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetSalesSalesreasonByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
