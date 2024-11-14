<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetTimelineMessageByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetTimelineMessageByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetTimelineMessageByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetTimelineMessageByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultTimelineMessage;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetTimelineMessageById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/timeline/message/{id}');
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
     * @return null|RestResultTimelineMessage
     * @throws GetTimelineMessageByIdNotFoundException
     * @throws GetTimelineMessageByIdUnprocessableEntityException
     * @throws GetTimelineMessageByIdInternalServerErrorException
     * @throws GetTimelineMessageByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultTimelineMessage::class, 'json');
        }
        if (401 === $status) {
            throw new GetTimelineMessageByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetTimelineMessageByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetTimelineMessageByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetTimelineMessageByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
