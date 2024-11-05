<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\DeleteTimelineAttachmentByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\DeleteTimelineAttachmentByIdNotFoundException;
use Paqtcom\Simplicate\Exception\DeleteTimelineAttachmentByIdUnauthorizedException;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class DeleteTimelineAttachmentById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     */
    public function __construct(protected string $id)
    {
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/timeline/attachment/{id}');
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws DeleteTimelineAttachmentByIdUnauthorizedException
     * @throws DeleteTimelineAttachmentByIdNotFoundException
     * @throws DeleteTimelineAttachmentByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new DeleteTimelineAttachmentByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new DeleteTimelineAttachmentByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new DeleteTimelineAttachmentByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
