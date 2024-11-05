<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostProjectsAssignmentstatusBadRequestException;
use Paqtcom\Simplicate\Exception\PostProjectsAssignmentstatusInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostProjectsAssignmentstatusNotFoundException;
use Paqtcom\Simplicate\Exception\PostProjectsAssignmentstatusUnauthorizedException;
use Paqtcom\Simplicate\Model\AssignmentStatus;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostProjectsAssignmentstatus extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param AssignmentStatus $body Project assignment POST body
     */
    public function __construct(AssignmentStatus $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/projects/assignmentstatus';
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
     * @throws PostProjectsAssignmentstatusBadRequestException
     * @throws PostProjectsAssignmentstatusUnauthorizedException
     * @throws PostProjectsAssignmentstatusNotFoundException
     * @throws PostProjectsAssignmentstatusInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new PostProjectsAssignmentstatusBadRequestException($response);
        }
        if (401 === $status) {
            throw new PostProjectsAssignmentstatusUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PostProjectsAssignmentstatusNotFoundException($response);
        }
        if (500 === $status) {
            throw new PostProjectsAssignmentstatusInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
