<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Endpoint;

use Steefdw\Simplicate\Runtime\Client\BaseEndpoint;

class GetHoursTimesheetrowMostrecent extends BaseEndpoint
{
    use \Steefdw\Simplicate\Runtime\Client\EndpointTrait;

    /**
     * @param array $queryParameters {
     *     @var string $q[before_date]
     *     @var string $q[employee_id]
     *     @var string $q[type]
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
        return '/hours/timesheetrow/mostrecent';
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
        $optionsResolver->setDefined(['q[before_date]', 'q[employee_id]', 'q[type]']);
        $optionsResolver->setRequired(['q[before_date]', 'q[employee_id]', 'q[type]']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('q[before_date]', ['string']);
        $optionsResolver->addAllowedTypes('q[employee_id]', ['string']);
        $optionsResolver->addAllowedTypes('q[type]', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Steefdw\Simplicate\Exception\GetHoursTimesheetrowMostrecentBadRequestException
     * @throws \Steefdw\Simplicate\Exception\GetHoursTimesheetrowMostrecentUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHoursTimesheetrowMostrecentNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHoursTimesheetrowMostrecentInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDateTimeRange
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, \Steefdw\Simplicate\Model\RestResultDateTimeRange::class, 'json');
        }
        if (400 === $status) {
            throw new \Steefdw\Simplicate\Exception\GetHoursTimesheetrowMostrecentBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Steefdw\Simplicate\Exception\GetHoursTimesheetrowMostrecentUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Steefdw\Simplicate\Exception\GetHoursTimesheetrowMostrecentNotFoundException($response);
        }
        if (500 === $status) {
            throw new \Steefdw\Simplicate\Exception\GetHoursTimesheetrowMostrecentInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
