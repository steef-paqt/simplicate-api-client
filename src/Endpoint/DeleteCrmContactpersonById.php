<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\DeleteCrmContactpersonByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\DeleteCrmContactpersonByIdNotFoundException;
use Paqtcom\Simplicate\Exception\DeleteCrmContactpersonByIdUnauthorizedException;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class DeleteCrmContactpersonById extends BaseEndpoint
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
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/crm/contactperson/{id}');
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
     *
     * @throws DeleteCrmContactpersonByIdUnauthorizedException
     * @throws DeleteCrmContactpersonByIdNotFoundException
     * @throws DeleteCrmContactpersonByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new DeleteCrmContactpersonByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new DeleteCrmContactpersonByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new DeleteCrmContactpersonByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
