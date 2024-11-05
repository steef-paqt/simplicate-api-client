<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutHoursAbsenceByIdBadRequestException;
use Paqtcom\Simplicate\Exception\PutHoursAbsenceByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutHoursAbsenceByIdNotFoundException;
use Paqtcom\Simplicate\Exception\PutHoursAbsenceByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\PostAbsence;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutHoursAbsenceById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     * @param PostAbsence $body Absence object containing data that with the new values
     */
    public function __construct(protected string $id, PostAbsence $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/hours/absence/{id}');
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
     * @throws PutHoursAbsenceByIdBadRequestException
     * @throws PutHoursAbsenceByIdUnauthorizedException
     * @throws PutHoursAbsenceByIdNotFoundException
     * @throws PutHoursAbsenceByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new PutHoursAbsenceByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutHoursAbsenceByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PutHoursAbsenceByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new PutHoursAbsenceByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
