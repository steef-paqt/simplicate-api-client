<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;

class PutCustomFieldsOptionById extends BaseEndpoint
{
    use \Paqtcom\Simplicate\Runtime\Client\EndpointTrait;

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\CustomFieldOption $body CustomFieldOption object containing data
     */
    public function __construct(protected string $id, \Paqtcom\Simplicate\Model\CustomFieldOption $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/customfields/option/{id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
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
     * @throws \Paqtcom\Simplicate\Exception\PutCustomFieldsOptionByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutCustomFieldsOptionByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutCustomFieldsOptionByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PutCustomFieldsOptionByIdInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Paqtcom\Simplicate\Exception\PutCustomFieldsOptionByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Paqtcom\Simplicate\Exception\PutCustomFieldsOptionByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Paqtcom\Simplicate\Exception\PutCustomFieldsOptionByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new \Paqtcom\Simplicate\Exception\PutCustomFieldsOptionByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
