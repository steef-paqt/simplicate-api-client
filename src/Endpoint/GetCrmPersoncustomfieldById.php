<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetCrmPersoncustomfieldByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetCrmPersoncustomfieldByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetCrmPersoncustomfieldByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetCrmPersoncustomfieldByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultCustomField;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetCrmPersoncustomfieldById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/crm/personcustomfields/{id}');
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
     * @return null|RestResultCustomField
     * @throws GetCrmPersoncustomfieldByIdNotFoundException
     * @throws GetCrmPersoncustomfieldByIdUnprocessableEntityException
     * @throws GetCrmPersoncustomfieldByIdInternalServerErrorException
     * @throws GetCrmPersoncustomfieldByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultCustomField::class, 'json');
        }
        if (401 === $status) {
            throw new GetCrmPersoncustomfieldByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetCrmPersoncustomfieldByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetCrmPersoncustomfieldByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetCrmPersoncustomfieldByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
