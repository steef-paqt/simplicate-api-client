<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutUploadChunkedByIdBadRequestException;
use Paqtcom\Simplicate\Exception\PutUploadChunkedByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutUploadChunkedByIdNotFoundException;
use Paqtcom\Simplicate\Exception\PutUploadChunkedByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\PutChunked;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutUploadChunkedById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     * @param PutChunked $body Next chunk for an chunked_upload
     */
    public function __construct(protected string $id, PutChunked $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/upload/chunked/{id}');
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
     * @throws PutUploadChunkedByIdBadRequestException
     * @throws PutUploadChunkedByIdUnauthorizedException
     * @throws PutUploadChunkedByIdNotFoundException
     * @throws PutUploadChunkedByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new PutUploadChunkedByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutUploadChunkedByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PutUploadChunkedByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new PutUploadChunkedByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
