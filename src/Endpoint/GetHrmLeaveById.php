<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetHrmLeaveByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetHrmLeaveByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetHrmLeaveByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\RestResultLeave;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetHrmLeaveById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/hrm/leave/{id}');
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
     * @return null|RestResultLeave
     * @throws GetHrmLeaveByIdNotFoundException
     * @throws GetHrmLeaveByIdInternalServerErrorException
     * @throws GetHrmLeaveByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultLeave::class, 'json');
        }
        if (401 === $status) {
            throw new GetHrmLeaveByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetHrmLeaveByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new GetHrmLeaveByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
