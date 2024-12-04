<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutProjectsProjectByIdBadRequestException;
use Paqtcom\Simplicate\Exception\PutProjectsProjectByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutProjectsProjectByIdNotFoundException;
use Paqtcom\Simplicate\Exception\PutProjectsProjectByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\PostProject;
use Paqtcom\Simplicate\Model\PutChunked;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutProjectsProjectById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     * @param PostProject $body project object that needs to be updated
     */
    public function __construct(protected string $id, PostProject $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/projects/project/{id}');
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
     * @throws PutProjectsProjectByIdBadRequestException
     * @throws PutProjectsProjectByIdUnauthorizedException
     * @throws PutProjectsProjectByIdNotFoundException
     * @throws PutProjectsProjectByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, PutChunked::class, 'json');
        }
        if (400 === $status) {
            throw new PutProjectsProjectByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutProjectsProjectByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PutProjectsProjectByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new PutProjectsProjectByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
