<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutHrmAbsenceByIdBadRequestException;
use Paqtcom\Simplicate\Exception\PutHrmAbsenceByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutHrmAbsenceByIdNotFoundException;
use Paqtcom\Simplicate\Exception\PutHrmAbsenceByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\PostAbsence;
use Paqtcom\Simplicate\Model\PutChunked;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutHrmAbsenceById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/hrm/absence/{id}');
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
     * @throws PutHrmAbsenceByIdBadRequestException
     * @throws PutHrmAbsenceByIdUnauthorizedException
     * @throws PutHrmAbsenceByIdNotFoundException
     * @throws PutHrmAbsenceByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, PutChunked::class, 'json');
        }
        if (400 === $status) {
            throw new PutHrmAbsenceByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutHrmAbsenceByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PutHrmAbsenceByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new PutHrmAbsenceByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
