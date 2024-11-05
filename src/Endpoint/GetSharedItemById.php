<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetSharedItemByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetSharedItemByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetSharedItemByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetSharedItemByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultSharedItem;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetSharedItemById extends BaseEndpoint
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
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/shared/item/{id}');
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
     * @return null|RestResultSharedItem
     *@throws GetSharedItemByIdNotFoundException
     * @throws GetSharedItemByIdUnprocessableEntityException
     * @throws GetSharedItemByIdInternalServerErrorException
     * @throws GetSharedItemByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultSharedItem::class, 'json');
        }
        if (401 === $status) {
            throw new GetSharedItemByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetSharedItemByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetSharedItemByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetSharedItemByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
