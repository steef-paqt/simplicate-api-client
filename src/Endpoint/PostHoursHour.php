<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostHoursHourInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostHoursHourNotFoundException;
use Paqtcom\Simplicate\Exception\PostHoursHourUnauthorizedException;
use Paqtcom\Simplicate\Model\PostHours;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostHoursHour extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PostHours $body Hours object that needs to be added
     */
    public function __construct(PostHours $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/hours/hours';
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
     * @throws PostHoursHourUnauthorizedException
     * @throws PostHoursHourNotFoundException
     * @throws PostHoursHourInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new PostHoursHourUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PostHoursHourNotFoundException($response);
        }
        if (500 === $status) {
            throw new PostHoursHourInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
