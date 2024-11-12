<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace Paqtcom\Simplicate\StructuredClients;

use Paqtcom\Simplicate\Model;
use Psr\Http\Message\ResponseInterface;

class DocumentsClient extends AbstractStructuredClient
{
    public function getDocuments(array $queryParameters = []): Model\RestResultDocuments|ResponseInterface|null
    {
        return $this->client->getDocumentsDocument($queryParameters);
    }

    public function postDocument(Model\PostDocument $body): ?ResponseInterface
    {
        return $this->client->postDocumentsDocument($body);
    }

    public function putDocument(Model\PutDocument $body): ?ResponseInterface
    {
        return $this->client->putDocumentsDocument($body);
    }

    public function deleteDocument(string $id): ?ResponseInterface
    {
        return $this->client->deleteDocumentsDocumentById($id);
    }

    public function getDocument(string $id): Model\RestResultDocument|ResponseInterface|null
    {
        return $this->client->getDocumentsDocumentById($id);
    }

    public function getDocumentTypes(array $queryParameters = []): Model\RestResultDocumentTypes|ResponseInterface|null
    {
        return $this->client->getDocumentsDocumenttype($queryParameters);
    }

    public function getDocumentType(string $id): Model\RestResultDocumentType|ResponseInterface|null
    {
        return $this->client->getDocumentsDocumenttypeById($id);
    }

    public function getDownload(string $id): ?ResponseInterface
    {
        return $this->client->getDocumentsDownloadById($id);
    }
}
