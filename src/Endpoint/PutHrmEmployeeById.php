<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutHrmEmployeeByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutHrmEmployeeByIdNotFoundException;
use Paqtcom\Simplicate\Exception\PutHrmEmployeeByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\PutEmployee;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutHrmEmployeeById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PutEmployee $body Employee object that needs to be updated
     */
    public function __construct(PutEmployee $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return '/hrm/employee/{id}';
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
     * @throws PutHrmEmployeeByIdUnauthorizedException
     * @throws PutHrmEmployeeByIdNotFoundException
     * @throws PutHrmEmployeeByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new PutHrmEmployeeByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PutHrmEmployeeByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new PutHrmEmployeeByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
