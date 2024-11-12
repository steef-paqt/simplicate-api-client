<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace Paqtcom\Simplicate\StructuredClients;

use Paqtcom\Simplicate\Model;
use Psr\Http\Message\ResponseInterface;

class SharedClient extends AbstractStructuredClient
{
    public function getItems(array $queryParameters = []): Model\RestResultSharedItems|ResponseInterface|null
    {
        return $this->client->getSharedItem($queryParameters);
    }

    public function getItem(string $id): Model\RestResultSharedItem|ResponseInterface|null
    {
        return $this->client->getSharedItemById($id);
    }

    public function postItem(Model\PostSharedItem $body): ?ResponseInterface
    {
        return $this->client->postSharedItem($body);
    }

    public function deleteItem(string $id): ?ResponseInterface
    {
        return $this->client->deleteSharedItemById($id);
    }

    public function putItem(string $id, Model\PostSharedItem $body): ?ResponseInterface
    {
        return $this->client->putSharedItemById($id, $body);
    }
}
