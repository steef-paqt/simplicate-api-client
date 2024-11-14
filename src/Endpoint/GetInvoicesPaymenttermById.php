<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetInvoicesPaymenttermByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetInvoicesPaymenttermByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetInvoicesPaymenttermByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetInvoicesPaymenttermByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultPaymentTerm;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetInvoicesPaymenttermById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/invoices/paymentterm/{id}');
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
     * @return null|RestResultPaymentTerm
     * @throws GetInvoicesPaymenttermByIdNotFoundException
     * @throws GetInvoicesPaymenttermByIdUnprocessableEntityException
     * @throws GetInvoicesPaymenttermByIdInternalServerErrorException
     * @throws GetInvoicesPaymenttermByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultPaymentTerm::class, 'json');
        }
        if (401 === $status) {
            throw new GetInvoicesPaymenttermByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetInvoicesPaymenttermByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetInvoicesPaymenttermByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetInvoicesPaymenttermByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
