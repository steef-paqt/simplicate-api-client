<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostHoursAbsenceBadRequestException;
use Paqtcom\Simplicate\Exception\PostHoursAbsenceInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostHoursAbsenceUnauthorizedException;
use Paqtcom\Simplicate\Model\PostAbsence;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostHoursAbsence extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PostAbsence $body absence object containing data
     */
    public function __construct(PostAbsence $body)
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

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
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
     * @throws PostHoursAbsenceBadRequestException
     * @throws PostHoursAbsenceUnauthorizedException
     * @throws PostHoursAbsenceInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (204 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new PostHoursAbsenceBadRequestException($response);
        }
        if (401 === $status) {
            throw new PostHoursAbsenceUnauthorizedException($response);
        }
        if (500 === $status) {
            throw new PostHoursAbsenceInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
