<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetCrmRelationtypeByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetCrmRelationtypeByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetCrmRelationtypeByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetCrmRelationtypeByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultRelationType;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetCrmRelationtypeById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/crm/relationtype/{id}');
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
     * @return null|RestResultRelationType
     * @throws GetCrmRelationtypeByIdNotFoundException
     * @throws GetCrmRelationtypeByIdUnprocessableEntityException
     * @throws GetCrmRelationtypeByIdInternalServerErrorException
     * @throws GetCrmRelationtypeByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultRelationType::class, 'json');
        }
        if (401 === $status) {
            throw new GetCrmRelationtypeByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetCrmRelationtypeByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetCrmRelationtypeByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetCrmRelationtypeByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
