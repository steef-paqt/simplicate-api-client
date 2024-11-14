<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetProjectsAssignmentByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetProjectsAssignmentByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetProjectsAssignmentByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\RestResultProjectAssignment;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetProjectsAssignmentById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/projects/assignment/{id}');
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
     * @return null|RestResultProjectAssignment
     * @throws GetProjectsAssignmentByIdNotFoundException
     * @throws GetProjectsAssignmentByIdInternalServerErrorException
     * @throws GetProjectsAssignmentByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultProjectAssignment::class, 'json');
        }
        if (401 === $status) {
            throw new GetProjectsAssignmentByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetProjectsAssignmentByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new GetProjectsAssignmentByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
