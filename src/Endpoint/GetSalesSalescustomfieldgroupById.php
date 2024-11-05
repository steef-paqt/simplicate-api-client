<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetSalesSalescustomfieldgroupByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetSalesSalescustomfieldgroupByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetSalesSalescustomfieldgroupByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetSalesSalescustomfieldgroupByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultCustomFieldGroup;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetSalesSalescustomfieldgroupById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/sales/salescustomfieldgroups/{id}');
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
     * @return null|RestResultCustomFieldGroup
     *@throws GetSalesSalescustomfieldgroupByIdNotFoundException
     * @throws GetSalesSalescustomfieldgroupByIdUnprocessableEntityException
     * @throws GetSalesSalescustomfieldgroupByIdInternalServerErrorException
     * @throws GetSalesSalescustomfieldgroupByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultCustomFieldGroup::class, 'json');
        }
        if (401 === $status) {
            throw new GetSalesSalescustomfieldgroupByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetSalesSalescustomfieldgroupByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetSalesSalescustomfieldgroupByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetSalesSalescustomfieldgroupByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
