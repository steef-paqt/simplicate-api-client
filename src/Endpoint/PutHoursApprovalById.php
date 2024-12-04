<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutHoursApprovalByIdBadRequestException;
use Paqtcom\Simplicate\Exception\PutHoursApprovalByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutHoursApprovalByIdNotFoundException;
use Paqtcom\Simplicate\Exception\PutHoursApprovalByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\PostApproval;
use Paqtcom\Simplicate\Model\PutChunked;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutHoursApprovalById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     * @param PostApproval $body Approval object that needs to be updated
     */
    public function __construct(protected string $id, PostApproval $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/hours/approval/{id}');
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
     * @throws PutHoursApprovalByIdBadRequestException
     * @throws PutHoursApprovalByIdUnauthorizedException
     * @throws PutHoursApprovalByIdNotFoundException
     * @throws PutHoursApprovalByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, PutChunked::class, 'json');
        }
        if (400 === $status) {
            throw new PutHoursApprovalByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutHoursApprovalByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PutHoursApprovalByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new PutHoursApprovalByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
