<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutInvoicesPaymentByIdBadRequestException;
use Paqtcom\Simplicate\Exception\PutInvoicesPaymentByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutInvoicesPaymentByIdNotFoundException;
use Paqtcom\Simplicate\Exception\PutInvoicesPaymentByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\Payment;
use Paqtcom\Simplicate\Model\PutChunked;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutInvoicesPaymentById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     * @param Payment $body Payment object that needs to be updated
     */
    public function __construct(protected string $id, Payment $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/invoices/payment/{id}');
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
     * @throws PutInvoicesPaymentByIdBadRequestException
     * @throws PutInvoicesPaymentByIdUnauthorizedException
     * @throws PutInvoicesPaymentByIdNotFoundException
     * @throws PutInvoicesPaymentByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, PutChunked::class, 'json');
        }
        if (400 === $status) {
            throw new PutInvoicesPaymentByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutInvoicesPaymentByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PutInvoicesPaymentByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new PutInvoicesPaymentByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
