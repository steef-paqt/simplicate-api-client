<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetHoursApprovalByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetHoursApprovalByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetHoursApprovalByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetHoursApprovalByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultApproval;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetHoursApprovalById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/hours/approval/{id}');
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
     * @return null|RestResultApproval
     * @throws GetHoursApprovalByIdNotFoundException
     * @throws GetHoursApprovalByIdUnprocessableEntityException
     * @throws GetHoursApprovalByIdInternalServerErrorException
     * @throws GetHoursApprovalByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultApproval::class, 'json');
        }
        if (401 === $status) {
            throw new GetHoursApprovalByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetHoursApprovalByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetHoursApprovalByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetHoursApprovalByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
