<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Endpoint;

use Paqtcom\Simplicate\Exception\PutHrmTimetableByIdInternalServerErrorException;
use Paqtcom\Simplicate\Exception\PutHrmTimetableByIdNotFoundException;
use Paqtcom\Simplicate\Exception\PutHrmTimetableByIdUnauthorizedException;
use Paqtcom\Simplicate\Model\PutTimetable;
use Paqtcom\Simplicate\Model\RestPutResult;
use Paqtcom\Simplicate\Runtime\Client\BaseEndpoint;
use Paqtcom\Simplicate\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PutHrmTimetableById extends BaseEndpoint
{
    use EndpointTrait;

    /**
     * @param PutTimetable $body Timetable object that needs to be updated
     */
    public function __construct(PutTimetable $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return '/hrm/timetable/{id}';
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
     * @throws PutHrmTimetableByIdUnauthorizedException
     * @throws PutHrmTimetableByIdNotFoundException
     * @throws PutHrmTimetableByIdInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RestPutResult::class, 'json');
        }
        if (401 === $status) {
            throw new PutHrmTimetableByIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new PutHrmTimetableByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new PutHrmTimetableByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
