<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetProjectsServiceByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetProjectsServiceByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetProjectsServiceByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetProjectsServiceByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultProjectService;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetProjectsServiceById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/projects/service/{id}');
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
     * @return null|RestResultProjectService
     *@throws GetProjectsServiceByIdNotFoundException
     * @throws GetProjectsServiceByIdUnprocessableEntityException
     * @throws GetProjectsServiceByIdInternalServerErrorException
     * @throws GetProjectsServiceByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultProjectService::class, 'json');
        }
        if (401 === $status) {
            throw new GetProjectsServiceByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetProjectsServiceByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetProjectsServiceByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetProjectsServiceByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
