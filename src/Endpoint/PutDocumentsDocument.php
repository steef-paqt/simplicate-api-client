<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutDocumentsDocumentBadRequestException;
use Paqtcom\Simplicate\Exception\PutDocumentsDocumentInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutDocumentsDocumentUnauthorizedException;
use Paqtcom\Simplicate\Model\PutDocument;
use Paqtcom\Simplicate\Model\RestPutResult;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutDocumentsDocument extends BaseEndpoint
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
     * @throws PutDocumentsDocumentBadRequestException
     * @throws PutDocumentsDocumentUnauthorizedException
     * @throws PutDocumentsDocumentInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestPutResult::class, 'json');
        }
        if (400 === $status) {
            throw new PutDocumentsDocumentBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutDocumentsDocumentUnauthorizedException($response);
        }
        if (500 === $status) {
            throw new PutDocumentsDocumentInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
