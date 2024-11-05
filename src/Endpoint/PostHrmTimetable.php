<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostHrmTimetableInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostHrmTimetableNotFoundException;
use Paqtcom\Simplicate\Exception\PostHrmTimetableUnauthorizedException;
use Paqtcom\Simplicate\Model\PostTimetable;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostHrmTimetable extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PostTimetable $body Timetable object that needs to be added
     */
    public function __construct(PostTimetable $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/hrm/timetable';
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
     * @throws PostHrmTimetableUnauthorizedException
     * @throws PostHrmTimetableNotFoundException
     * @throws PostHrmTimetableInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new PostHrmTimetableUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PostHrmTimetableNotFoundException($response);
        }
        if (500 === $status) {
            throw new PostHrmTimetableInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
