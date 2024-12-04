<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutHrmLeaveByIdBadRequestException;
use Paqtcom\Simplicate\Exception\PutHrmLeaveByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutHrmLeaveByIdNotFoundException;
use Paqtcom\Simplicate\Exception\PutHrmLeaveByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\PostLeave;
use Paqtcom\Simplicate\Model\RestPutResult;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutHrmLeaveById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/hrm/leave/{id}');
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
     * @throws PutHrmLeaveByIdBadRequestException
     * @throws PutHrmLeaveByIdUnauthorizedException
     * @throws PutHrmLeaveByIdNotFoundException
     * @throws PutHrmLeaveByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestPutResult::class, 'json');
        }
        if (400 === $status) {
            throw new PutHrmLeaveByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutHrmLeaveByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PutHrmLeaveByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new PutHrmLeaveByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
