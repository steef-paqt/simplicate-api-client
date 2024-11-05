<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostSalesQuoteBadRequestException;
use Paqtcom\Simplicate\Exception\PostSalesQuoteInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostSalesQuoteUnauthorizedException;
use Paqtcom\Simplicate\Model\PostQuote;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostSalesQuote extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PostQuote $body Quote template object containing data
     */
    public function __construct(PostQuote $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/sales/quote';
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
     * @throws PostSalesQuoteBadRequestException
     * @throws PostSalesQuoteUnauthorizedException
     * @throws PostSalesQuoteInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new PostSalesQuoteBadRequestException($response);
        }
        if (401 === $status) {
            throw new PostSalesQuoteUnauthorizedException($response);
        }
        if (500 === $status) {
            throw new PostSalesQuoteInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
