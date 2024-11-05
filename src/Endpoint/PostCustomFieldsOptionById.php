<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostCustomFieldsOptionByIdBadRequestException;
use Paqtcom\Simplicate\Exception\PostCustomFieldsOptionByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostCustomFieldsOptionByIdNotFoundException;
use Paqtcom\Simplicate\Exception\PostCustomFieldsOptionByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\CustomFieldOption;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostCustomFieldsOptionById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param CustomFieldOption $body CustomFieldOption object containing data
     */
    public function __construct(CustomFieldOption $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/customfields/option/{id}';
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
     * @throws PostCustomFieldsOptionByIdBadRequestException
     * @throws PostCustomFieldsOptionByIdUnauthorizedException
     * @throws PostCustomFieldsOptionByIdNotFoundException
     * @throws PostCustomFieldsOptionByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new PostCustomFieldsOptionByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new PostCustomFieldsOptionByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PostCustomFieldsOptionByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new PostCustomFieldsOptionByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
