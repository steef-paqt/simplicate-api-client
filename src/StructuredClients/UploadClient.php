<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace Paqtcom\Simplicate\StructuredClients;

use Paqtcom\Simplicate\Model\PostChunked;
use Paqtcom\Simplicate\Model\PutChunked;
use Psr\Http\Message\ResponseInterface;

class UploadClient extends AbstractStructuredClient
{
    public function postChunked(PostChunked $body): ?ResponseInterface
    {
        return $this->client->postUploadChunked($body);
    }

    public function putChunked(string $id, PutChunked $body): ?ResponseInterface
    {
        return $this->client->putUploadChunkedById($id, $body);
    }
}
