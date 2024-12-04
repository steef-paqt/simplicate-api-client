<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostProjectsServiceInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostProjectsServiceNotFoundException;
use Paqtcom\Simplicate\Exception\PostProjectsServiceUnauthorizedException;
use Paqtcom\Simplicate\Model\PostProjectService;
use Paqtcom\Simplicate\Model\RestPostResult;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostProjectsService extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PostProjectService $body template object that needs to be added
     */
    public function __construct(PostProjectService $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/projects/service';
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
     * @throws PostProjectsServiceUnauthorizedException
     * @throws PostProjectsServiceNotFoundException
     * @throws PostProjectsServiceInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestPostResult::class, 'json');
        }
        if (401 === $status) {
            throw new PostProjectsServiceUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PostProjectsServiceNotFoundException($response);
        }
        if (500 === $status) {
            throw new PostProjectsServiceInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
