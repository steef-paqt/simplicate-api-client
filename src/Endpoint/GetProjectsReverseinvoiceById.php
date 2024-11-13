<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetProjectsReverseinvoiceByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetProjectsReverseinvoiceByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetProjectsReverseinvoiceByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\RestResultReverseInvoice;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetProjectsReverseinvoiceById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/projects/reverseinvoice/{id}');
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
     * @return null|RestResultReverseInvoice
     * @throws GetProjectsReverseinvoiceByIdNotFoundException
     * @throws GetProjectsReverseinvoiceByIdInternalServerErrorException
     * @throws GetProjectsReverseinvoiceByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultReverseInvoice::class, 'json');
        }
        if (401 === $status) {
            throw new GetProjectsReverseinvoiceByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetProjectsReverseinvoiceByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new GetProjectsReverseinvoiceByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
