<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultCustomFieldGroup;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetCrmOrganizationcustomfieldgroupById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/crm/organizationcustomfieldgroups/{id}');
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
     * @return null|RestResultCustomFieldGroup
     * @throws GetCrmOrganizationcustomfieldgroupByIdNotFoundException
     * @throws GetCrmOrganizationcustomfieldgroupByIdUnprocessableEntityException
     * @throws GetCrmOrganizationcustomfieldgroupByIdInternalServerErrorException
     * @throws GetCrmOrganizationcustomfieldgroupByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultCustomFieldGroup::class, 'json');
        }
        if (401 === $status) {
            throw new GetCrmOrganizationcustomfieldgroupByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetCrmOrganizationcustomfieldgroupByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetCrmOrganizationcustomfieldgroupByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetCrmOrganizationcustomfieldgroupByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
