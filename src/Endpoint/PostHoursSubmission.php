<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostHoursSubmissionInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostHoursSubmissionNotFoundException;
use Paqtcom\Simplicate\Exception\PostHoursSubmissionUnauthorizedException;
use Paqtcom\Simplicate\Model\PostSubmission;
use Paqtcom\Simplicate\Model\RestPostResult;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostHoursSubmission extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PostSubmission $body Description of hours that need to be submitted.
     */
    public function __construct(PostSubmission $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/hours/submission';
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
     * @throws PostHoursSubmissionUnauthorizedException
     * @throws PostHoursSubmissionNotFoundException
     * @throws PostHoursSubmissionInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestPostResult::class, 'json');
        }
        if (401 === $status) {
            throw new PostHoursSubmissionUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PostHoursSubmissionNotFoundException($response);
        }
        if (500 === $status) {
            throw new PostHoursSubmissionInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
