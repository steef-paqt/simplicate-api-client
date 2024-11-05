<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetProjectsProjectByIdPlanningBudgetInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetProjectsProjectByIdPlanningBudgetNotFoundException;
use Paqtcom\Simplicate\Exception\GetProjectsProjectByIdPlanningBudgetUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetProjectsProjectByIdPlanningBudgetUnprocessableEntityException;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class GetProjectsProjectByIdPlanningBudget extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     * @param array $queryParameters {
     *     @var string $by
     *     @var string $until_date Y-m-d
     * }
     */
    public function __construct(protected string $id, array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/projects/project/{id}/planningBudget');
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
        $optionsResolver->setDefined(['by', 'until_date']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('by', ['string']);
        $optionsResolver->addAllowedTypes('until_date', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws GetProjectsProjectByIdPlanningBudgetUnauthorizedException
     * @throws GetProjectsProjectByIdPlanningBudgetNotFoundException
     * @throws GetProjectsProjectByIdPlanningBudgetUnprocessableEntityException
     * @throws GetProjectsProjectByIdPlanningBudgetInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new GetProjectsProjectByIdPlanningBudgetUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetProjectsProjectByIdPlanningBudgetNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetProjectsProjectByIdPlanningBudgetUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetProjectsProjectByIdPlanningBudgetInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
