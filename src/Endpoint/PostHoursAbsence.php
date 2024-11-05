<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Endpoint;

use Steefdw\Simplicate\Runtime\Client\BaseEndpoint;
use Steefdw\Simplicate\Runtime\Client\Endpoint;

class PostHoursAbsence extends BaseEndpoint implements Endpoint
{
    use \Steefdw\Simplicate\Runtime\Client\EndpointTrait;

    /**
     *
     *
     * @param \Steefdw\Simplicate\Model\PostAbsence $body absence object containing data
     */
    public function __construct(\Steefdw\Simplicate\Model\PostAbsence $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/hours/absence';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Steefdw\Simplicate\Exception\PostHoursAbsenceBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PostHoursAbsenceUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostHoursAbsenceInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (204 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Steefdw\Simplicate\Exception\PostHoursAbsenceBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Steefdw\Simplicate\Exception\PostHoursAbsenceUnauthorizedException($response);
        }
        if (500 === $status) {
            throw new \Steefdw\Simplicate\Exception\PostHoursAbsenceInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
