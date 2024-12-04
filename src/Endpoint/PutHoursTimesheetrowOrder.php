<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutHoursTimesheetrowOrderBadRequestException;
use Paqtcom\Simplicate\Exception\PutHoursTimesheetrowOrderInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutHoursTimesheetrowOrderNotFoundException;
use Paqtcom\Simplicate\Exception\PutHoursTimesheetrowOrderUnauthorizedException;
use Paqtcom\Simplicate\Model\PutChunked;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutHoursTimesheetrowOrder extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param array $body List of external ids for timesheetrows that need to be ordered.
     */
    public function __construct(array $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return '/hours/timesheetrow/order';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], $this->body];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws PutHoursTimesheetrowOrderBadRequestException
     * @throws PutHoursTimesheetrowOrderUnauthorizedException
     * @throws PutHoursTimesheetrowOrderNotFoundException
     * @throws PutHoursTimesheetrowOrderInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, PutChunked::class, 'json');
        }
        if (400 === $status) {
            throw new PutHoursTimesheetrowOrderBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutHoursTimesheetrowOrderUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PutHoursTimesheetrowOrderNotFoundException($response);
        }
        if (500 === $status) {
            throw new PutHoursTimesheetrowOrderInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
