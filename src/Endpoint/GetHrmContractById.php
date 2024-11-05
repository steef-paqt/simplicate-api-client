<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetHrmContractByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetHrmContractByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetHrmContractByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetHrmContractByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultContract;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetHrmContractById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/hrm/contract/{id}');
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
     * @return null|RestResultContract
     *@throws GetHrmContractByIdNotFoundException
     * @throws GetHrmContractByIdUnprocessableEntityException
     * @throws GetHrmContractByIdInternalServerErrorException
     * @throws GetHrmContractByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultContract::class, 'json');
        }
        if (401 === $status) {
            throw new GetHrmContractByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetHrmContractByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetHrmContractByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetHrmContractByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
