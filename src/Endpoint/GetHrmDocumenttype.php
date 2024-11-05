<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;

class GetHrmDocumenttype extends BaseEndpoint
{
    use \Paqtcom\Simplicate\Runtime\Client\EndpointTrait;

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
        return '/hrm/documenttype';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
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
     *
     * @throws \Paqtcom\Simplicate\Exception\GetHrmDocumenttypeUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmDocumenttypeNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmDocumenttypeInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDocumentTypes
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, \Paqtcom\Simplicate\Model\RestResultDocumentTypes::class, 'json');
        }
        if (401 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetHrmDocumenttypeUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetHrmDocumenttypeNotFoundException($response);
        }
        if (500 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetHrmDocumenttypeInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
