<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetTimelineMessagetypeByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetTimelineMessagetypeByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetTimelineMessagetypeByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetTimelineMessagetypeByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultTimelineMessageType;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetTimelineMessagetypeById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/timeline/messagetype/{id}');
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
     * @return null|RestResultTimelineMessageType
     * @throws GetTimelineMessagetypeByIdNotFoundException
     * @throws GetTimelineMessagetypeByIdUnprocessableEntityException
     * @throws GetTimelineMessagetypeByIdInternalServerErrorException
     * @throws GetTimelineMessagetypeByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultTimelineMessageType::class, 'json');
        }
        if (401 === $status) {
            throw new GetTimelineMessagetypeByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetTimelineMessagetypeByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetTimelineMessagetypeByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetTimelineMessagetypeByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
