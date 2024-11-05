<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetInvoicesDocumentByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetInvoicesDocumentByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetInvoicesDocumentByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetInvoicesDocumentByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultDocument;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetInvoicesDocumentById extends BaseEndpoint
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
     * @return null|RestResultDocument
     *@throws GetInvoicesDocumentByIdNotFoundException
     * @throws GetInvoicesDocumentByIdUnprocessableEntityException
     * @throws GetInvoicesDocumentByIdInternalServerErrorException
     * @throws GetInvoicesDocumentByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultDocument::class, 'json');
        }
        if (401 === $status) {
            throw new GetInvoicesDocumentByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetInvoicesDocumentByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetInvoicesDocumentByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetInvoicesDocumentByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
