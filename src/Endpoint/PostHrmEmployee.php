<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostHrmEmployeeInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostHrmEmployeeNotFoundException;
use Paqtcom\Simplicate\Exception\PostHrmEmployeeUnauthorizedException;
use Paqtcom\Simplicate\Model\PostEmployee;
use Paqtcom\Simplicate\Model\RestPostResult;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostHrmEmployee extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PostEmployee $body Employee object that needs to be added
     */
    public function __construct(PostEmployee $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/hrm/employee';
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
     * @throws PostHrmEmployeeUnauthorizedException
     * @throws PostHrmEmployeeNotFoundException
     * @throws PostHrmEmployeeInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestPostResult::class, 'json');
        }
        if (401 === $status) {
            throw new PostHrmEmployeeUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PostHrmEmployeeNotFoundException($response);
        }
        if (500 === $status) {
            throw new PostHrmEmployeeInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
