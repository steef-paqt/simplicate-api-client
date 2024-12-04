<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostDocumentsDocumentBadRequestException;
use Paqtcom\Simplicate\Exception\PostDocumentsDocumentInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostDocumentsDocumentUnauthorizedException;
use Paqtcom\Simplicate\Model\PostDocument;
use Paqtcom\Simplicate\Model\RestPostResult;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostDocumentsDocument extends BaseEndpoint
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
        return '/documents/document';
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
     * @throws PostDocumentsDocumentBadRequestException
     * @throws PostDocumentsDocumentUnauthorizedException
     * @throws PostDocumentsDocumentInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestPostResult::class, 'json');
        }
        if (400 === $status) {
            throw new PostDocumentsDocumentBadRequestException($response);
        }
        if (401 === $status) {
            throw new PostDocumentsDocumentUnauthorizedException($response);
        }
        if (500 === $status) {
            throw new PostDocumentsDocumentInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
