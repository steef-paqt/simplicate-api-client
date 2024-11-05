<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostProjectsProjectInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostProjectsProjectNotFoundException;
use Paqtcom\Simplicate\Exception\PostProjectsProjectUnauthorizedException;
use Paqtcom\Simplicate\Model\PostProject;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostProjectsProject extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PostProject $body Project object that needs to be added
     */
    public function __construct(PostProject $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/projects/project';
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
     * @throws PostProjectsProjectUnauthorizedException
     * @throws PostProjectsProjectNotFoundException
     * @throws PostProjectsProjectInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new PostProjectsProjectUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PostProjectsProjectNotFoundException($response);
        }
        if (500 === $status) {
            throw new PostProjectsProjectInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
