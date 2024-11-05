<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostCrmOrganizationBadRequestException;
use Paqtcom\Simplicate\Exception\PostCrmOrganizationInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostCrmOrganizationUnauthorizedException;
use Paqtcom\Simplicate\Model\PostOrganization;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostCrmOrganization extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PostOrganization $body Organization object containing data
     */
    public function __construct(PostOrganization $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/crm/organization';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws PostCrmOrganizationBadRequestException
     * @throws PostCrmOrganizationUnauthorizedException
     * @throws PostCrmOrganizationInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new PostCrmOrganizationBadRequestException($response);
        }
        if (401 === $status) {
            throw new PostCrmOrganizationUnauthorizedException($response);
        }
        if (500 === $status) {
            throw new PostCrmOrganizationInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
