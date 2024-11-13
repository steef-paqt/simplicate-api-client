<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetCrmInterestByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetCrmInterestByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetCrmInterestByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetCrmInterestByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultInterest;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetCrmInterestById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/crm/interests/{id}');
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
     * @return null|RestResultInterest
     * @throws GetCrmInterestByIdNotFoundException
     * @throws GetCrmInterestByIdUnprocessableEntityException
     * @throws GetCrmInterestByIdInternalServerErrorException
     * @throws GetCrmInterestByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultInterest::class, 'json');
        }
        if (401 === $status) {
            throw new GetCrmInterestByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetCrmInterestByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetCrmInterestByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetCrmInterestByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
