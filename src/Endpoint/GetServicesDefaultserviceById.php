<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetServicesDefaultserviceByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetServicesDefaultserviceByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetServicesDefaultserviceByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetServicesDefaultserviceByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultDefaultService;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetServicesDefaultserviceById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/services/defaultservice/{id}');
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
     * @return null|RestResultDefaultService
     * @throws GetServicesDefaultserviceByIdNotFoundException
     * @throws GetServicesDefaultserviceByIdUnprocessableEntityException
     * @throws GetServicesDefaultserviceByIdInternalServerErrorException
     * @throws GetServicesDefaultserviceByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultDefaultService::class, 'json');
        }
        if (401 === $status) {
            throw new GetServicesDefaultserviceByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetServicesDefaultserviceByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetServicesDefaultserviceByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetServicesDefaultserviceByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
