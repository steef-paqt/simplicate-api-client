<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Endpoint;

use Steefdw\Simplicate\Runtime\Client\BaseEndpoint;

class PostMergerCompareorganization extends BaseEndpoint
{
    use \Steefdw\Simplicate\Runtime\Client\EndpointTrait;

    /**
     * @param \Steefdw\Simplicate\Model\PostMergerCompare $body Compare objects containing the source id and target id
     */
    public function __construct(\Steefdw\Simplicate\Model\PostMergerCompare $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/merger/compareorganization';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
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
     * @throws \Steefdw\Simplicate\Exception\PostMergerCompareorganizationBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PostMergerCompareorganizationUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostMergerCompareorganizationInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultMergerCompare
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, \Steefdw\Simplicate\Model\RestResultMergerCompare::class, 'json');
        }
        if (400 === $status) {
            throw new \Steefdw\Simplicate\Exception\PostMergerCompareorganizationBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Steefdw\Simplicate\Exception\PostMergerCompareorganizationUnauthorizedException($response);
        }
        if (500 === $status) {
            throw new \Steefdw\Simplicate\Exception\PostMergerCompareorganizationInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
