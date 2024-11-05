<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetHrmCivilstatusByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetHrmCivilstatusByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetHrmCivilstatusByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetHrmCivilstatusByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultCivilStatus;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetHrmCivilstatusById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/hrm/civilstatus/{id}');
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
     * @return null|RestResultCivilStatus
     *@throws GetHrmCivilstatusByIdNotFoundException
     * @throws GetHrmCivilstatusByIdUnprocessableEntityException
     * @throws GetHrmCivilstatusByIdInternalServerErrorException
     * @throws GetHrmCivilstatusByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultCivilStatus::class, 'json');
        }
        if (401 === $status) {
            throw new GetHrmCivilstatusByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetHrmCivilstatusByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetHrmCivilstatusByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetHrmCivilstatusByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
