<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostCrmPersonInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostCrmPersonNotFoundException;
use Paqtcom\Simplicate\Exception\PostCrmPersonUnauthorizedException;
use Paqtcom\Simplicate\Model\PostPerson;
use Paqtcom\Simplicate\Model\RestPostResult;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostCrmPerson extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PostPerson $body Person object that needs to be added
     */
    public function __construct(PostPerson $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/crm/person';
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
     * @throws PostCrmPersonUnauthorizedException
     * @throws PostCrmPersonNotFoundException
     * @throws PostCrmPersonInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestPostResult::class, 'json');
        }
        if (401 === $status) {
            throw new PostCrmPersonUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PostCrmPersonNotFoundException($response);
        }
        if (500 === $status) {
            throw new PostCrmPersonInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
