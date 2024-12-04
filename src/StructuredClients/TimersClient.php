<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace Paqtcom\Simplicate\StructuredClients;

use Paqtcom\Simplicate\Model;
use Paqtcom\Simplicate\QueryBuilder;
use Psr\Http\Message\ResponseInterface;

/**
 * @see https://developer.simplicate.com/explore#/Hours
 */
class TimersClient extends AbstractStructuredClient
{
    public function getTimers(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultTimers|ResponseInterface|null
    {
        return $this->client->getTimersTimer($queryParameters->toArray());
    }

    public function getTimer(string $id): Model\RestResultTimer|ResponseInterface|null
    {
        return $this->client->getTimersTimerById($id);
    }

    public function postTimer(Model\PostTimer $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postTimersTimer($body);
    }

    public function deleteTimer(string $id): ?ResponseInterface
    {
        return $this->client->deleteTimersTimerById($id);
    }

    public function putTimer(string $id, Model\PutTimer $body): Model\RestPutResult|ResponseInterface|null
    {
        return $this->client->putTimersTimerById($id, $body);
    }
}
