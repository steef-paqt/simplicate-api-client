<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;

class GetCrmOrganizationcustomfieldgroupById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/crm/organizationcustomfieldgroups/{id}');
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
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCustomFieldGroup
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, \Paqtcom\Simplicate\Model\RestResultCustomFieldGroup::class, 'json');
        }
        if (401 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
