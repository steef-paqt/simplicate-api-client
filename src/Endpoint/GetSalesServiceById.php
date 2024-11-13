<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetSalesServiceByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetSalesServiceByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetSalesServiceByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetSalesServiceByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultSalesService;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetSalesServiceById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/sales/service/{id}');
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
     * @return null|RestResultSalesService
     * @throws GetSalesServiceByIdNotFoundException
     * @throws GetSalesServiceByIdUnprocessableEntityException
     * @throws GetSalesServiceByIdInternalServerErrorException
     * @throws GetSalesServiceByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultSalesService::class, 'json');
        }
        if (401 === $status) {
            throw new GetSalesServiceByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetSalesServiceByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetSalesServiceByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetSalesServiceByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
