<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetSalesQuotetemplateByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetSalesQuotetemplateByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetSalesQuotetemplateByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetSalesQuotetemplateByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultQuoteTemplate;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetSalesQuotetemplateById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/sales/quotetemplate/{id}');
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
     * @return null|RestResultQuoteTemplate
     * @throws GetSalesQuotetemplateByIdNotFoundException
     * @throws GetSalesQuotetemplateByIdUnprocessableEntityException
     * @throws GetSalesQuotetemplateByIdInternalServerErrorException
     * @throws GetSalesQuotetemplateByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultQuoteTemplate::class, 'json');
        }
        if (401 === $status) {
            throw new GetSalesQuotetemplateByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetSalesQuotetemplateByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetSalesQuotetemplateByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetSalesQuotetemplateByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
