<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;

class GetCrmOrganizationById extends BaseEndpoint
{
    use \Paqtcom\Simplicate\Runtime\Client\EndpointTrait;

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

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
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
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultOrganization
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, \Paqtcom\Simplicate\Model\RestResultOrganization::class, 'json');
        }
        if (400 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetCrmOrganizationByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetCrmOrganizationByIdUnauthorizedException($response);
        }
        if (422 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetCrmOrganizationByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetCrmOrganizationByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
