<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetHrmDocumenttypeByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetHrmDocumenttypeByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetHrmDocumenttypeByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetHrmDocumenttypeByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultDocumentType;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetHrmDocumenttypeById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/hrm/documenttype/{id}');
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
     *@throws GetHrmDocumenttypeByIdNotFoundException
     * @throws GetHrmDocumenttypeByIdUnprocessableEntityException
     * @throws GetHrmDocumenttypeByIdInternalServerErrorException
     * @throws GetHrmDocumenttypeByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultDocumentType::class, 'json');
        }
        if (401 === $status) {
            throw new GetHrmDocumenttypeByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetHrmDocumenttypeByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetHrmDocumenttypeByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetHrmDocumenttypeByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
