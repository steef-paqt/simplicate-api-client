<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostHoursSubmitInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostHoursSubmitNotFoundException;
use Paqtcom\Simplicate\Exception\PostHoursSubmitUnauthorizedException;
use Paqtcom\Simplicate\Model\RestPostResult;
use Paqtcom\Simplicate\Model\Submit;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostHoursSubmit extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param Submit $body Data that is needed to submit hours
     */
    public function __construct(Submit $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/hours/submit';
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
     * @throws PostHoursSubmitUnauthorizedException
     * @throws PostHoursSubmitNotFoundException
     * @throws PostHoursSubmitInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestPostResult::class, 'json');
        }
        if (401 === $status) {
            throw new PostHoursSubmitUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PostHoursSubmitNotFoundException($response);
        }
        if (500 === $status) {
            throw new PostHoursSubmitInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
