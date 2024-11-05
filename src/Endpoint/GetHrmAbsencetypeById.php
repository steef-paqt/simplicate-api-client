<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetHrmAbsencetypeByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetHrmAbsencetypeByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetHrmAbsencetypeByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetHrmAbsencetypeByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultAbsenceType;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetHrmAbsencetypeById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/hrm/absencetype/{id}');
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
     * @return null|RestResultAbsenceType
     *@throws GetHrmAbsencetypeByIdNotFoundException
     * @throws GetHrmAbsencetypeByIdUnprocessableEntityException
     * @throws GetHrmAbsencetypeByIdInternalServerErrorException
     * @throws GetHrmAbsencetypeByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultAbsenceType::class, 'json');
        }
        if (401 === $status) {
            throw new GetHrmAbsencetypeByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetHrmAbsencetypeByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetHrmAbsencetypeByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetHrmAbsencetypeByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
