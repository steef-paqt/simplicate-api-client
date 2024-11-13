<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetCrmOrganizationByIdBadRequestException;
use Paqtcom\Simplicate\Exception\GetCrmOrganizationByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetCrmOrganizationByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetCrmOrganizationByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultOrganization;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetCrmOrganizationById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/crm/organization/{id}');
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
     * @return null|RestResultOrganization
     * @throws GetCrmOrganizationByIdUnauthorizedException
     * @throws GetCrmOrganizationByIdUnprocessableEntityException
     * @throws GetCrmOrganizationByIdInternalServerErrorException
     * @throws GetCrmOrganizationByIdBadRequestException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultOrganization::class, 'json');
        }
        if (400 === $status) {
            throw new GetCrmOrganizationByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new GetCrmOrganizationByIdUnauthorizedException($response);
        }
        if (422 === $status) {
            throw new GetCrmOrganizationByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetCrmOrganizationByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
