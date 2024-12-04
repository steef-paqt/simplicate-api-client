<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutProjectsAssignmentByIdBadRequestException;
use Paqtcom\Simplicate\Exception\PutProjectsAssignmentByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutProjectsAssignmentByIdNotFoundException;
use Paqtcom\Simplicate\Exception\PutProjectsAssignmentByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\PutAssignment;
use Paqtcom\Simplicate\Model\PutChunked;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutProjectsAssignmentById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     * @param PutAssignment $body Project assignment PUT body
     */
    public function __construct(protected string $id, PutAssignment $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/projects/assignment/{id}');
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
     * @throws PutProjectsAssignmentByIdBadRequestException
     * @throws PutProjectsAssignmentByIdUnauthorizedException
     * @throws PutProjectsAssignmentByIdNotFoundException
     * @throws PutProjectsAssignmentByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, PutChunked::class, 'json');
        }
        if (400 === $status) {
            throw new PutProjectsAssignmentByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutProjectsAssignmentByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PutProjectsAssignmentByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new PutProjectsAssignmentByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
