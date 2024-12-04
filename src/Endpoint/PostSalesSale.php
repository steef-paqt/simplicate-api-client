<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostSalesSaleInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostSalesSaleNotFoundException;
use Paqtcom\Simplicate\Exception\PostSalesSaleUnauthorizedException;
use Paqtcom\Simplicate\Model\PostSales;
use Paqtcom\Simplicate\Model\RestPostResult;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostSalesSale extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PostSales $body Sales object that needs to be added
     */
    public function __construct(PostSales $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/sales/sales';
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
     * @throws PostSalesSaleUnauthorizedException
     * @throws PostSalesSaleNotFoundException
     * @throws PostSalesSaleInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestPostResult::class, 'json');
        }
        if (401 === $status) {
            throw new PostSalesSaleUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PostSalesSaleNotFoundException($response);
        }
        if (500 === $status) {
            throw new PostSalesSaleInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
