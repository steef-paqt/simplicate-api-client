<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutSalesQuoteByIdBadRequestException;
use Paqtcom\Simplicate\Exception\PutSalesQuoteByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutSalesQuoteByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\PostQuote;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutSalesQuoteById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     * @param PostQuote $body Quote template object containing data
     */
    public function __construct(protected string $id, PostQuote $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/sales/quote/{id}');
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
     * @throws PutSalesQuoteByIdBadRequestException
     * @throws PutSalesQuoteByIdUnauthorizedException
     * @throws PutSalesQuoteByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new PutSalesQuoteByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutSalesQuoteByIdUnauthorizedException($response);
        }
        if (500 === $status) {
            throw new PutSalesQuoteByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
