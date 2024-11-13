<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetCrmPersonByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetCrmPersonByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetCrmPersonByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetCrmPersonByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultPerson;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetCrmPersonById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/crm/person/{id}');
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
     * @return null|RestResultPerson
     * @throws GetCrmPersonByIdNotFoundException
     * @throws GetCrmPersonByIdUnprocessableEntityException
     * @throws GetCrmPersonByIdInternalServerErrorException
     * @throws GetCrmPersonByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultPerson::class, 'json');
        }
        if (401 === $status) {
            throw new GetCrmPersonByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetCrmPersonByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetCrmPersonByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetCrmPersonByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
