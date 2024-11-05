<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetProjectsProjectstatusByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetProjectsProjectstatusByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetProjectsProjectstatusByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetProjectsProjectstatusByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultProjectStatus;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetProjectsProjectstatusById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/projects/projectstatus/{id}');
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
     * @return null|RestResultProjectStatus
     *@throws GetProjectsProjectstatusByIdNotFoundException
     * @throws GetProjectsProjectstatusByIdUnprocessableEntityException
     * @throws GetProjectsProjectstatusByIdInternalServerErrorException
     * @throws GetProjectsProjectstatusByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultProjectStatus::class, 'json');
        }
        if (401 === $status) {
            throw new GetProjectsProjectstatusByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetProjectsProjectstatusByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetProjectsProjectstatusByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetProjectsProjectstatusByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
