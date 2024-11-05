<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Endpoint;

use Steefdw\Simplicate\Runtime\Client\BaseEndpoint;
use Steefdw\Simplicate\Runtime\Client\Endpoint;

class PutSalesQuoteemailById extends BaseEndpoint implements Endpoint
{
    use \Steefdw\Simplicate\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     *
     *
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\PutQuoteEmail $body Document object containing data
     */
    public function __construct(string $id, \Steefdw\Simplicate\Model\PutQuoteEmail $body)
    {
        $this->id = $id;
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/sales/quoteemail/{id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
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
     * @throws \Steefdw\Simplicate\Exception\PutSalesQuoteemailByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutSalesQuoteemailByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutSalesQuoteemailByIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Steefdw\Simplicate\Exception\PutSalesQuoteemailByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Steefdw\Simplicate\Exception\PutSalesQuoteemailByIdUnauthorizedException($response);
        }
        if (500 === $status) {
            throw new \Steefdw\Simplicate\Exception\PutSalesQuoteemailByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
