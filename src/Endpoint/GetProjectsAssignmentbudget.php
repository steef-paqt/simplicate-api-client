<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Endpoint;

use Steefdw\Simplicate\Runtime\Client\BaseEndpoint;

class GetProjectsAssignmentbudget extends BaseEndpoint
{
    use \Steefdw\Simplicate\Runtime\Client\EndpointTrait;

    /**
     *
     *
     * @param array $queryParameters {
     *     @var string $q[range_start]
     *     @var string $q[employee_id]
     *     @var string $q[assignment_id]
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
        return '/projects/assignmentbudget';
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
        $optionsResolver->setDefined(['q[range_start]', 'q[employee_id]', 'q[assignment_id]', 'offset', 'limit', 'sort']);
        $optionsResolver->setRequired(['q[range_start]', 'q[employee_id]', 'q[assignment_id]']);
        $optionsResolver->setDefaults(['limit' => 5]);
        $optionsResolver->addAllowedTypes('q[range_start]', ['string']);
        $optionsResolver->addAllowedTypes('q[employee_id]', ['string']);
        $optionsResolver->addAllowedTypes('q[assignment_id]', ['string']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('sort', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Steefdw\Simplicate\Exception\GetProjectsAssignmentbudgetUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsAssignmentbudgetPaymentRequiredException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsAssignmentbudgetNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsAssignmentbudgetInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultProjectAssignmentbudget
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, \Steefdw\Simplicate\Model\RestResultProjectAssignmentbudget::class, 'json');
        }
        if (401 === $status) {
            throw new \Steefdw\Simplicate\Exception\GetProjectsAssignmentbudgetUnauthorizedException($response);
        }
        if (402 === $status) {
            throw new \Steefdw\Simplicate\Exception\GetProjectsAssignmentbudgetPaymentRequiredException($response);
        }
        if (404 === $status) {
            throw new \Steefdw\Simplicate\Exception\GetProjectsAssignmentbudgetNotFoundException($response);
        }
        if (500 === $status) {
            throw new \Steefdw\Simplicate\Exception\GetProjectsAssignmentbudgetInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
