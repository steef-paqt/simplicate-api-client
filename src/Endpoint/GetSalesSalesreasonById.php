<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetSalesSalesreasonByIdBadRequestException;
use Paqtcom\Simplicate\Exception\GetSalesSalesreasonByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetSalesSalesreasonByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetSalesSalesreasonByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultSalesReason;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetSalesSalesreasonById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/sales/salesreason/{id}');
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
     * @return null|RestResultSalesReason
     * @throws GetSalesSalesreasonByIdUnauthorizedException
     * @throws GetSalesSalesreasonByIdUnprocessableEntityException
     * @throws GetSalesSalesreasonByIdInternalServerErrorException
     * @throws GetSalesSalesreasonByIdBadRequestException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultSalesReason::class, 'json');
        }
        if (400 === $status) {
            throw new GetSalesSalesreasonByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new GetSalesSalesreasonByIdUnauthorizedException($response);
        }
        if (422 === $status) {
            throw new GetSalesSalesreasonByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetSalesSalesreasonByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
