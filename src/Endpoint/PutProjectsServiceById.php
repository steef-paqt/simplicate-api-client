<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutProjectsServiceByIdBadRequestException;
use Paqtcom\Simplicate\Exception\PutProjectsServiceByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutProjectsServiceByIdNotFoundException;
use Paqtcom\Simplicate\Exception\PutProjectsServiceByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\PutProjectService;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutProjectsServiceById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     * @param PutProjectService $body Service object that needs to be updated
     */
    public function __construct(protected string $id, PutProjectService $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/projects/service/{id}');
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
     * @throws PutProjectsServiceByIdBadRequestException
     * @throws PutProjectsServiceByIdUnauthorizedException
     * @throws PutProjectsServiceByIdNotFoundException
     * @throws PutProjectsServiceByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new PutProjectsServiceByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutProjectsServiceByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PutProjectsServiceByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new PutProjectsServiceByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
