<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostCustomFieldsGroupByIdBadRequestException;
use Paqtcom\Simplicate\Exception\PostCustomFieldsGroupByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostCustomFieldsGroupByIdNotFoundException;
use Paqtcom\Simplicate\Exception\PostCustomFieldsGroupByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\CustomFieldGroup;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostCustomFieldsGroupById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     * @param CustomFieldGroup $body Organization object containing data that with the new values
     */
    public function __construct(protected string $id, CustomFieldGroup $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/customfields/group/{id}');
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
     * @throws PostCustomFieldsGroupByIdBadRequestException
     * @throws PostCustomFieldsGroupByIdUnauthorizedException
     * @throws PostCustomFieldsGroupByIdNotFoundException
     * @throws PostCustomFieldsGroupByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new PostCustomFieldsGroupByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new PostCustomFieldsGroupByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PostCustomFieldsGroupByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new PostCustomFieldsGroupByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
