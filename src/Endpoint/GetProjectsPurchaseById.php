<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetProjectsPurchaseByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetProjectsPurchaseByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetProjectsPurchaseByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\RestResultPurchase;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetProjectsPurchaseById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/projects/purchase/{id}');
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
     * @return null|RestResultPurchase
     *@throws GetProjectsPurchaseByIdNotFoundException
     * @throws GetProjectsPurchaseByIdInternalServerErrorException
     * @throws GetProjectsPurchaseByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultPurchase::class, 'json');
        }
        if (401 === $status) {
            throw new GetProjectsPurchaseByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetProjectsPurchaseByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new GetProjectsPurchaseByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
