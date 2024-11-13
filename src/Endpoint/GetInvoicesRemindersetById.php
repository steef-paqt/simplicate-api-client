<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetInvoicesRemindersetByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetInvoicesRemindersetByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetInvoicesRemindersetByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetInvoicesRemindersetByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultReminderSet;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetInvoicesRemindersetById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/invoices/reminderset/{id}');
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
     * @return null|RestResultReminderSet
     * @throws GetInvoicesRemindersetByIdNotFoundException
     * @throws GetInvoicesRemindersetByIdUnprocessableEntityException
     * @throws GetInvoicesRemindersetByIdInternalServerErrorException
     * @throws GetInvoicesRemindersetByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultReminderSet::class, 'json');
        }
        if (401 === $status) {
            throw new GetInvoicesRemindersetByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetInvoicesRemindersetByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetInvoicesRemindersetByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetInvoicesRemindersetByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
