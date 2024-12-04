<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace Paqtcom\Simplicate\StructuredClients;

use Paqtcom\Simplicate\Model;
use Psr\Http\Message\ResponseInterface;

class UploadClient extends AbstractStructuredClient
{
    public function postChunked(Model\PostChunked $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postUploadChunked($body);
    }

    public function putChunked(string $id, Model\PutChunked $body): Model\RestPutResult|ResponseInterface|null
    {
        return $this->client->putUploadChunkedById($id, $body);
    }
}
