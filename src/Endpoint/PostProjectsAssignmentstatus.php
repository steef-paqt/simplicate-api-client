<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;

class PostProjectsAssignmentstatus extends BaseEndpoint
{
    use \Paqtcom\Simplicate\Runtime\Client\EndpointTrait;

    /**
     * @param \Paqtcom\Simplicate\Model\AssignmentStatus $body Project assignment POST body
     */
    public function __construct(\Paqtcom\Simplicate\Model\AssignmentStatus $body)
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

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
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
     * @throws \Paqtcom\Simplicate\Exception\PostProjectsAssignmentstatusBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostProjectsAssignmentstatusUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostProjectsAssignmentstatusNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostProjectsAssignmentstatusInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Paqtcom\Simplicate\Exception\PostProjectsAssignmentstatusBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Paqtcom\Simplicate\Exception\PostProjectsAssignmentstatusUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Paqtcom\Simplicate\Exception\PostProjectsAssignmentstatusNotFoundException($response);
        }
        if (500 === $status) {
            throw new \Paqtcom\Simplicate\Exception\PostProjectsAssignmentstatusInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
