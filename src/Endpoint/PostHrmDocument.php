<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostHrmDocumentBadRequestException;
use Paqtcom\Simplicate\Exception\PostHrmDocumentInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostHrmDocumentUnauthorizedException;
use Paqtcom\Simplicate\Model\PostDocument;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostHrmDocument extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PostDocument $body Document object containing data
     */
    public function __construct(PostDocument $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/hrm/document';
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
     * @throws PostHrmDocumentBadRequestException
     * @throws PostHrmDocumentUnauthorizedException
     * @throws PostHrmDocumentInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new PostHrmDocumentBadRequestException($response);
        }
        if (401 === $status) {
            throw new PostHrmDocumentUnauthorizedException($response);
        }
        if (500 === $status) {
            throw new PostHrmDocumentInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
