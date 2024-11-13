<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetHoursHourByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetHoursHourByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetHoursHourByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetHoursHourByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultHour;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetHoursHourById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/hours/hours/{id}');
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
     * @return null|RestResultHour
     * @throws GetHoursHourByIdNotFoundException
     * @throws GetHoursHourByIdUnprocessableEntityException
     * @throws GetHoursHourByIdInternalServerErrorException
     * @throws GetHoursHourByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultHour::class, 'json');
        }
        if (401 === $status) {
            throw new GetHoursHourByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetHoursHourByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetHoursHourByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetHoursHourByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
