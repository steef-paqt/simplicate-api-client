<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostSalesServiceInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostSalesServiceNotFoundException;
use Paqtcom\Simplicate\Exception\PostSalesServiceUnauthorizedException;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostSalesService extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param \Paqtcom\Simplicate\Model\PostSalesService $body template object that needs to be added
     */
    public function __construct(\Paqtcom\Simplicate\Model\PostSalesService $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/sales/service';
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
     * @throws PostSalesServiceUnauthorizedException
     * @throws PostSalesServiceNotFoundException
     * @throws PostSalesServiceInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new PostSalesServiceUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PostSalesServiceNotFoundException($response);
        }
        if (500 === $status) {
            throw new PostSalesServiceInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
