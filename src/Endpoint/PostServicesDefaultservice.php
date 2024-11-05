<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostServicesDefaultserviceInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostServicesDefaultserviceNotFoundException;
use Paqtcom\Simplicate\Exception\PostServicesDefaultserviceUnauthorizedException;
use Paqtcom\Simplicate\Model\PostDefaultService;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostServicesDefaultservice extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PostDefaultService $body Default service object that needs to be added
     */
    public function __construct(PostDefaultService $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/services/defaultservice';
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
     * @throws PostServicesDefaultserviceUnauthorizedException
     * @throws PostServicesDefaultserviceNotFoundException
     * @throws PostServicesDefaultserviceInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new PostServicesDefaultserviceUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PostServicesDefaultserviceNotFoundException($response);
        }
        if (500 === $status) {
            throw new PostServicesDefaultserviceInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
