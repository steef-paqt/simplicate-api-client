<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostHoursApprovalInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostHoursApprovalNotFoundException;
use Paqtcom\Simplicate\Exception\PostHoursApprovalUnauthorizedException;
use Paqtcom\Simplicate\Model\PostApproval;
use Paqtcom\Simplicate\Model\RestPostResult;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostHoursApproval extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PostApproval $body Approval object that needs to be added
     */
    public function __construct(PostApproval $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/hours/approval';
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
     * @throws PostHoursApprovalUnauthorizedException
     * @throws PostHoursApprovalNotFoundException
     * @throws PostHoursApprovalInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestPostResult::class, 'json');
        }
        if (401 === $status) {
            throw new PostHoursApprovalUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PostHoursApprovalNotFoundException($response);
        }
        if (500 === $status) {
            throw new PostHoursApprovalInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
