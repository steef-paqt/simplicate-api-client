<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;

class GetHrmContractById extends BaseEndpoint
{
    use \Paqtcom\Simplicate\Runtime\Client\EndpointTrait;

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

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Paqtcom\Simplicate\Exception\GetHrmContractByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmContractByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmContractByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmContractByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultContract
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, \Paqtcom\Simplicate\Model\RestResultContract::class, 'json');
        }
        if (401 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetHrmContractByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetHrmContractByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetHrmContractByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new \Paqtcom\Simplicate\Exception\GetHrmContractByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
