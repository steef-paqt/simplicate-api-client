<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutHoursHourstypeByIdBadRequestException;
use Paqtcom\Simplicate\Exception\PutHoursHourstypeByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutHoursHourstypeByIdNotFoundException;
use Paqtcom\Simplicate\Exception\PutHoursHourstypeByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\PostHoursType;
use Paqtcom\Simplicate\Model\RestPutResult;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutHoursHourstypeById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     * @param PostHoursType $body Hours type object that needs to be updated
     */
    public function __construct(protected string $id, PostHoursType $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/hours/hourstype/{id}');
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
     * @throws PutHoursHourstypeByIdBadRequestException
     * @throws PutHoursHourstypeByIdUnauthorizedException
     * @throws PutHoursHourstypeByIdNotFoundException
     * @throws PutHoursHourstypeByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestPutResult::class, 'json');
        }
        if (400 === $status) {
            throw new PutHoursHourstypeByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutHoursHourstypeByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PutHoursHourstypeByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new PutHoursHourstypeByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
