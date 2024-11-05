<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutSharedItemByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutSharedItemByIdNotFoundException;
use Paqtcom\Simplicate\Exception\PutSharedItemByIdUnauthorizedException;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutSharedItemById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\PostSharedItem $body Shared item object that with the data that needs to be updated
     */
    public function __construct(protected string $id, \Paqtcom\Simplicate\Model\PostSharedItem $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/shared/item/{id}');
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
     * @throws PutSharedItemByIdUnauthorizedException
     * @throws PutSharedItemByIdNotFoundException
     * @throws PutSharedItemByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new PutSharedItemByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PutSharedItemByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new PutSharedItemByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
