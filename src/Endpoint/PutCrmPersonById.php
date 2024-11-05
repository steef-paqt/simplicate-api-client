<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutCrmPersonByIdBadRequestException;
use Paqtcom\Simplicate\Exception\PutCrmPersonByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutCrmPersonByIdNotFoundException;
use Paqtcom\Simplicate\Exception\PutCrmPersonByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\PostPerson;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutCrmPersonById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     * @param PostPerson $body Person object that needs to be added
     */
    public function __construct(protected string $id, PostPerson $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/crm/person/{id}');
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
     * @throws PutCrmPersonByIdBadRequestException
     * @throws PutCrmPersonByIdUnauthorizedException
     * @throws PutCrmPersonByIdNotFoundException
     * @throws PutCrmPersonByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new PutCrmPersonByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutCrmPersonByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PutCrmPersonByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new PutCrmPersonByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
