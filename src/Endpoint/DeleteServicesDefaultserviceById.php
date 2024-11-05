<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Endpoint;

use Steefdw\Simplicate\Runtime\Client\BaseEndpoint;

class DeleteServicesDefaultserviceById extends BaseEndpoint
{
    use \Steefdw\Simplicate\Runtime\Client\EndpointTrait;

    /**
     *
     *
     * @param string $id The template's id
     */
    public function __construct(protected string $id)
    {
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/services/defaultservice/{id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Steefdw\Simplicate\Exception\DeleteServicesDefaultserviceByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteServicesDefaultserviceByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteServicesDefaultserviceByIdInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Steefdw\Simplicate\Exception\DeleteServicesDefaultserviceByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Steefdw\Simplicate\Exception\DeleteServicesDefaultserviceByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new \Steefdw\Simplicate\Exception\DeleteServicesDefaultserviceByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
