<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;

class GetHrmDocumentById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/hrm/document/{id}');
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
     * @throws \Paqtcom\Simplicate\Exception\GetHrmDocumentByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmDocumentByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmDocumentByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmDocumentByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDocument
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, \Paqtcom\Simplicate\Model\RestResultDocument::class, 'json');
        }
        if (401 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetHrmDocumentByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetHrmDocumentByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetHrmDocumentByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetHrmDocumentByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
