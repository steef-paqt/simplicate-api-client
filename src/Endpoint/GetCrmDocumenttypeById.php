<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetCrmDocumenttypeByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetCrmDocumenttypeByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetCrmDocumenttypeByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetCrmDocumenttypeByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultDocumentType;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetCrmDocumenttypeById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/crm/documenttype/{id}');
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
     * @return null|RestResultDocumentType
     * @throws GetCrmDocumenttypeByIdNotFoundException
     * @throws GetCrmDocumenttypeByIdUnprocessableEntityException
     * @throws GetCrmDocumenttypeByIdInternalServerErrorException
     * @throws GetCrmDocumenttypeByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultDocumentType::class, 'json');
        }
        if (401 === $status) {
            throw new GetCrmDocumenttypeByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetCrmDocumenttypeByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetCrmDocumenttypeByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetCrmDocumenttypeByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
