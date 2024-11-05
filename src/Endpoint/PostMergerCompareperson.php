<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostMergerComparepersonBadRequestException;
use Paqtcom\Simplicate\Exception\PostMergerComparepersonInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostMergerComparepersonUnauthorizedException;
use Paqtcom\Simplicate\Model\PostMergerCompare;
use Paqtcom\Simplicate\Model\RestResultMergerCompare;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostMergerCompareperson extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PostMergerCompare $body Compare objects containing the source id and target id
     */
    public function __construct(PostMergerCompare $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/merger/compareperson';
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
     * @return null|RestResultMergerCompare
     *@throws PostMergerComparepersonUnauthorizedException
     * @throws PostMergerComparepersonInternalServerErrorException
     * @throws PostMergerComparepersonBadRequestException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultMergerCompare::class, 'json');
        }
        if (400 === $status) {
            throw new PostMergerComparepersonBadRequestException($response);
        }
        if (401 === $status) {
            throw new PostMergerComparepersonUnauthorizedException($response);
        }
        if (500 === $status) {
            throw new PostMergerComparepersonInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
