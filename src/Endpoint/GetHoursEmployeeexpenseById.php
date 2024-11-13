<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetHoursEmployeeexpenseByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetHoursEmployeeexpenseByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetHoursEmployeeexpenseByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetHoursEmployeeexpenseByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultEmployeeExpense;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetHoursEmployeeexpenseById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/hours/employeeexpense/{id}');
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
     * @return null|RestResultEmployeeExpense
     * @throws GetHoursEmployeeexpenseByIdNotFoundException
     * @throws GetHoursEmployeeexpenseByIdUnprocessableEntityException
     * @throws GetHoursEmployeeexpenseByIdInternalServerErrorException
     * @throws GetHoursEmployeeexpenseByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultEmployeeExpense::class, 'json');
        }
        if (401 === $status) {
            throw new GetHoursEmployeeexpenseByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetHoursEmployeeexpenseByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetHoursEmployeeexpenseByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetHoursEmployeeexpenseByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
