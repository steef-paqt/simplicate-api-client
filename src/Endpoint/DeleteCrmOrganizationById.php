<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;

class DeleteCrmOrganizationById extends BaseEndpoint
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
        return 'DELETE';
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
     * @throws \Paqtcom\Simplicate\Exception\DeleteCrmOrganizationByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteCrmOrganizationByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteCrmOrganizationByIdInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Paqtcom\Simplicate\Exception\DeleteCrmOrganizationByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Paqtcom\Simplicate\Exception\DeleteCrmOrganizationByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new \Paqtcom\Simplicate\Exception\DeleteCrmOrganizationByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
