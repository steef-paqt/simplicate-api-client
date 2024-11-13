<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetProjectsProjectcustomfieldgroupByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetProjectsProjectcustomfieldgroupByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetProjectsProjectcustomfieldgroupByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetProjectsProjectcustomfieldgroupByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultCustomFieldGroup;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetProjectsProjectcustomfieldgroupById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/projects/projectcustomfieldgroups/{id}');
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
     * @return null|RestResultCustomFieldGroup
     * @throws GetProjectsProjectcustomfieldgroupByIdNotFoundException
     * @throws GetProjectsProjectcustomfieldgroupByIdUnprocessableEntityException
     * @throws GetProjectsProjectcustomfieldgroupByIdInternalServerErrorException
     * @throws GetProjectsProjectcustomfieldgroupByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultCustomFieldGroup::class, 'json');
        }
        if (401 === $status) {
            throw new GetProjectsProjectcustomfieldgroupByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetProjectsProjectcustomfieldgroupByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetProjectsProjectcustomfieldgroupByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetProjectsProjectcustomfieldgroupByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
