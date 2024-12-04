<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostTimelineMessageInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostTimelineMessageNotFoundException;
use Paqtcom\Simplicate\Exception\PostTimelineMessageUnauthorizedException;
use Paqtcom\Simplicate\Model\PostMessage;
use Paqtcom\Simplicate\Model\RestPostResult;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostTimelineMessage extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PostMessage $body Timeline message that needs to be added
     */
    public function __construct(PostMessage $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/timeline/message';
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
     * @throws PostTimelineMessageUnauthorizedException
     * @throws PostTimelineMessageNotFoundException
     * @throws PostTimelineMessageInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestPostResult::class, 'json');
        }
        if (401 === $status) {
            throw new PostTimelineMessageUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PostTimelineMessageNotFoundException($response);
        }
        if (500 === $status) {
            throw new PostTimelineMessageInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
