<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetSalesDocumenttypeInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetSalesDocumenttypeNotFoundException;
use Paqtcom\Simplicate\Exception\GetSalesDocumenttypeUnauthorizedException;
use Paqtcom\Simplicate\Model\RestResultDocumentTypes;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class GetSalesDocumenttype extends BaseEndpoint
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
        return '/sales/documenttype';
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
     * @return null|RestResultDocumentTypes
     *@throws GetSalesDocumenttypeNotFoundException
     * @throws GetSalesDocumenttypeInternalServerErrorException
     * @throws GetSalesDocumenttypeUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultDocumentTypes::class, 'json');
        }
        if (401 === $status) {
            throw new GetSalesDocumenttypeUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetSalesDocumenttypeNotFoundException($response);
        }
        if (500 === $status) {
            throw new GetSalesDocumenttypeInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}