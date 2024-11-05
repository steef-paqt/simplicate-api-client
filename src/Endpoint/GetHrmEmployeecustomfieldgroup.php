<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetHrmEmployeecustomfieldgroupInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetHrmEmployeecustomfieldgroupNotFoundException;
use Paqtcom\Simplicate\Exception\GetHrmEmployeecustomfieldgroupUnauthorizedException;
use Paqtcom\Simplicate\Model\RestResultCustomFieldGroups;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class GetHrmEmployeecustomfieldgroup extends BaseEndpoint
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
        return '/hrm/employeecustomfieldgroups';
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
     * @return null|RestResultCustomFieldGroups
     *@throws GetHrmEmployeecustomfieldgroupNotFoundException
     * @throws GetHrmEmployeecustomfieldgroupInternalServerErrorException
     * @throws GetHrmEmployeecustomfieldgroupUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultCustomFieldGroups::class, 'json');
        }
        if (401 === $status) {
            throw new GetHrmEmployeecustomfieldgroupUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetHrmEmployeecustomfieldgroupNotFoundException($response);
        }
        if (500 === $status) {
            throw new GetHrmEmployeecustomfieldgroupInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
