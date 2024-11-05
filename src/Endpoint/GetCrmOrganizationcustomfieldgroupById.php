<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Endpoint;

use Steefdw\Simplicate\Runtime\Client\BaseEndpoint;
use Steefdw\Simplicate\Runtime\Client\Endpoint;

class GetCrmOrganizationcustomfieldgroupById extends BaseEndpoint implements Endpoint
{
    use \Steefdw\Simplicate\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     *
     *
     * @param string $id The template's id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
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
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCustomFieldGroup
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, \Steefdw\Simplicate\Model\RestResultCustomFieldGroup::class, 'json');
        }
        if (401 === $status) {
            throw new \Steefdw\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Steefdw\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new \Steefdw\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new \Steefdw\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
