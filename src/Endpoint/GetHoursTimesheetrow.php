<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;

class GetHoursTimesheetrow extends BaseEndpoint
{
    use \Paqtcom\Simplicate\Runtime\Client\EndpointTrait;

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
     *
     * @throws \Paqtcom\Simplicate\Exception\GetHoursTimesheetrowBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursTimesheetrowUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursTimesheetrowInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultHoursTimesheetRows
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, \Paqtcom\Simplicate\Model\RestResultHoursTimesheetRows::class, 'json');
        }
        if (400 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetHoursTimesheetrowBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetHoursTimesheetrowUnauthorizedException($response);
        }
        if (500 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetHoursTimesheetrowInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
