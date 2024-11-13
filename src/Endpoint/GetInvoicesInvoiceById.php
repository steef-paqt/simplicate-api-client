<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetInvoicesInvoiceByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetInvoicesInvoiceByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetInvoicesInvoiceByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetInvoicesInvoiceByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultInvoice;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetInvoicesInvoiceById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/invoices/invoice/{id}');
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
     * @return null|RestResultInvoice
     * @throws GetInvoicesInvoiceByIdNotFoundException
     * @throws GetInvoicesInvoiceByIdUnprocessableEntityException
     * @throws GetInvoicesInvoiceByIdInternalServerErrorException
     * @throws GetInvoicesInvoiceByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultInvoice::class, 'json');
        }
        if (401 === $status) {
            throw new GetInvoicesInvoiceByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetInvoicesInvoiceByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetInvoicesInvoiceByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetInvoicesInvoiceByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
