<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutSalesQuotetemplateByIdBadRequestException;
use Paqtcom\Simplicate\Exception\PutSalesQuotetemplateByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutSalesQuotetemplateByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\PostQuoteTemplate;
use Paqtcom\Simplicate\Model\RestPutResult;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutSalesQuotetemplateById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param string $id The template's id
     * @param PostQuoteTemplate $body Quote template object containing data
     */
    public function __construct(protected string $id, PostQuoteTemplate $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/sales/quotetemplate/{id}');
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
     * @throws PutSalesQuotetemplateByIdBadRequestException
     * @throws PutSalesQuotetemplateByIdUnauthorizedException
     * @throws PutSalesQuotetemplateByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestPutResult::class, 'json');
        }
        if (400 === $status) {
            throw new PutSalesQuotetemplateByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new PutSalesQuotetemplateByIdUnauthorizedException($response);
        }
        if (500 === $status) {
            throw new PutSalesQuotetemplateByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
