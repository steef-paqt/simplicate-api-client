<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetCrmContactpersonByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetCrmContactpersonByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetCrmContactpersonByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetCrmContactpersonByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultContactPerson;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetCrmContactpersonById extends BaseEndpoint
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
     * @return null|RestResultContactPerson
     * @throws GetCrmContactpersonByIdNotFoundException
     * @throws GetCrmContactpersonByIdUnprocessableEntityException
     * @throws GetCrmContactpersonByIdInternalServerErrorException
     * @throws GetCrmContactpersonByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultContactPerson::class, 'json');
        }
        if (401 === $status) {
            throw new GetCrmContactpersonByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetCrmContactpersonByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetCrmContactpersonByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetCrmContactpersonByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
