<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutHoursHourByIdBadRequestException;
use Paqtcom\Simplicate\Exception\PutHoursHourByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutHoursHourByIdNotFoundException;
use Paqtcom\Simplicate\Exception\PutHoursHourByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\PostHours;
use Paqtcom\Simplicate\Model\PutChunked;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutHoursHourById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     * @param PostHours $body Hours object that needs to be updated
     */
    public function __construct(protected string $id, PostHours $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/hours/hours/{id}');
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
     * @throws PutHoursHourByIdBadRequestException
     * @throws PutHoursHourByIdUnauthorizedException
     * @throws PutHoursHourByIdNotFoundException
     * @throws PutHoursHourByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, PutChunked::class, 'json');
        }
        if (400 === $status) {
            throw new PutHoursHourByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutHoursHourByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PutHoursHourByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new PutHoursHourByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
