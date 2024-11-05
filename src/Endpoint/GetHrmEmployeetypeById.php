<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetHrmEmployeetypeByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetHrmEmployeetypeByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetHrmEmployeetypeByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetHrmEmployeetypeByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultEmployeeType;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetHrmEmployeetypeById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/hrm/employeetype/{id}');
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
     * @return null|RestResultEmployeeType
     *@throws GetHrmEmployeetypeByIdNotFoundException
     * @throws GetHrmEmployeetypeByIdUnprocessableEntityException
     * @throws GetHrmEmployeetypeByIdInternalServerErrorException
     * @throws GetHrmEmployeetypeByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultEmployeeType::class, 'json');
        }
        if (401 === $status) {
            throw new GetHrmEmployeetypeByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetHrmEmployeetypeByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetHrmEmployeetypeByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetHrmEmployeetypeByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
