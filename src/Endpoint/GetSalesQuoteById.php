<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetSalesQuoteByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetSalesQuoteByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetSalesQuoteByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetSalesQuoteByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultQuote;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetSalesQuoteById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/sales/quote/{id}');
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
     * @return null|RestResultQuote
     *@throws GetSalesQuoteByIdNotFoundException
     * @throws GetSalesQuoteByIdUnprocessableEntityException
     * @throws GetSalesQuoteByIdInternalServerErrorException
     * @throws GetSalesQuoteByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultQuote::class, 'json');
        }
        if (401 === $status) {
            throw new GetSalesQuoteByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetSalesQuoteByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetSalesQuoteByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetSalesQuoteByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
