<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutTimersTimerByIdBadRequestException;
use Paqtcom\Simplicate\Exception\PutTimersTimerByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutTimersTimerByIdNotFoundException;
use Paqtcom\Simplicate\Exception\PutTimersTimerByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\PutTimer;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutTimersTimerById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     * @param PutTimer $body Timer object that needs to be updated
     */
    public function __construct(protected string $id, PutTimer $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/timers/timer/{id}');
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
     * @throws PutTimersTimerByIdBadRequestException
     * @throws PutTimersTimerByIdUnauthorizedException
     * @throws PutTimersTimerByIdNotFoundException
     * @throws PutTimersTimerByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new PutTimersTimerByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutTimersTimerByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PutTimersTimerByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new PutTimersTimerByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
