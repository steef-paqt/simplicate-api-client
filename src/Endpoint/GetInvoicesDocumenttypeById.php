<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetInvoicesDocumenttypeByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetInvoicesDocumenttypeByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetInvoicesDocumenttypeByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetInvoicesDocumenttypeByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultDocumentType;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetInvoicesDocumenttypeById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/invoices/documenttype/{id}');
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
     * @return null|RestResultDocumentType
     * @throws GetInvoicesDocumenttypeByIdNotFoundException
     * @throws GetInvoicesDocumenttypeByIdUnprocessableEntityException
     * @throws GetInvoicesDocumenttypeByIdInternalServerErrorException
     * @throws GetInvoicesDocumenttypeByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultDocumentType::class, 'json');
        }
        if (401 === $status) {
            throw new GetInvoicesDocumenttypeByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetInvoicesDocumenttypeByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetInvoicesDocumenttypeByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetInvoicesDocumenttypeByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
