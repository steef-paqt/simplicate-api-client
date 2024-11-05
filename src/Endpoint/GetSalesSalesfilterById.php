<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetSalesSalesfilterByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetSalesSalesfilterByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetSalesSalesfilterByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetSalesSalesfilterByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetSalesSalesfilterById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/sales/salesfilters/{id}');
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
     *
     * @throws GetSalesSalesfilterByIdUnauthorizedException
     * @throws GetSalesSalesfilterByIdNotFoundException
     * @throws GetSalesSalesfilterByIdUnprocessableEntityException
     * @throws GetSalesSalesfilterByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new GetSalesSalesfilterByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetSalesSalesfilterByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetSalesSalesfilterByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetSalesSalesfilterByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
