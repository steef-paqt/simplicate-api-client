<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetMileageMileageByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetMileageMileageByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetMileageMileageByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetMileageMileageByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultMileage;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetMileageMileageById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/mileage/mileage/{id}');
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
     * @return null|RestResultMileage
     *@throws GetMileageMileageByIdNotFoundException
     * @throws GetMileageMileageByIdUnprocessableEntityException
     * @throws GetMileageMileageByIdInternalServerErrorException
     * @throws GetMileageMileageByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultMileage::class, 'json');
        }
        if (401 === $status) {
            throw new GetMileageMileageByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetMileageMileageByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetMileageMileageByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetMileageMileageByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
