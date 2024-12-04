<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostHoursLeaveBadRequestException;
use Paqtcom\Simplicate\Exception\PostHoursLeaveInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostHoursLeaveUnauthorizedException;
use Paqtcom\Simplicate\Model\PostLeave;
use Paqtcom\Simplicate\Model\RestPostResult;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostHoursLeave extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PostLeave $body leave object containing data
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
        return '/hours/leave';
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
     * @throws PostHoursLeaveBadRequestException
     * @throws PostHoursLeaveUnauthorizedException
     * @throws PostHoursLeaveInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestPostResult::class, 'json');
        }
        if (204 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new PostHoursLeaveBadRequestException($response);
        }
        if (401 === $status) {
            throw new PostHoursLeaveUnauthorizedException($response);
        }
        if (500 === $status) {
            throw new PostHoursLeaveInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
