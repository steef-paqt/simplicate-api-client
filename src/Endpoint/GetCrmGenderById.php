<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Endpoint;

use Steefdw\Simplicate\Runtime\Client\BaseEndpoint;

class GetCrmGenderById extends BaseEndpoint
{
    use \Steefdw\Simplicate\Runtime\Client\EndpointTrait;

    /**
     *
     *
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
        return str_replace(['{id}'], [$this->id], '/crm/gender/{id}');
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
     * @throws \Steefdw\Simplicate\Exception\GetCrmGenderByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmGenderByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmGenderByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetCrmGenderByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultGender
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, \Steefdw\Simplicate\Model\RestResultGender::class, 'json');
        }
        if (401 === $status) {
            throw new \Steefdw\Simplicate\Exception\GetCrmGenderByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Steefdw\Simplicate\Exception\GetCrmGenderByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new \Steefdw\Simplicate\Exception\GetCrmGenderByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new \Steefdw\Simplicate\Exception\GetCrmGenderByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
