<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetHrmTeamByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetHrmTeamByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetHrmTeamByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetHrmTeamByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultTeam;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetHrmTeamById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/hrm/team/{id}');
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
     * @return null|RestResultTeam
     *@throws GetHrmTeamByIdNotFoundException
     * @throws GetHrmTeamByIdUnprocessableEntityException
     * @throws GetHrmTeamByIdInternalServerErrorException
     * @throws GetHrmTeamByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultTeam::class, 'json');
        }
        if (401 === $status) {
            throw new GetHrmTeamByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetHrmTeamByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetHrmTeamByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetHrmTeamByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
