<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutMileageMileageByIdBadRequestException;
use Paqtcom\Simplicate\Exception\PutMileageMileageByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutMileageMileageByIdNotFoundException;
use Paqtcom\Simplicate\Exception\PutMileageMileageByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\PutMileage;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutMileageMileageById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     * @param PutMileage $body Mileage object that needs to be updated
     */
    public function __construct(protected string $id, PutMileage $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/mileage/mileage/{id}');
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
     * @throws PutMileageMileageByIdBadRequestException
     * @throws PutMileageMileageByIdUnauthorizedException
     * @throws PutMileageMileageByIdNotFoundException
     * @throws PutMileageMileageByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new PutMileageMileageByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutMileageMileageByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PutMileageMileageByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new PutMileageMileageByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
