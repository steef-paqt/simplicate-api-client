<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutSalesQuoteemailByIdBadRequestException;
use Paqtcom\Simplicate\Exception\PutSalesQuoteemailByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutSalesQuoteemailByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\PutQuoteEmail;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutSalesQuoteemailById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     * @param PutQuoteEmail $body Document object containing data
     */
    public function __construct(protected string $id, PutQuoteEmail $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/sales/quoteemail/{id}');
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
     * @throws PutSalesQuoteemailByIdBadRequestException
     * @throws PutSalesQuoteemailByIdUnauthorizedException
     * @throws PutSalesQuoteemailByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new PutSalesQuoteemailByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutSalesQuoteemailByIdUnauthorizedException($response);
        }
        if (500 === $status) {
            throw new PutSalesQuoteemailByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
