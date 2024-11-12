<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetSalesSalescustomfieldInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetSalesSalescustomfieldNotFoundException;
use Paqtcom\Simplicate\Exception\GetSalesSalescustomfieldUnauthorizedException;
use Paqtcom\Simplicate\Model\RestResultCustomFields;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class GetSalesSalescustomfield extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/sales/salescustomfields';
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
     * @throws GetSalesSalescustomfieldNotFoundException
     * @throws GetSalesSalescustomfieldInternalServerErrorException
     * @throws GetSalesSalescustomfieldUnauthorizedException
     */
    protected function transformResponseBody(
        ResponseInterface $response,
        SerializerInterface $serializer,
        ?string $contentType = null
    ): ?RestResultCustomFields {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, \Paqtcom\Simplicate\Model\RestResultCustomFields::class, 'json');
        }
        if (401 === $status) {
            throw new GetSalesSalescustomfieldUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetSalesSalescustomfieldNotFoundException($response);
        }
        if (500 === $status) {
            throw new GetSalesSalescustomfieldInternalServerErrorException($response);
        }

        return null;
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
