<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetCrmOrganizationsizeByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetCrmOrganizationsizeByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetCrmOrganizationsizeByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetCrmOrganizationsizeByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultOrganizationSize;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetCrmOrganizationsizeById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/crm/organizationsize/{id}');
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
     * @return null|RestResultOrganizationSize
     *@throws GetCrmOrganizationsizeByIdNotFoundException
     * @throws GetCrmOrganizationsizeByIdUnprocessableEntityException
     * @throws GetCrmOrganizationsizeByIdInternalServerErrorException
     * @throws GetCrmOrganizationsizeByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultOrganizationSize::class, 'json');
        }
        if (401 === $status) {
            throw new GetCrmOrganizationsizeByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetCrmOrganizationsizeByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetCrmOrganizationsizeByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetCrmOrganizationsizeByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
