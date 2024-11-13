<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetCrmGenderByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetCrmGenderByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetCrmGenderByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetCrmGenderByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultGender;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetCrmGenderById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/crm/gender/{id}');
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
     * @return null|RestResultGender
     * @throws GetCrmGenderByIdNotFoundException
     * @throws GetCrmGenderByIdUnprocessableEntityException
     * @throws GetCrmGenderByIdInternalServerErrorException
     * @throws GetCrmGenderByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultGender::class, 'json');
        }
        if (401 === $status) {
            throw new GetCrmGenderByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetCrmGenderByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetCrmGenderByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetCrmGenderByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
