<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutCrmOrganizationByIdBadRequestException;
use Paqtcom\Simplicate\Exception\PutCrmOrganizationByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutCrmOrganizationByIdNotFoundException;
use Paqtcom\Simplicate\Exception\PutCrmOrganizationByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\PostOrganization;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutCrmOrganizationById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     * @param PostOrganization $body Organization object containing data that with the new values
     */
    public function __construct(protected string $id, PostOrganization $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/crm/organization/{id}');
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
     * @throws PutCrmOrganizationByIdBadRequestException
     * @throws PutCrmOrganizationByIdUnauthorizedException
     * @throws PutCrmOrganizationByIdNotFoundException
     * @throws PutCrmOrganizationByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new PutCrmOrganizationByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutCrmOrganizationByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PutCrmOrganizationByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new PutCrmOrganizationByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
