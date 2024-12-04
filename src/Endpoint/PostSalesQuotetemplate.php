<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PostSalesQuotetemplateBadRequestException;
use Paqtcom\Simplicate\Exception\PostSalesQuotetemplateInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PostSalesQuotetemplateUnauthorizedException;
use Paqtcom\Simplicate\Model\PostQuoteTemplate;
use Paqtcom\Simplicate\Model\RestPostResult;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostSalesQuotetemplate extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PostQuoteTemplate $body Quote template object containing data
     */
    public function __construct(PostQuoteTemplate $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/sales/quotetemplate';
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
     * @throws PostSalesQuotetemplateBadRequestException
     * @throws PostSalesQuotetemplateUnauthorizedException
     * @throws PostSalesQuotetemplateInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestPostResult::class, 'json');
        }
        if (400 === $status) {
            throw new PostSalesQuotetemplateBadRequestException($response);
        }
        if (401 === $status) {
            throw new PostSalesQuotetemplateUnauthorizedException($response);
        }
        if (500 === $status) {
            throw new PostSalesQuotetemplateInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
