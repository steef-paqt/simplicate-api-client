<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutSalesServiceByIdBadRequestException;
use Paqtcom\Simplicate\Exception\PutSalesServiceByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutSalesServiceByIdNotFoundException;
use Paqtcom\Simplicate\Exception\PutSalesServiceByIdUnauthorizedException;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutSalesServiceById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\PostSalesService $body Service object that needs to be updated
     */
    public function __construct(protected string $id, \Paqtcom\Simplicate\Model\PostSalesService $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/sales/service/{id}');
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
     * @throws PutSalesServiceByIdBadRequestException
     * @throws PutSalesServiceByIdUnauthorizedException
     * @throws PutSalesServiceByIdNotFoundException
     * @throws PutSalesServiceByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new PutSalesServiceByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutSalesServiceByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PutSalesServiceByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new PutSalesServiceByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
