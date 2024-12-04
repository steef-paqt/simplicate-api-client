<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace Paqtcom\Simplicate\StructuredClients;

use Paqtcom\Simplicate\Model;
use Paqtcom\Simplicate\QueryBuilder;
use Psr\Http\Message\ResponseInterface;

class MileageClient extends AbstractStructuredClient
{
    public function getMileages(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultMileageList|ResponseInterface|null
    {
        return $this->client->getMileageMileage($queryParameters->toArray());
    }

    public function getMileage(string $id): Model\RestResultMileage|ResponseInterface|null
    {
        return $this->client->getMileageMileageById($id);
    }

    public function postMileage(Model\PostMileage $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postMileageMileage($body);
    }

    public function deleteMileage(string $id): ?ResponseInterface
    {
        return $this->client->deleteMileageMileageById($id);
    }

    public function putMileage(string $id, Model\PutMileage $body): ?ResponseInterface
    {
        return $this->client->putMileageMileageById($id, $body);
    }
}
