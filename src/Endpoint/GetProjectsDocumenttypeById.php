<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetProjectsDocumenttypeByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetProjectsDocumenttypeByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetProjectsDocumenttypeByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetProjectsDocumenttypeByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultDocumentType;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetProjectsDocumenttypeById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/projects/documenttype/{id}');
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
     *@throws GetProjectsDocumenttypeByIdNotFoundException
     * @throws GetProjectsDocumenttypeByIdUnprocessableEntityException
     * @throws GetProjectsDocumenttypeByIdInternalServerErrorException
     * @throws GetProjectsDocumenttypeByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultDocumentType::class, 'json');
        }
        if (401 === $status) {
            throw new GetProjectsDocumenttypeByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetProjectsDocumenttypeByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetProjectsDocumenttypeByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetProjectsDocumenttypeByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
