<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultCustomField;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetCrmOrganizationcustomfieldById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/crm/organizationcustomfields/{id}');
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
     * @throws GetCrmOrganizationcustomfieldByIdNotFoundException
     * @throws GetCrmOrganizationcustomfieldByIdUnprocessableEntityException
     * @throws GetCrmOrganizationcustomfieldByIdInternalServerErrorException
     * @throws GetCrmOrganizationcustomfieldByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultCustomField::class, 'json');
        }
        if (401 === $status) {
            throw new GetCrmOrganizationcustomfieldByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetCrmOrganizationcustomfieldByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetCrmOrganizationcustomfieldByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetCrmOrganizationcustomfieldByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
