<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetSalesConverttoprojectByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetSalesConverttoprojectByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetSalesConverttoprojectByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetSalesConverttoprojectByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultSale;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetSalesConverttoprojectById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/sales/converttoproject/{id}');
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
     * @return null|RestResultSale
     *@throws GetSalesConverttoprojectByIdNotFoundException
     * @throws GetSalesConverttoprojectByIdUnprocessableEntityException
     * @throws GetSalesConverttoprojectByIdInternalServerErrorException
     * @throws GetSalesConverttoprojectByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultSale::class, 'json');
        }
        if (401 === $status) {
            throw new GetSalesConverttoprojectByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetSalesConverttoprojectByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetSalesConverttoprojectByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetSalesConverttoprojectByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
