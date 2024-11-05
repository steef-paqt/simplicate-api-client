<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostInvoicesInvoiceInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostInvoicesInvoiceNotFoundException;
use Paqtcom\Simplicate\Exception\PostInvoicesInvoiceUnauthorizedException;
use Paqtcom\Simplicate\Model\PostInvoice;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostInvoicesInvoice extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PostInvoice $body Invoice object that needs to be added
     */
    public function __construct(PostInvoice $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/invoices/invoice';
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
     * @throws PostInvoicesInvoiceUnauthorizedException
     * @throws PostInvoicesInvoiceNotFoundException
     * @throws PostInvoicesInvoiceInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new PostInvoicesInvoiceUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PostInvoicesInvoiceNotFoundException($response);
        }
        if (500 === $status) {
            throw new PostInvoicesInvoiceInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
