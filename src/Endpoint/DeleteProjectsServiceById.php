<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;

class DeleteProjectsServiceById extends BaseEndpoint
{
    use \Paqtcom\Simplicate\Runtime\Client\EndpointTrait;

    /**
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
        return str_replace(['{id}'], [$this->id], '/projects/service/{id}');
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
     * @throws \Paqtcom\Simplicate\Exception\DeleteProjectsServiceByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteProjectsServiceByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteProjectsServiceByIdInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Paqtcom\Simplicate\Exception\DeleteProjectsServiceByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Paqtcom\Simplicate\Exception\DeleteProjectsServiceByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new \Paqtcom\Simplicate\Exception\DeleteProjectsServiceByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
