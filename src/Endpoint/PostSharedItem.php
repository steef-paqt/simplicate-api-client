<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostSharedItemInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostSharedItemNotFoundException;
use Paqtcom\Simplicate\Exception\PostSharedItemUnauthorizedException;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostSharedItem extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param \Paqtcom\Simplicate\Model\PostSharedItem $body Item object that needs to be added
     */
    public function __construct(\Paqtcom\Simplicate\Model\PostSharedItem $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/shared/item';
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
     * @throws PostSharedItemUnauthorizedException
     * @throws PostSharedItemNotFoundException
     * @throws PostSharedItemInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new PostSharedItemUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PostSharedItemNotFoundException($response);
        }
        if (500 === $status) {
            throw new PostSharedItemInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
