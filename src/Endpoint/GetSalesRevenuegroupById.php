<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetSalesRevenuegroupByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetSalesRevenuegroupByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetSalesRevenuegroupByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetSalesRevenuegroupByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultRevenueGroup;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetSalesRevenuegroupById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/sales/revenuegroup/{id}');
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
     * @return null|RestResultRevenueGroup
     *@throws GetSalesRevenuegroupByIdNotFoundException
     * @throws GetSalesRevenuegroupByIdUnprocessableEntityException
     * @throws GetSalesRevenuegroupByIdInternalServerErrorException
     * @throws GetSalesRevenuegroupByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultRevenueGroup::class, 'json');
        }
        if (401 === $status) {
            throw new GetSalesRevenuegroupByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetSalesRevenuegroupByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetSalesRevenuegroupByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetSalesRevenuegroupByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
