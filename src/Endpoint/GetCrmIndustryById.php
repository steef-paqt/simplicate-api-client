<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetCrmIndustryByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetCrmIndustryByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetCrmIndustryByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetCrmIndustryByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultIndustry;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetCrmIndustryById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/crm/industry/{id}');
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
     * @return null|RestResultIndustry
     * @throws GetCrmIndustryByIdNotFoundException
     * @throws GetCrmIndustryByIdUnprocessableEntityException
     * @throws GetCrmIndustryByIdInternalServerErrorException
     * @throws GetCrmIndustryByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultIndustry::class, 'json');
        }
        if (401 === $status) {
            throw new GetCrmIndustryByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetCrmIndustryByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetCrmIndustryByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetCrmIndustryByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
