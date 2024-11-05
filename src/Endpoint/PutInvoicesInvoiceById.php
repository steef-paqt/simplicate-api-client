<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutInvoicesInvoiceByIdBadRequestException;
use Paqtcom\Simplicate\Exception\PutInvoicesInvoiceByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutInvoicesInvoiceByIdNotFoundException;
use Paqtcom\Simplicate\Exception\PutInvoicesInvoiceByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\Invoice;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutInvoicesInvoiceById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     * @param Invoice $body template object that needs to be updated
     */
    public function __construct(protected string $id, Invoice $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/invoices/invoice/{id}');
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
     * @throws PutInvoicesInvoiceByIdBadRequestException
     * @throws PutInvoicesInvoiceByIdUnauthorizedException
     * @throws PutInvoicesInvoiceByIdNotFoundException
     * @throws PutInvoicesInvoiceByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new PutInvoicesInvoiceByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutInvoicesInvoiceByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PutInvoicesInvoiceByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new PutInvoicesInvoiceByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
