<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutCrmDocumentBadRequestException;
use Paqtcom\Simplicate\Exception\PutCrmDocumentInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutCrmDocumentUnauthorizedException;
use Paqtcom\Simplicate\Model\PutDocument;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutCrmDocument extends BaseEndpoint
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
     * @throws PutCrmDocumentBadRequestException
     * @throws PutCrmDocumentUnauthorizedException
     * @throws PutCrmDocumentInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new PutCrmDocumentBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutCrmDocumentUnauthorizedException($response);
        }
        if (500 === $status) {
            throw new PutCrmDocumentInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
