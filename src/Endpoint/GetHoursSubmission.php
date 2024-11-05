<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetHoursSubmissionInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetHoursSubmissionNotFoundException;
use Paqtcom\Simplicate\Exception\GetHoursSubmissionUnauthorizedException;
use Paqtcom\Simplicate\Model\RestResultHoursSubmissions;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class GetHoursSubmission extends BaseEndpoint
{
    use EndpointTrait;

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
     * @return null|RestResultHoursSubmissions
     *@throws GetHoursSubmissionNotFoundException
     * @throws GetHoursSubmissionInternalServerErrorException
     * @throws GetHoursSubmissionUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultHoursSubmissions::class, 'json');
        }
        if (401 === $status) {
            throw new GetHoursSubmissionUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetHoursSubmissionNotFoundException($response);
        }
        if (500 === $status) {
            throw new GetHoursSubmissionInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
