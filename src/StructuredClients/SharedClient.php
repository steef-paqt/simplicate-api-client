<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace Paqtcom\Simplicate\StructuredClients;

use Paqtcom\Simplicate\Model;
use Paqtcom\Simplicate\QueryBuilder;
use Psr\Http\Message\ResponseInterface;

class SharedClient extends AbstractStructuredClient
{
    public function getItems(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultSharedItems|ResponseInterface|null
    {
        return $this->client->getSharedItem($queryParameters->toArray());
    }

    public function getItem(string $id): Model\RestResultSharedItem|ResponseInterface|null
    {
        return $this->client->getSharedItemById($id);
    }

    public function postItem(Model\PostSharedItem $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postSharedItem($body);
    }

    public function deleteItem(string $id): ?ResponseInterface
    {
        return $this->client->deleteSharedItemById($id);
    }

    public function putItem(string $id, Model\PostSharedItem $body): Model\RestPutResult|ResponseInterface|null
    {
        return $this->client->putSharedItemById($id, $body);
    }
}
