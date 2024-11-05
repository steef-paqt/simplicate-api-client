<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetSalesDocumenttypeByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetSalesDocumenttypeByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetSalesDocumenttypeByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetSalesDocumenttypeByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultDocumentType;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetSalesDocumenttypeById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/sales/documenttype/{id}');
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
     *@throws GetSalesDocumenttypeByIdNotFoundException
     * @throws GetSalesDocumenttypeByIdUnprocessableEntityException
     * @throws GetSalesDocumenttypeByIdInternalServerErrorException
     * @throws GetSalesDocumenttypeByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultDocumentType::class, 'json');
        }
        if (401 === $status) {
            throw new GetSalesDocumenttypeByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetSalesDocumenttypeByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetSalesDocumenttypeByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetSalesDocumenttypeByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
