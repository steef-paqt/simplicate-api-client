<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\DeleteInvoicesDocumentByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\DeleteInvoicesDocumentByIdNotFoundException;
use Paqtcom\Simplicate\Exception\DeleteInvoicesDocumentByIdUnauthorizedException;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class DeleteInvoicesDocumentById extends BaseEndpoint
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
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/invoices/document/{id}');
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
     *
     * @throws DeleteInvoicesDocumentByIdUnauthorizedException
     * @throws DeleteInvoicesDocumentByIdNotFoundException
     * @throws DeleteInvoicesDocumentByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new DeleteInvoicesDocumentByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new DeleteInvoicesDocumentByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new DeleteInvoicesDocumentByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
