<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetSalesQuotestatusByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetSalesQuotestatusByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetSalesQuotestatusByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetSalesQuotestatusByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultQuoteStatus;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetSalesQuotestatusById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/sales/quotestatus/{id}');
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
     * @return null|RestResultQuoteStatus
     * @throws GetSalesQuotestatusByIdNotFoundException
     * @throws GetSalesQuotestatusByIdUnprocessableEntityException
     * @throws GetSalesQuotestatusByIdInternalServerErrorException
     * @throws GetSalesQuotestatusByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultQuoteStatus::class, 'json');
        }
        if (401 === $status) {
            throw new GetSalesQuotestatusByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetSalesQuotestatusByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetSalesQuotestatusByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetSalesQuotestatusByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
