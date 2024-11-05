<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;

class GetHoursSubmission extends BaseEndpoint
{
    use \Paqtcom\Simplicate\Runtime\Client\EndpointTrait;

    /**
     * @param array $queryParameters {
     *     @var string $q[start_date]
     *     @var string $q[end_date]
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
        return '/hours/submission';
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
     * @throws \Paqtcom\Simplicate\Exception\GetHoursSubmissionUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursSubmissionNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursSubmissionInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultHoursSubmissions
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, \Paqtcom\Simplicate\Model\RestResultHoursSubmissions::class, 'json');
        }
        if (401 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetHoursSubmissionUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetHoursSubmissionNotFoundException($response);
        }
        if (500 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetHoursSubmissionInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
