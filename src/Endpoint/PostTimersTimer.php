<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostTimersTimerInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostTimersTimerNotFoundException;
use Paqtcom\Simplicate\Exception\PostTimersTimerUnauthorizedException;
use Paqtcom\Simplicate\Model\PostTimer;
use Paqtcom\Simplicate\Model\RestPostResult;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostTimersTimer extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PostTimer $body Timer object that needs to be added
     */
    public function __construct(PostTimer $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/timers/timer';
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
     * @throws PostTimersTimerUnauthorizedException
     * @throws PostTimersTimerNotFoundException
     * @throws PostTimersTimerInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestPostResult::class, 'json');
        }
        if (401 === $status) {
            throw new PostTimersTimerUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PostTimersTimerNotFoundException($response);
        }
        if (500 === $status) {
            throw new PostTimersTimerInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
