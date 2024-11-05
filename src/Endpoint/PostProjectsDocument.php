<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostProjectsDocumentBadRequestException;
use Paqtcom\Simplicate\Exception\PostProjectsDocumentInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostProjectsDocumentUnauthorizedException;
use Paqtcom\Simplicate\Model\PostDocument;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostProjectsDocument extends BaseEndpoint
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
        return '/projects/document';
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
     * @throws PostProjectsDocumentBadRequestException
     * @throws PostProjectsDocumentUnauthorizedException
     * @throws PostProjectsDocumentInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new PostProjectsDocumentBadRequestException($response);
        }
        if (401 === $status) {
            throw new PostProjectsDocumentUnauthorizedException($response);
        }
        if (500 === $status) {
            throw new PostProjectsDocumentInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
