<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\DeleteHoursTimesheetrowByIdBadRequestException;
use Paqtcom\Simplicate\Exception\DeleteHoursTimesheetrowByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\DeleteHoursTimesheetrowByIdNotFoundException;
use Paqtcom\Simplicate\Exception\DeleteHoursTimesheetrowByIdUnauthorizedException;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class DeleteHoursTimesheetrowById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     */
    public function __construct(protected string $id)
    {
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/hours/timesheetrow/{id}');
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws DeleteHoursTimesheetrowByIdBadRequestException
     * @throws DeleteHoursTimesheetrowByIdUnauthorizedException
     * @throws DeleteHoursTimesheetrowByIdNotFoundException
     * @throws DeleteHoursTimesheetrowByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new DeleteHoursTimesheetrowByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new DeleteHoursTimesheetrowByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new DeleteHoursTimesheetrowByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new DeleteHoursTimesheetrowByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
