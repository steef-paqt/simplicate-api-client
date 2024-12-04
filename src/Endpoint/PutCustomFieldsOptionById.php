<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutCustomFieldsOptionByIdBadRequestException;
use Paqtcom\Simplicate\Exception\PutCustomFieldsOptionByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutCustomFieldsOptionByIdNotFoundException;
use Paqtcom\Simplicate\Exception\PutCustomFieldsOptionByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\CustomFieldOption;
use Paqtcom\Simplicate\Model\RestPutResult;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutCustomFieldsOptionById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     * @param CustomFieldOption $body CustomFieldOption object containing data
     */
    public function __construct(protected string $id, CustomFieldOption $body)
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
     * @throws PutCustomFieldsOptionByIdBadRequestException
     * @throws PutCustomFieldsOptionByIdUnauthorizedException
     * @throws PutCustomFieldsOptionByIdNotFoundException
     * @throws PutCustomFieldsOptionByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestPutResult::class, 'json');
        }
        if (400 === $status) {
            throw new PutCustomFieldsOptionByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutCustomFieldsOptionByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PutCustomFieldsOptionByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new PutCustomFieldsOptionByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
