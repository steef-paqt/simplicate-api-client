<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace Paqtcom\Simplicate\StructuredClients;

use Paqtcom\Simplicate\Model;
use Psr\Http\Message\ResponseInterface;

class ServicesClient extends AbstractStructuredClient
{
    public function getDefaultServices(array $queryParameters = []): Model\RestResultDefaultServices|ResponseInterface|null
    {
        return $this->client->getServicesDefaultservice($queryParameters);
    }

    public function getDefaultService(string $id): Model\RestResultDefaultService|ResponseInterface|null
    {
        return $this->client->getServicesDefaultserviceById($id);
    }

    public function postDefaultService(Model\PostDefaultService $body): ?ResponseInterface
    {
        return $this->client->postServicesDefaultservice($body);
    }

    public function deleteDefaultService(string $id): ?ResponseInterface
    {
        return $this->client->deleteServicesDefaultserviceById($id);
    }

    public function putDefaultService(string $id, Model\PostDefaultService $body): ?ResponseInterface
    {
        return $this->client->putServicesDefaultserviceById($id, $body);
    }
}
