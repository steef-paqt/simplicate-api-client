<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Endpoint;

use Steefdw\Simplicate\Runtime\Client\BaseEndpoint;
use Steefdw\Simplicate\Runtime\Client\Endpoint;

class PutCrmPersonById extends BaseEndpoint implements Endpoint
{
    use \Steefdw\Simplicate\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     *
     *
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\PostPerson $body Person object that needs to be added
     */
    public function __construct(string $id, \Steefdw\Simplicate\Model\PostPerson $body)
    {
        $this->id = $id;
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

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
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
     * @throws \Steefdw\Simplicate\Exception\PutCrmPersonByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutCrmPersonByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutCrmPersonByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PutCrmPersonByIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Steefdw\Simplicate\Exception\PutCrmPersonByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Steefdw\Simplicate\Exception\PutCrmPersonByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Steefdw\Simplicate\Exception\PutCrmPersonByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new \Steefdw\Simplicate\Exception\PutCrmPersonByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
