<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace Paqtcom\Simplicate\StructuredClients;

use Paqtcom\Simplicate\Model;
use Paqtcom\Simplicate\QueryBuilder;
use Psr\Http\Message\ResponseInterface;

class TimelineClient extends AbstractStructuredClient
{
    public function postAttachment(Model\PostAttachment $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postTimelineAttachment($body);
    }

    public function deleteAttachment(string $id): ?ResponseInterface
    {
        return $this->client->deleteTimelineAttachmentById($id);
    }

    public function getMessages(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultTimelineMessages|ResponseInterface|null
    {
        return $this->client->getTimelineMessage($queryParameters->toArray());
    }

    public function getMessage(string $id): Model\RestResultTimelineMessage|ResponseInterface|null
    {
        return $this->client->getTimelineMessageById($id);
    }

    public function postMessage(Model\PostMessage $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postTimelineMessage($body);
    }

    public function deleteMessage(string $id): ?ResponseInterface
    {
        return $this->client->deleteTimelineMessageById($id);
    }

    public function getMessageTypes(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultTimelineMessageTypes|ResponseInterface|null
    {
        return $this->client->getTimelineMessagetype($queryParameters->toArray());
    }

    public function getMessageType(string $id): Model\RestResultTimelineMessageType|ResponseInterface|null
    {
        return $this->client->getTimelineMessagetypeById($id);
    }
}
