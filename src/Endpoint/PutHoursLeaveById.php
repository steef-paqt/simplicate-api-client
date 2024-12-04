<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutHoursLeaveByIdBadRequestException;
use Paqtcom\Simplicate\Exception\PutHoursLeaveByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutHoursLeaveByIdNotFoundException;
use Paqtcom\Simplicate\Exception\PutHoursLeaveByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\PostLeave;
use Paqtcom\Simplicate\Model\RestPutResult;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutHoursLeaveById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     * @param PostLeave $body Leave object containing data that with the new values
     */
    public function __construct(protected string $id, PostLeave $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/hours/leave/{id}');
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
     * @throws PutHoursLeaveByIdBadRequestException
     * @throws PutHoursLeaveByIdUnauthorizedException
     * @throws PutHoursLeaveByIdNotFoundException
     * @throws PutHoursLeaveByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestPutResult::class, 'json');
        }
        if (400 === $status) {
            throw new PutHoursLeaveByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutHoursLeaveByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PutHoursLeaveByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new PutHoursLeaveByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
