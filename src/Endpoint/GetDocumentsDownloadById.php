<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetDocumentsDownloadByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetDocumentsDownloadByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetDocumentsDownloadByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetDocumentsDownloadByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetDocumentsDownloadById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     */
    public function __construct(protected string $id)
    {
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/documents/download/{id}');
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws GetDocumentsDownloadByIdUnauthorizedException
     * @throws GetDocumentsDownloadByIdNotFoundException
     * @throws GetDocumentsDownloadByIdUnprocessableEntityException
     * @throws GetDocumentsDownloadByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        if (200 === $status) {
            return $response;
        }
        if (401 === $status) {
            throw new GetDocumentsDownloadByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetDocumentsDownloadByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetDocumentsDownloadByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetDocumentsDownloadByIdInternalServerErrorException($response);
        }
        throw new \UnexpectedValueException('Received unknown status: ' . $status);
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
