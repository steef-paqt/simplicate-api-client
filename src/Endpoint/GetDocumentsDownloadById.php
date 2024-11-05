<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;

class GetDocumentsDownloadById extends BaseEndpoint
{
    use \Paqtcom\Simplicate\Runtime\Client\EndpointTrait;

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

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
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
     * @throws \Paqtcom\Simplicate\Exception\GetDocumentsDownloadByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetDocumentsDownloadByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetDocumentsDownloadByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetDocumentsDownloadByIdInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetDocumentsDownloadByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetDocumentsDownloadByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetDocumentsDownloadByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetDocumentsDownloadByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
