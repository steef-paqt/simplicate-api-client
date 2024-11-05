<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostSalesSalesByIdDuplicateBadRequestException;
use Paqtcom\Simplicate\Exception\PostSalesSalesByIdDuplicateInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostSalesSalesByIdDuplicateNotFoundException;
use Paqtcom\Simplicate\Exception\PostSalesSalesByIdDuplicateUnauthorizedException;
use Paqtcom\Simplicate\Model\PostDuplicateSales;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostSalesSalesByIdDuplicate extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     * @param PostDuplicateSales $body Optional parameters to overwrite
     */
    public function __construct(protected string $id, PostDuplicateSales $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/sales/sales/{id}/duplicate');
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws PostSalesSalesByIdDuplicateBadRequestException
     * @throws PostSalesSalesByIdDuplicateUnauthorizedException
     * @throws PostSalesSalesByIdDuplicateNotFoundException
     * @throws PostSalesSalesByIdDuplicateInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new PostSalesSalesByIdDuplicateBadRequestException($response);
        }
        if (401 === $status) {
            throw new PostSalesSalesByIdDuplicateUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PostSalesSalesByIdDuplicateNotFoundException($response);
        }
        if (500 === $status) {
            throw new PostSalesSalesByIdDuplicateInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
