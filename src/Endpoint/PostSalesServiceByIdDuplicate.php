<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostSalesServiceByIdDuplicateBadRequestException;
use Paqtcom\Simplicate\Exception\PostSalesServiceByIdDuplicateInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostSalesServiceByIdDuplicateNotFoundException;
use Paqtcom\Simplicate\Exception\PostSalesServiceByIdDuplicateUnauthorizedException;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostSalesServiceByIdDuplicate extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     * @param string $body Optional parameters to overwrite
     */
    public function __construct(protected string $id, string $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/sales/service/{id}/duplicate');
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], $this->body];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws PostSalesServiceByIdDuplicateBadRequestException
     * @throws PostSalesServiceByIdDuplicateUnauthorizedException
     * @throws PostSalesServiceByIdDuplicateNotFoundException
     * @throws PostSalesServiceByIdDuplicateInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new PostSalesServiceByIdDuplicateBadRequestException($response);
        }
        if (401 === $status) {
            throw new PostSalesServiceByIdDuplicateUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PostSalesServiceByIdDuplicateNotFoundException($response);
        }
        if (500 === $status) {
            throw new PostSalesServiceByIdDuplicateInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
