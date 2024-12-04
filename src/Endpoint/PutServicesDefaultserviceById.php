<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutServicesDefaultserviceByIdBadRequestException;
use Paqtcom\Simplicate\Exception\PutServicesDefaultserviceByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutServicesDefaultserviceByIdNotFoundException;
use Paqtcom\Simplicate\Exception\PutServicesDefaultserviceByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\PostDefaultService;
use Paqtcom\Simplicate\Model\RestPutResult;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutServicesDefaultserviceById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     * @param PostDefaultService $body default service object that needs to be updated
     */
    public function __construct(protected string $id, PostDefaultService $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/services/defaultservice/{id}');
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
     * @throws PutServicesDefaultserviceByIdBadRequestException
     * @throws PutServicesDefaultserviceByIdUnauthorizedException
     * @throws PutServicesDefaultserviceByIdNotFoundException
     * @throws PutServicesDefaultserviceByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestPutResult::class, 'json');
        }
        if (400 === $status) {
            throw new PutServicesDefaultserviceByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutServicesDefaultserviceByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PutServicesDefaultserviceByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new PutServicesDefaultserviceByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
