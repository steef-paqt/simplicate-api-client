<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostMileageMileageInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostMileageMileageNotFoundException;
use Paqtcom\Simplicate\Exception\PostMileageMileageUnauthorizedException;
use Paqtcom\Simplicate\Model\PostMileage;
use Paqtcom\Simplicate\Model\RestPostResult;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostMileageMileage extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PostMileage $body Mileage object that needs to be added
     */
    public function __construct(PostMileage $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/mileage/mileage';
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
     * @throws PostMileageMileageUnauthorizedException
     * @throws PostMileageMileageNotFoundException
     * @throws PostMileageMileageInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestPostResult::class, 'json');
        }
        if (401 === $status) {
            throw new PostMileageMileageUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PostMileageMileageNotFoundException($response);
        }
        if (500 === $status) {
            throw new PostMileageMileageInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
