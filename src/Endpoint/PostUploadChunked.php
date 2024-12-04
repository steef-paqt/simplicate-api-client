<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostUploadChunkedBadRequestException;
use Paqtcom\Simplicate\Exception\PostUploadChunkedInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostUploadChunkedNotFoundException;
use Paqtcom\Simplicate\Exception\PostUploadChunkedUnauthorizedException;
use Paqtcom\Simplicate\Model\PostChunked;
use Paqtcom\Simplicate\Model\RestPostResult;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostUploadChunked extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PostChunked $body Data required to initialize an upload
     */
    public function __construct(PostChunked $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/upload/chunked';
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
     * @throws PostUploadChunkedBadRequestException
     * @throws PostUploadChunkedUnauthorizedException
     * @throws PostUploadChunkedNotFoundException
     * @throws PostUploadChunkedInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestPostResult::class, 'json');
        }
        if (400 === $status) {
            throw new PostUploadChunkedBadRequestException($response);
        }
        if (401 === $status) {
            throw new PostUploadChunkedUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PostUploadChunkedNotFoundException($response);
        }
        if (500 === $status) {
            throw new PostUploadChunkedInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
