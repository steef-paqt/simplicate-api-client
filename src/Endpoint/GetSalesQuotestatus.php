<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetSalesQuotestatusInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetSalesQuotestatusNotFoundException;
use Paqtcom\Simplicate\Exception\GetSalesQuotestatusUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetSalesQuotestatusUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultQuoteStatuses;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetSalesQuotestatus extends BaseEndpoint
{
    use EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/sales/quotestatus';
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
     * @return null|RestResultQuoteStatuses
     *@throws GetSalesQuotestatusNotFoundException
     * @throws GetSalesQuotestatusUnprocessableEntityException
     * @throws GetSalesQuotestatusInternalServerErrorException
     * @throws GetSalesQuotestatusUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultQuoteStatuses::class, 'json');
        }
        if (401 === $status) {
            throw new GetSalesQuotestatusUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetSalesQuotestatusNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetSalesQuotestatusUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetSalesQuotestatusInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
