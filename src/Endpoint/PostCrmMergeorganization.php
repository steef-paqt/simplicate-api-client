<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostCrmMergeorganizationBadRequestException;
use Paqtcom\Simplicate\Exception\PostCrmMergeorganizationInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostCrmMergeorganizationUnauthorizedException;
use Paqtcom\Simplicate\Model\PostMerger;
use Paqtcom\Simplicate\Model\ResultMergerMerge;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostCrmMergeorganization extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PostMerger $body Merge object containing the source id and target id
     */
    public function __construct(PostMerger $body)
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
     * @return null|ResultMergerMerge
     *@throws PostCrmMergeorganizationUnauthorizedException
     * @throws PostCrmMergeorganizationInternalServerErrorException
     * @throws PostCrmMergeorganizationBadRequestException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, ResultMergerMerge::class, 'json');
        }
        if (400 === $status) {
            throw new PostCrmMergeorganizationBadRequestException($response);
        }
        if (401 === $status) {
            throw new PostCrmMergeorganizationUnauthorizedException($response);
        }
        if (500 === $status) {
            throw new PostCrmMergeorganizationInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
