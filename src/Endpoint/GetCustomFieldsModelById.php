<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetCustomFieldsModelByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetCustomFieldsModelByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetCustomFieldsModelByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\RestResultCustomFieldModel;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class GetCustomFieldsModelById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The model's id
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
        return str_replace(['{id}'], [$this->id], '/customfields/model/{id}');
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['offset', 'limit', 'sort']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => 5]);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('sort', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     * @return null|RestResultCustomFieldModel
     * @throws GetCustomFieldsModelByIdNotFoundException
     * @throws GetCustomFieldsModelByIdInternalServerErrorException
     * @throws GetCustomFieldsModelByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultCustomFieldModel::class, 'json');
        }
        if (401 === $status) {
            throw new GetCustomFieldsModelByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetCustomFieldsModelByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new GetCustomFieldsModelByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
