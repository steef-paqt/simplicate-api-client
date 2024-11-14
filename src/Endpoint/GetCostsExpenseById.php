<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\GetCostsExpenseByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\GetCostsExpenseByIdNotFoundException;
use Paqtcom\Simplicate\Exception\GetCostsExpenseByIdUnauthorizedException;
use Paqtcom\Simplicate\Exception\GetCostsExpenseByIdUnprocessableEntityException;
use Paqtcom\Simplicate\Model\RestResultEmployeeExpense;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetCostsExpenseById extends BaseEndpoint
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
        return str_replace(['{id}'], [$this->id], '/costs/expense/{id}');
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
     * @throws GetCostsExpenseByIdNotFoundException
     * @throws GetCostsExpenseByIdUnprocessableEntityException
     * @throws GetCostsExpenseByIdInternalServerErrorException
     * @throws GetCostsExpenseByIdUnauthorizedException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestResultEmployeeExpense::class, 'json');
        }
        if (401 === $status) {
            throw new GetCostsExpenseByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new GetCostsExpenseByIdNotFoundException($response);
        }
        if (422 === $status) {
            throw new GetCostsExpenseByIdUnprocessableEntityException($response);
        }
        if (500 === $status) {
            throw new GetCostsExpenseByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
