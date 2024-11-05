<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetSalesSalesprogressByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetSalesSalesprogressByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetSalesSalesprogressByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetSalesSalesprogressByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultSalesProgress;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetSalesSalesprogressById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/sales/salesprogress/{id}');
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
     * @return null|RestResultSalesProgress
     *@throws GetSalesSalesprogressByIdNotFoundException
     * @throws GetSalesSalesprogressByIdUnprocessableEntityException
     * @throws GetSalesSalesprogressByIdInternalServerErrorException
     * @throws GetSalesSalesprogressByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultSalesProgress::class, 'json');
        }
        if (401 === $status) {
            throw new GetSalesSalesprogressByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetSalesSalesprogressByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetSalesSalesprogressByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetSalesSalesprogressByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
