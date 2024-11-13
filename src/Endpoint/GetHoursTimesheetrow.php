<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetHoursTimesheetrowBadRequestException;
use Paqtcom\Simplicate\Exception\GetHoursTimesheetrowInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetHoursTimesheetrowUnauthorizedException;
use Paqtcom\Simplicate\Model\RestResultHoursTimesheetRows;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class GetHoursTimesheetrow extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param array $queryParameters {
     *     @var string $q[start_date] Y-m-d, must be a Monday
     *     @var string $q[end_date] Y-m-d, must be the Sunday after the Monday of the start_date
     *     @var string $q[employee_id]
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
        return '/hours/timesheetrow';
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
        $optionsResolver->setDefined(['q[start_date]', 'q[end_date]', 'q[employee_id]']);
        $optionsResolver->setRequired(['q[start_date]', 'q[end_date]', 'q[employee_id]']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('q[start_date]', ['string']);
        $optionsResolver->addAllowedTypes('q[end_date]', ['string']);
        $optionsResolver->addAllowedTypes('q[employee_id]', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     * @return null|RestResultHoursTimesheetRows
     * @throws GetHoursTimesheetrowUnauthorizedException
     * @throws GetHoursTimesheetrowInternalServerErrorException
     * @throws GetHoursTimesheetrowBadRequestException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultHoursTimesheetRows::class, 'json');
        }
        if (400 === $status) {
            throw new GetHoursTimesheetrowBadRequestException($response);
        }
        if (401 === $status) {
            throw new GetHoursTimesheetrowUnauthorizedException($response);
        }
        if (500 === $status) {
            throw new GetHoursTimesheetrowInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
