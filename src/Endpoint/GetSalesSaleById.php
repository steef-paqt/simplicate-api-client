<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetSalesSaleByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetSalesSaleByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetSalesSaleByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetSalesSaleByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultSale;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetSalesSaleById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/sales/sales/{id}');
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
     * @return null|RestResultSale
     *@throws GetSalesSaleByIdNotFoundException
     * @throws GetSalesSaleByIdUnprocessableEntityException
     * @throws GetSalesSaleByIdInternalServerErrorException
     * @throws GetSalesSaleByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultSale::class, 'json');
        }
        if (401 === $status) {
            throw new GetSalesSaleByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetSalesSaleByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetSalesSaleByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetSalesSaleByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
