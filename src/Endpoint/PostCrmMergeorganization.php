<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;

class PostCrmMergeorganization extends BaseEndpoint
{
    use \Paqtcom\Simplicate\Runtime\Client\EndpointTrait;

    /**
     * @param \Paqtcom\Simplicate\Model\PostMerger $body Merge object containing the source id and target id
     */
    public function __construct(\Paqtcom\Simplicate\Model\PostMerger $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/crm/mergeorganization';
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
     * @throws \Paqtcom\Simplicate\Exception\PostCrmMergeorganizationBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostCrmMergeorganizationUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostCrmMergeorganizationInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\ResultMergerMerge
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, \Paqtcom\Simplicate\Model\ResultMergerMerge::class, 'json');
        }
        if (400 === $status) {
            throw new \Paqtcom\Simplicate\Exception\PostCrmMergeorganizationBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Paqtcom\Simplicate\Exception\PostCrmMergeorganizationUnauthorizedException($response);
        }
        if (500 === $status) {
            throw new \Paqtcom\Simplicate\Exception\PostCrmMergeorganizationInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
