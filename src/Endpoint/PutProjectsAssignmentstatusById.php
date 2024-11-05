<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutProjectsAssignmentstatusByIdBadRequestException;
use Paqtcom\Simplicate\Exception\PutProjectsAssignmentstatusByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutProjectsAssignmentstatusByIdNotFoundException;
use Paqtcom\Simplicate\Exception\PutProjectsAssignmentstatusByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\AssignmentStatus;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutProjectsAssignmentstatusById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     * @param AssignmentStatus $body Project assignment POST body
     */
    public function __construct(protected string $id, AssignmentStatus $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/projects/assignmentstatus/{id}');
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
     * @throws PutProjectsAssignmentstatusByIdBadRequestException
     * @throws PutProjectsAssignmentstatusByIdUnauthorizedException
     * @throws PutProjectsAssignmentstatusByIdNotFoundException
     * @throws PutProjectsAssignmentstatusByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new PutProjectsAssignmentstatusByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutProjectsAssignmentstatusByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PutProjectsAssignmentstatusByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new PutProjectsAssignmentstatusByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
