<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostCrmDocumentBadRequestException;
use Paqtcom\Simplicate\Exception\PostCrmDocumentInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostCrmDocumentUnauthorizedException;
use Paqtcom\Simplicate\Model\PostDocument;
use Paqtcom\Simplicate\Model\RestPostResult;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostCrmDocument extends BaseEndpoint
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
        return '/crm/document';
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
     * @throws PostCrmDocumentBadRequestException
     * @throws PostCrmDocumentUnauthorizedException
     * @throws PostCrmDocumentInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestPostResult::class, 'json');
        }
        if (400 === $status) {
            throw new PostCrmDocumentBadRequestException($response);
        }
        if (401 === $status) {
            throw new PostCrmDocumentUnauthorizedException($response);
        }
        if (500 === $status) {
            throw new PostCrmDocumentInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
