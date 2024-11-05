<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostTimelineAttachmentInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostTimelineAttachmentNotFoundException;
use Paqtcom\Simplicate\Exception\PostTimelineAttachmentUnauthorizedException;
use Paqtcom\Simplicate\Model\PostAttachment;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostTimelineAttachment extends BaseEndpoint
{
    use EndpointTrait;

    public function __construct(PostAttachment $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/timeline/attachment';
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
     * @throws PostTimelineAttachmentUnauthorizedException
     * @throws PostTimelineAttachmentNotFoundException
     * @throws PostTimelineAttachmentInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new PostTimelineAttachmentUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PostTimelineAttachmentNotFoundException($response);
        }
        if (500 === $status) {
            throw new PostTimelineAttachmentInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
