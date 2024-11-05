<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetProjectsProjectfilterByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetProjectsProjectfilterByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetProjectsProjectfilterByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetProjectsProjectfilterByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetProjectsProjectfilterById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/projects/projectfilters/{id}');
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
     *
     * @throws GetProjectsProjectfilterByIdUnauthorizedException
     * @throws GetProjectsProjectfilterByIdNotFoundException
     * @throws GetProjectsProjectfilterByIdUnprocessableEntityException
     * @throws GetProjectsProjectfilterByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new GetProjectsProjectfilterByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetProjectsProjectfilterByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetProjectsProjectfilterByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetProjectsProjectfilterByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
