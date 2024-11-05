<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetHrmEmploymenttypeByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetHrmEmploymenttypeByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetHrmEmploymenttypeByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetHrmEmploymenttypeByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultEmploymentType;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetHrmEmploymenttypeById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/hrm/employmenttype/{id}');
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
     * @return null|RestResultEmploymentType
     *@throws GetHrmEmploymenttypeByIdNotFoundException
     * @throws GetHrmEmploymenttypeByIdUnprocessableEntityException
     * @throws GetHrmEmploymenttypeByIdInternalServerErrorException
     * @throws GetHrmEmploymenttypeByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultEmploymentType::class, 'json');
        }
        if (401 === $status) {
            throw new GetHrmEmploymenttypeByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetHrmEmploymenttypeByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetHrmEmploymenttypeByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetHrmEmploymenttypeByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
