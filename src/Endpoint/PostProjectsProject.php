<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;

class PostProjectsProject extends BaseEndpoint
{
    use \Paqtcom\Simplicate\Runtime\Client\EndpointTrait;

    /**
     * @param \Paqtcom\Simplicate\Model\PostProject $body Project object that needs to be added
     */
    public function __construct(\Paqtcom\Simplicate\Model\PostProject $body)
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
     * @throws \Paqtcom\Simplicate\Exception\PostProjectsProjectUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostProjectsProjectNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostProjectsProjectInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Paqtcom\Simplicate\Exception\PostProjectsProjectUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Paqtcom\Simplicate\Exception\PostProjectsProjectNotFoundException($response);
        }
        if (500 === $status) {
            throw new \Paqtcom\Simplicate\Exception\PostProjectsProjectInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
