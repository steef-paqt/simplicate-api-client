<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostHoursHourstypeInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostHoursHourstypeNotFoundException;
use Paqtcom\Simplicate\Exception\PostHoursHourstypeUnauthorizedException;
use Paqtcom\Simplicate\Model\PostHoursType;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostHoursHourstype extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PostHoursType $body Hour type object that needs to be added
     */
    public function __construct(PostHoursType $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/hours/hourstype';
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
     * @throws PostHoursHourstypeUnauthorizedException
     * @throws PostHoursHourstypeNotFoundException
     * @throws PostHoursHourstypeInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new PostHoursHourstypeUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PostHoursHourstypeNotFoundException($response);
        }
        if (500 === $status) {
            throw new PostHoursHourstypeInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
