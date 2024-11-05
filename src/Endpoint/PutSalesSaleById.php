<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutSalesSaleByIdBadRequestException;
use Paqtcom\Simplicate\Exception\PutSalesSaleByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutSalesSaleByIdNotFoundException;
use Paqtcom\Simplicate\Exception\PutSalesSaleByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\PostSales;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutSalesSaleById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     * @param PostSales $body project object that needs to be updated
     */
    public function __construct(protected string $id, PostSales $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/sales/sales/{id}');
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
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
     * @throws PutSalesSaleByIdBadRequestException
     * @throws PutSalesSaleByIdUnauthorizedException
     * @throws PutSalesSaleByIdNotFoundException
     * @throws PutSalesSaleByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new PutSalesSaleByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutSalesSaleByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PutSalesSaleByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new PutSalesSaleByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
