<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutProjectsDocumentBadRequestException;
use Paqtcom\Simplicate\Exception\PutProjectsDocumentInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutProjectsDocumentUnauthorizedException;
use Paqtcom\Simplicate\Model\PutChunked;
use Paqtcom\Simplicate\Model\PutDocument;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutProjectsDocument extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PutDocument $body Document object containing data
     */
    public function __construct(PutDocument $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'PUT';
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
     * @throws PutProjectsDocumentBadRequestException
     * @throws PutProjectsDocumentUnauthorizedException
     * @throws PutProjectsDocumentInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, PutChunked::class, 'json');
        }
        if (400 === $status) {
            throw new PutProjectsDocumentBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutProjectsDocumentUnauthorizedException($response);
        }
        if (500 === $status) {
            throw new PutProjectsDocumentInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
