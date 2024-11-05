<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;

class PostHrmLeave extends BaseEndpoint
{
    use \Paqtcom\Simplicate\Runtime\Client\EndpointTrait;

    /**
     * @param \Paqtcom\Simplicate\Model\PostLeave $body Leave object containing data
     */
    public function __construct(\Paqtcom\Simplicate\Model\PostLeave $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/hrm/leave';
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
     * @throws \Paqtcom\Simplicate\Exception\PostHrmLeaveBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostHrmLeaveUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostHrmLeaveInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Paqtcom\Simplicate\Exception\PostHrmLeaveBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Paqtcom\Simplicate\Exception\PostHrmLeaveUnauthorizedException($response);
        }
        if (500 === $status) {
            throw new \Paqtcom\Simplicate\Exception\PostHrmLeaveInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
