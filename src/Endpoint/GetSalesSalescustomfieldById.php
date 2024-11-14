<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetSalesSalescustomfieldByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetSalesSalescustomfieldByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetSalesSalescustomfieldByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetSalesSalescustomfieldByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultCustomField;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetSalesSalescustomfieldById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/sales/salescustomfields/{id}');
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
     * @return null|RestResultCustomField
     * @throws GetSalesSalescustomfieldByIdNotFoundException
     * @throws GetSalesSalescustomfieldByIdUnprocessableEntityException
     * @throws GetSalesSalescustomfieldByIdInternalServerErrorException
     * @throws GetSalesSalescustomfieldByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultCustomField::class, 'json');
        }
        if (401 === $status) {
            throw new GetSalesSalescustomfieldByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetSalesSalescustomfieldByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetSalesSalescustomfieldByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetSalesSalescustomfieldByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
