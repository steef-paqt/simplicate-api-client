<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetProjectsAssignmentbudgetInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetProjectsAssignmentbudgetNotFoundException;
use Paqtcom\Simplicate\Exception\GetProjectsAssignmentbudgetPaymentRequiredException;
use Paqtcom\Simplicate\Exception\GetProjectsAssignmentbudgetUnauthorizedException;
use Paqtcom\Simplicate\Model\RestResultProjectAssignmentbudget;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class GetProjectsAssignmentbudget extends BaseEndpoint
{
    use EndpointTrait;

    /**
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
     * @return null|RestResultProjectAssignmentbudget
     * @throws GetProjectsAssignmentbudgetPaymentRequiredException
     * @throws GetProjectsAssignmentbudgetNotFoundException
     * @throws GetProjectsAssignmentbudgetInternalServerErrorException
     * @throws GetProjectsAssignmentbudgetUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultProjectAssignmentbudget::class, 'json');
        }
        if (401 === $status) {
            throw new GetProjectsAssignmentbudgetUnauthorizedException($response);
        }
        if (402 === $status) {
            throw new GetProjectsAssignmentbudgetPaymentRequiredException($response);
        }
        if (404 === $status) {
            throw new GetProjectsAssignmentbudgetNotFoundException($response);
        }
        if (500 === $status) {
            throw new GetProjectsAssignmentbudgetInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
