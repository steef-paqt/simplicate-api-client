<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetInvoicesPaymentByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetInvoicesPaymentByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetInvoicesPaymentByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetInvoicesPaymentByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultPayment;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetInvoicesPaymentById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/invoices/payment/{id}');
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
     * @return null|RestResultPayment
     *@throws GetInvoicesPaymentByIdNotFoundException
     * @throws GetInvoicesPaymentByIdUnprocessableEntityException
     * @throws GetInvoicesPaymentByIdInternalServerErrorException
     * @throws GetInvoicesPaymentByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultPayment::class, 'json');
        }
        if (401 === $status) {
            throw new GetInvoicesPaymentByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetInvoicesPaymentByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetInvoicesPaymentByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetInvoicesPaymentByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
