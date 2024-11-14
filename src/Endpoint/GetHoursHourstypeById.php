<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetHoursHourstypeByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetHoursHourstypeByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetHoursHourstypeByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetHoursHourstypeByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultHourType;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetHoursHourstypeById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/hours/hourstype/{id}');
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
     * @return null|RestResultHourType
     * @throws GetHoursHourstypeByIdNotFoundException
     * @throws GetHoursHourstypeByIdUnprocessableEntityException
     * @throws GetHoursHourstypeByIdInternalServerErrorException
     * @throws GetHoursHourstypeByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultHourType::class, 'json');
        }
        if (401 === $status) {
            throw new GetHoursHourstypeByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetHoursHourstypeByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetHoursHourstypeByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetHoursHourstypeByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
