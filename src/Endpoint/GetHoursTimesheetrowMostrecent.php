<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetHoursTimesheetrowMostrecentBadRequestException;
use Paqtcom\Simplicate\Exception\GetHoursTimesheetrowMostrecentInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetHoursTimesheetrowMostrecentNotFoundException;
use Paqtcom\Simplicate\Exception\GetHoursTimesheetrowMostrecentUnauthorizedException;
use Paqtcom\Simplicate\Model\RestResultDateTimeRange;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class GetHoursTimesheetrowMostrecent extends BaseEndpoint
{
    use EndpointTrait;

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
     * @return null|RestResultDateTimeRange
     * @throws GetHoursTimesheetrowMostrecentUnauthorizedException
     * @throws GetHoursTimesheetrowMostrecentNotFoundException
     * @throws GetHoursTimesheetrowMostrecentInternalServerErrorException
     * @throws GetHoursTimesheetrowMostrecentBadRequestException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultDateTimeRange::class, 'json');
        }
        if (400 === $status) {
            throw new GetHoursTimesheetrowMostrecentBadRequestException($response);
        }
        if (401 === $status) {
            throw new GetHoursTimesheetrowMostrecentUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetHoursTimesheetrowMostrecentNotFoundException($response);
        }
        if (500 === $status) {
            throw new GetHoursTimesheetrowMostrecentInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
