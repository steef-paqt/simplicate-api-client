<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Endpoint;

use Steefdw\Simplicate\Runtime\Client\BaseEndpoint;

class PutHoursAbsenceById extends BaseEndpoint
{
    use \Steefdw\Simplicate\Runtime\Client\EndpointTrait;

    /**
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\PostAbsence $body Absence object containing data that with the new values
     */
    public function __construct(protected string $id, \Steefdw\Simplicate\Model\PostAbsence $body)
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
     * @throws \Steefdw\Simplicate\Exception\PutHoursAbsenceByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutHoursAbsenceByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutHoursAbsenceByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PutHoursAbsenceByIdInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Steefdw\Simplicate\Exception\PutHoursAbsenceByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Steefdw\Simplicate\Exception\PutHoursAbsenceByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Steefdw\Simplicate\Exception\PutHoursAbsenceByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new \Steefdw\Simplicate\Exception\PutHoursAbsenceByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
