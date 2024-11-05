<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetCostsCoststypeByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetCostsCoststypeByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetCostsCoststypeByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetCostsCoststypeByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultHourType;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetCostsCoststypeById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/costs/coststype/{id}');
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
     *@throws GetCostsCoststypeByIdNotFoundException
     * @throws GetCostsCoststypeByIdUnprocessableEntityException
     * @throws GetCostsCoststypeByIdInternalServerErrorException
     * @throws GetCostsCoststypeByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultHourType::class, 'json');
        }
        if (401 === $status) {
            throw new GetCostsCoststypeByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetCostsCoststypeByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetCostsCoststypeByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetCostsCoststypeByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
