<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostInvoicesPaymentInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostInvoicesPaymentNotFoundException;
use Paqtcom\Simplicate\Exception\PostInvoicesPaymentUnauthorizedException;
use Paqtcom\Simplicate\Model\Payment;
use Paqtcom\Simplicate\Model\RestPostResult;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostInvoicesPayment extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param Payment $body Payment object that needs to be added
     */
    public function __construct(Payment $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/invoices/payment';
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
     * @throws PostInvoicesPaymentUnauthorizedException
     * @throws PostInvoicesPaymentNotFoundException
     * @throws PostInvoicesPaymentInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestPostResult::class, 'json');
        }
        if (401 === $status) {
            throw new PostInvoicesPaymentUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PostInvoicesPaymentNotFoundException($response);
        }
        if (500 === $status) {
            throw new PostInvoicesPaymentInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
