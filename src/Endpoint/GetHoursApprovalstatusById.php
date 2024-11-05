<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetHoursApprovalstatusByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetHoursApprovalstatusByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetHoursApprovalstatusByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetHoursApprovalstatusByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultApprovalStatus;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetHoursApprovalstatusById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/hours/approvalstatus/{id}');
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
     * @return null|RestResultApprovalStatus
     *@throws GetHoursApprovalstatusByIdNotFoundException
     * @throws GetHoursApprovalstatusByIdUnprocessableEntityException
     * @throws GetHoursApprovalstatusByIdInternalServerErrorException
     * @throws GetHoursApprovalstatusByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultApprovalStatus::class, 'json');
        }
        if (401 === $status) {
            throw new GetHoursApprovalstatusByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetHoursApprovalstatusByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetHoursApprovalstatusByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetHoursApprovalstatusByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
