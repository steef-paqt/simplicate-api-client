<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;

class PostMergerCompareorganization extends BaseEndpoint
{
    use \Paqtcom\Simplicate\Runtime\Client\EndpointTrait;

    /**
     * @param \Paqtcom\Simplicate\Model\PostMergerCompare $body Compare objects containing the source id and target id
     */
    public function __construct(\Paqtcom\Simplicate\Model\PostMergerCompare $body)
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
     * @throws \Paqtcom\Simplicate\Exception\PostMergerCompareorganizationBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostMergerCompareorganizationUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostMergerCompareorganizationInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultMergerCompare
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, \Paqtcom\Simplicate\Model\RestResultMergerCompare::class, 'json');
        }
        if (400 === $status) {
            throw new \Paqtcom\Simplicate\Exception\PostMergerCompareorganizationBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Paqtcom\Simplicate\Exception\PostMergerCompareorganizationUnauthorizedException($response);
        }
        if (500 === $status) {
            throw new \Paqtcom\Simplicate\Exception\PostMergerCompareorganizationInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
