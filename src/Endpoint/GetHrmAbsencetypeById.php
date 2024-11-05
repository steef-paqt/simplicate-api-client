<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Endpoint;

use Steefdw\Simplicate\Runtime\Client\BaseEndpoint;
use Steefdw\Simplicate\Runtime\Client\Endpoint;

class GetHrmAbsencetypeById extends BaseEndpoint implements Endpoint
{
    use \Steefdw\Simplicate\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     *
     *
     * @param string $id The template's id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/hrm/absencetype/{id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
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
     * @throws \Steefdw\Simplicate\Exception\GetHrmAbsencetypeByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmAbsencetypeByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmAbsencetypeByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetHrmAbsencetypeByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultAbsenceType
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, \Steefdw\Simplicate\Model\RestResultAbsenceType::class, 'json');
        }
        if (401 === $status) {
            throw new \Steefdw\Simplicate\Exception\GetHrmAbsencetypeByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Steefdw\Simplicate\Exception\GetHrmAbsencetypeByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new \Steefdw\Simplicate\Exception\GetHrmAbsencetypeByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new \Steefdw\Simplicate\Exception\GetHrmAbsencetypeByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
