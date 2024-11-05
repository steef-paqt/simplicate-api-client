<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetInvoicesVatclassByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetInvoicesVatclassByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetInvoicesVatclassByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetInvoicesVatclassByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultVatClass;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetInvoicesVatclassById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/invoices/vatclass/{id}');
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
     * @return null|RestResultVatClass
     *@throws GetInvoicesVatclassByIdNotFoundException
     * @throws GetInvoicesVatclassByIdUnprocessableEntityException
     * @throws GetInvoicesVatclassByIdInternalServerErrorException
     * @throws GetInvoicesVatclassByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultVatClass::class, 'json');
        }
        if (401 === $status) {
            throw new GetInvoicesVatclassByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetInvoicesVatclassByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetInvoicesVatclassByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetInvoicesVatclassByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
