<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostHrmAbsenceBadRequestException;
use Paqtcom\Simplicate\Exception\PostHrmAbsenceInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostHrmAbsenceUnauthorizedException;
use Paqtcom\Simplicate\Model\PostAbsence;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostHrmAbsence extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PostAbsence $body absence object containing data
     */
    public function __construct(PostAbsence $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/hrm/absence';
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
     * @throws PostHrmAbsenceBadRequestException
     * @throws PostHrmAbsenceUnauthorizedException
     * @throws PostHrmAbsenceInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (204 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new PostHrmAbsenceBadRequestException($response);
        }
        if (401 === $status) {
            throw new PostHrmAbsenceUnauthorizedException($response);
        }
        if (500 === $status) {
            throw new PostHrmAbsenceInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
