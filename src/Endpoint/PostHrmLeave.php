<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostHrmLeaveBadRequestException;
use Paqtcom\Simplicate\Exception\PostHrmLeaveInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostHrmLeaveUnauthorizedException;
use Paqtcom\Simplicate\Model\PostLeave;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostHrmLeave extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PostLeave $body Leave object containing data
     */
    public function __construct(PostLeave $body)
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
     * @throws PostHrmLeaveBadRequestException
     * @throws PostHrmLeaveUnauthorizedException
     * @throws PostHrmLeaveInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new PostHrmLeaveBadRequestException($response);
        }
        if (401 === $status) {
            throw new PostHrmLeaveUnauthorizedException($response);
        }
        if (500 === $status) {
            throw new PostHrmLeaveInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
