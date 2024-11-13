<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetTimersTimerByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetTimersTimerByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetTimersTimerByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetTimersTimerByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultTimer;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetTimersTimerById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/timers/timer/{id}');
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
     * @return null|RestResultTimer
     * @throws GetTimersTimerByIdNotFoundException
     * @throws GetTimersTimerByIdUnprocessableEntityException
     * @throws GetTimersTimerByIdInternalServerErrorException
     * @throws GetTimersTimerByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultTimer::class, 'json');
        }
        if (401 === $status) {
            throw new GetTimersTimerByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetTimersTimerByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetTimersTimerByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetTimersTimerByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
