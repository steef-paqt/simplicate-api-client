<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetInvoicesRemindertemplateByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetInvoicesRemindertemplateByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetInvoicesRemindertemplateByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetInvoicesRemindertemplateByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultReminderTemplate;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetInvoicesRemindertemplateById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/invoices/remindertemplate/{id}');
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
     * @return null|RestResultReminderTemplate
     *@throws GetInvoicesRemindertemplateByIdNotFoundException
     * @throws GetInvoicesRemindertemplateByIdUnprocessableEntityException
     * @throws GetInvoicesRemindertemplateByIdInternalServerErrorException
     * @throws GetInvoicesRemindertemplateByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultReminderTemplate::class, 'json');
        }
        if (401 === $status) {
            throw new GetInvoicesRemindertemplateByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetInvoicesRemindertemplateByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetInvoicesRemindertemplateByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetInvoicesRemindertemplateByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
