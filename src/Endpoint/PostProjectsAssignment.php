<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostProjectsAssignmentBadRequestException;
use Paqtcom\Simplicate\Exception\PostProjectsAssignmentInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostProjectsAssignmentNotFoundException;
use Paqtcom\Simplicate\Exception\PostProjectsAssignmentUnauthorizedException;
use Paqtcom\Simplicate\Model\PostAssignment;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostProjectsAssignment extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PostAssignment $body Project assignment POST body
     */
    public function __construct(PostAssignment $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/projects/assignment';
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
     * @throws PostProjectsAssignmentBadRequestException
     * @throws PostProjectsAssignmentUnauthorizedException
     * @throws PostProjectsAssignmentNotFoundException
     * @throws PostProjectsAssignmentInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new PostProjectsAssignmentBadRequestException($response);
        }
        if (401 === $status) {
            throw new PostProjectsAssignmentUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PostProjectsAssignmentNotFoundException($response);
        }
        if (500 === $status) {
            throw new PostProjectsAssignmentInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
