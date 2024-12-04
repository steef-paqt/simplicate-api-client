<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutCustomFieldsGroupByIdBadRequestException;
use Paqtcom\Simplicate\Exception\PutCustomFieldsGroupByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutCustomFieldsGroupByIdNotFoundException;
use Paqtcom\Simplicate\Exception\PutCustomFieldsGroupByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\CustomFieldGroup;
use Paqtcom\Simplicate\Model\RestPutResult;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutCustomFieldsGroupById extends BaseEndpoint
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
        return 'PUT';
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
     * @throws PutCustomFieldsGroupByIdBadRequestException
     * @throws PutCustomFieldsGroupByIdUnauthorizedException
     * @throws PutCustomFieldsGroupByIdNotFoundException
     * @throws PutCustomFieldsGroupByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestPutResult::class, 'json');
        }
        if (400 === $status) {
            throw new PutCustomFieldsGroupByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutCustomFieldsGroupByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PutCustomFieldsGroupByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new PutCustomFieldsGroupByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
