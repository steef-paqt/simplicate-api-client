<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetProjectsServiceByIdPlanningBudgetInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetProjectsServiceByIdPlanningBudgetNotFoundException;
use Paqtcom\Simplicate\Exception\GetProjectsServiceByIdPlanningBudgetUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetProjectsServiceByIdPlanningBudgetUnprocessableEntityException;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class GetProjectsServiceByIdPlanningBudget extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/projects/service/{id}/planningBudget');
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
     * @throws GetProjectsServiceByIdPlanningBudgetUnauthorizedException
     * @throws GetProjectsServiceByIdPlanningBudgetNotFoundException
     * @throws GetProjectsServiceByIdPlanningBudgetUnprocessableEntityException
     * @throws GetProjectsServiceByIdPlanningBudgetInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new GetProjectsServiceByIdPlanningBudgetUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetProjectsServiceByIdPlanningBudgetNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetProjectsServiceByIdPlanningBudgetUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetProjectsServiceByIdPlanningBudgetInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
