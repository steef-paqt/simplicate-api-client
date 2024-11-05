<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;

class PutInvoicesPaymentById extends BaseEndpoint
{
    use \Paqtcom\Simplicate\Runtime\Client\EndpointTrait;

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\Payment $body Payment object that needs to be updated
     */
    public function __construct(protected string $id, \Paqtcom\Simplicate\Model\Payment $body)
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

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
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
     * @throws \Paqtcom\Simplicate\Exception\PutInvoicesPaymentByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutInvoicesPaymentByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutInvoicesPaymentByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PutInvoicesPaymentByIdInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Paqtcom\Simplicate\Exception\PutInvoicesPaymentByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Paqtcom\Simplicate\Exception\PutInvoicesPaymentByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Paqtcom\Simplicate\Exception\PutInvoicesPaymentByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new \Paqtcom\Simplicate\Exception\PutInvoicesPaymentByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
