<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace Paqtcom\Simplicate\StructuredClients;

use Paqtcom\Simplicate\Model;
use Psr\Http\Message\ResponseInterface;

class TimelineClient extends AbstractStructuredClient
{
    public function postAttachment(Model\PostAttachment $body): ?ResponseInterface
    {
        return $this->client->postTimelineAttachment($body);
    }

    public function deleteAttachment(string $id): ?ResponseInterface
    {
        return $this->client->deleteTimelineAttachmentById($id);
    }

    public function getMessages(array $queryParameters = []): Model\RestResultTimelineMessages|ResponseInterface|null
    {
        return $this->client->getTimelineMessage($queryParameters);
    }

    public function getMessage(string $id): Model\RestResultTimelineMessage|ResponseInterface|null
    {
        return $this->client->getTimelineMessageById($id);
    }

    public function postMessage(Model\PostMessage $body): ?ResponseInterface
    {
        return $this->client->postTimelineMessage($body);
    }

    public function deleteMessage(string $id): ?ResponseInterface
    {
        return $this->client->deleteTimelineMessageById($id);
    }

    public function getMessageTypes(array $queryParameters = []): Model\RestResultTimelineMessageTypes|ResponseInterface|null
    {
        return $this->client->getTimelineMessagetype($queryParameters);
    }

    public function getMessageType(string $id): Model\RestResultTimelineMessageType|ResponseInterface|null
    {
        return $this->client->getTimelineMessagetypeById($id);
    }
}
