<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetSalesSalessourceByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetSalesSalessourceByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetSalesSalessourceByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetSalesSalessourceByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultSalesSource;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetSalesSalessourceById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/sales/salessource/{id}');
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
     * @return null|RestResultSalesSource
     *@throws GetSalesSalessourceByIdNotFoundException
     * @throws GetSalesSalessourceByIdUnprocessableEntityException
     * @throws GetSalesSalessourceByIdInternalServerErrorException
     * @throws GetSalesSalessourceByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultSalesSource::class, 'json');
        }
        if (401 === $status) {
            throw new GetSalesSalessourceByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetSalesSalessourceByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetSalesSalessourceByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetSalesSalessourceByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
