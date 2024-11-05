<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostHoursTimesheetrowBadRequestException;
use Paqtcom\Simplicate\Exception\PostHoursTimesheetrowInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostHoursTimesheetrowUnauthorizedException;
use Paqtcom\Simplicate\Model\PostTimesheetRow;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostHoursTimesheetrow extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PostTimesheetRow $body Description of timesheetrow that is submitted.
     */
    public function __construct(PostTimesheetRow $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/hours/timesheetrow';
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
     * @throws PostHoursTimesheetrowBadRequestException
     * @throws PostHoursTimesheetrowUnauthorizedException
     * @throws PostHoursTimesheetrowInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new PostHoursTimesheetrowBadRequestException($response);
        }
        if (401 === $status) {
            throw new PostHoursTimesheetrowUnauthorizedException($response);
        }
        if (500 === $status) {
            throw new PostHoursTimesheetrowInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
