<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetInvoicesInvoicestatusByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetInvoicesInvoicestatusByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetInvoicesInvoicestatusByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetInvoicesInvoicestatusByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultInvoiceStatus;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetInvoicesInvoicestatusById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/invoices/invoicestatus/{id}');
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
     * @return null|RestResultInvoiceStatus
     * @throws GetInvoicesInvoicestatusByIdNotFoundException
     * @throws GetInvoicesInvoicestatusByIdUnprocessableEntityException
     * @throws GetInvoicesInvoicestatusByIdInternalServerErrorException
     * @throws GetInvoicesInvoicestatusByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultInvoiceStatus::class, 'json');
        }
        if (401 === $status) {
            throw new GetInvoicesInvoicestatusByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetInvoicesInvoicestatusByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetInvoicesInvoicestatusByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetInvoicesInvoicestatusByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
