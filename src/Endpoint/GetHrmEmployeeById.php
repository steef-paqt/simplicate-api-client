<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetHrmEmployeeByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetHrmEmployeeByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetHrmEmployeeByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetHrmEmployeeByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultEmployee;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetHrmEmployeeById extends BaseEndpoint
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
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/hrm/employee/{id}');
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
     * @return null|RestResultEmployee
     *@throws GetHrmEmployeeByIdNotFoundException
     * @throws GetHrmEmployeeByIdUnprocessableEntityException
     * @throws GetHrmEmployeeByIdInternalServerErrorException
     * @throws GetHrmEmployeeByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultEmployee::class, 'json');
        }
        if (401 === $status) {
            throw new GetHrmEmployeeByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetHrmEmployeeByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetHrmEmployeeByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetHrmEmployeeByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
