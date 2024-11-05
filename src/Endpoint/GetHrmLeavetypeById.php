<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetHrmLeavetypeByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetHrmLeavetypeByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetHrmLeavetypeByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetHrmLeavetypeByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultLeaveType;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetHrmLeavetypeById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/hrm/leavetype/{id}');
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
     * @return null|RestResultLeaveType
     *@throws GetHrmLeavetypeByIdNotFoundException
     * @throws GetHrmLeavetypeByIdUnprocessableEntityException
     * @throws GetHrmLeavetypeByIdInternalServerErrorException
     * @throws GetHrmLeavetypeByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultLeaveType::class, 'json');
        }
        if (401 === $status) {
            throw new GetHrmLeavetypeByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetHrmLeavetypeByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetHrmLeavetypeByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetHrmLeavetypeByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
