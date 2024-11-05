<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetHrmContracttypeByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetHrmContracttypeByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetHrmContracttypeByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetHrmContracttypeByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultContractType;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetHrmContracttypeById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/hrm/contracttype/{id}');
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
     * @return null|RestResultContractType
     *@throws GetHrmContracttypeByIdNotFoundException
     * @throws GetHrmContracttypeByIdUnprocessableEntityException
     * @throws GetHrmContracttypeByIdInternalServerErrorException
     * @throws GetHrmContracttypeByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultContractType::class, 'json');
        }
        if (401 === $status) {
            throw new GetHrmContracttypeByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetHrmContracttypeByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetHrmContracttypeByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetHrmContracttypeByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
