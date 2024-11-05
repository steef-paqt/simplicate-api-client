<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\DeleteHrmAbsenceByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\DeleteHrmAbsenceByIdNotFoundException;
use Paqtcom\Simplicate\Exception\DeleteHrmAbsenceByIdUnauthorizedException;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class DeleteHrmAbsenceById extends BaseEndpoint
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
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/hrm/absence/{id}');
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
     * @throws DeleteHrmAbsenceByIdUnauthorizedException
     * @throws DeleteHrmAbsenceByIdNotFoundException
     * @throws DeleteHrmAbsenceByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new DeleteHrmAbsenceByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new DeleteHrmAbsenceByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new DeleteHrmAbsenceByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
