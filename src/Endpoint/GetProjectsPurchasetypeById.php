<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetProjectsPurchasetypeByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetProjectsPurchasetypeByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetProjectsPurchasetypeByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetProjectsPurchasetypeByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultPurchaseType;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetProjectsPurchasetypeById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/projects/purchasetype/{id}');
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
     * @return null|RestResultPurchaseType
     *@throws GetProjectsPurchasetypeByIdNotFoundException
     * @throws GetProjectsPurchasetypeByIdUnprocessableEntityException
     * @throws GetProjectsPurchasetypeByIdInternalServerErrorException
     * @throws GetProjectsPurchasetypeByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultPurchaseType::class, 'json');
        }
        if (401 === $status) {
            throw new GetProjectsPurchasetypeByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetProjectsPurchasetypeByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetProjectsPurchasetypeByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetProjectsPurchasetypeByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
