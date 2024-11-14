<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetSalesSalesstatusByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetSalesSalesstatusByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetSalesSalesstatusByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetSalesSalesstatusByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultSalesStatus;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetSalesSalesstatusById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/sales/salesstatus/{id}');
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
     * @return null|RestResultSalesStatus
     * @throws GetSalesSalesstatusByIdNotFoundException
     * @throws GetSalesSalesstatusByIdUnprocessableEntityException
     * @throws GetSalesSalesstatusByIdInternalServerErrorException
     * @throws GetSalesSalesstatusByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultSalesStatus::class, 'json');
        }
        if (401 === $status) {
            throw new GetSalesSalesstatusByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetSalesSalesstatusByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetSalesSalesstatusByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetSalesSalesstatusByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
