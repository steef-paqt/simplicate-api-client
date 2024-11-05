<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetProjectsProjectByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetProjectsProjectByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetProjectsProjectByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetProjectsProjectByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultProject;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetProjectsProjectById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/projects/project/{id}');
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
     * @return null|RestResultProject
     *@throws GetProjectsProjectByIdNotFoundException
     * @throws GetProjectsProjectByIdUnprocessableEntityException
     * @throws GetProjectsProjectByIdInternalServerErrorException
     * @throws GetProjectsProjectByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultProject::class, 'json');
        }
        if (401 === $status) {
            throw new GetProjectsProjectByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetProjectsProjectByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetProjectsProjectByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetProjectsProjectByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
