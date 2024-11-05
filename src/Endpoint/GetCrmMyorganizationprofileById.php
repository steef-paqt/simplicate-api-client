<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetCrmMyorganizationprofileByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetCrmMyorganizationprofileByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetCrmMyorganizationprofileByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetCrmMyorganizationprofileByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultMyOrganizationProfile;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetCrmMyorganizationprofileById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/crm/myorganizationprofile/{id}');
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
     * @return null|RestResultMyOrganizationProfile
     *@throws GetCrmMyorganizationprofileByIdNotFoundException
     * @throws GetCrmMyorganizationprofileByIdUnprocessableEntityException
     * @throws GetCrmMyorganizationprofileByIdInternalServerErrorException
     * @throws GetCrmMyorganizationprofileByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultMyOrganizationProfile::class, 'json');
        }
        if (401 === $status) {
            throw new GetCrmMyorganizationprofileByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetCrmMyorganizationprofileByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetCrmMyorganizationprofileByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetCrmMyorganizationprofileByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
