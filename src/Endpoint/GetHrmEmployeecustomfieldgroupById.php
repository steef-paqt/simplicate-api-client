<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetHrmEmployeecustomfieldgroupByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetHrmEmployeecustomfieldgroupByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetHrmEmployeecustomfieldgroupByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetHrmEmployeecustomfieldgroupByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultCustomFieldGroup;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetHrmEmployeecustomfieldgroupById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/hrm/employeecustomfieldgroups/{id}');
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
     *@throws GetHrmEmployeecustomfieldgroupByIdNotFoundException
     * @throws GetHrmEmployeecustomfieldgroupByIdUnprocessableEntityException
     * @throws GetHrmEmployeecustomfieldgroupByIdInternalServerErrorException
     * @throws GetHrmEmployeecustomfieldgroupByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultCustomFieldGroup::class, 'json');
        }
        if (401 === $status) {
            throw new GetHrmEmployeecustomfieldgroupByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetHrmEmployeecustomfieldgroupByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetHrmEmployeecustomfieldgroupByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetHrmEmployeecustomfieldgroupByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
