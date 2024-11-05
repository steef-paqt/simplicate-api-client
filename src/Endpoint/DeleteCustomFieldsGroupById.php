<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\DeleteCustomFieldsGroupByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\DeleteCustomFieldsGroupByIdNotFoundException;
use Paqtcom\Simplicate\Exception\DeleteCustomFieldsGroupByIdUnauthorizedException;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class DeleteCustomFieldsGroupById extends BaseEndpoint
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
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/customfields/group/{id}');
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
     * @throws DeleteCustomFieldsGroupByIdUnauthorizedException
     * @throws DeleteCustomFieldsGroupByIdNotFoundException
     * @throws DeleteCustomFieldsGroupByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new DeleteCustomFieldsGroupByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new DeleteCustomFieldsGroupByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new DeleteCustomFieldsGroupByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
