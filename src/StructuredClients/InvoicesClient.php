<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace Paqtcom\Simplicate\StructuredClients;

use Paqtcom\Simplicate\Model;
use Psr\Http\Message\ResponseInterface;

class InvoicesClient extends AbstractStructuredClient
{
    public function getDocuments(array $queryParameters = []): Model\RestResultDocuments|ResponseInterface|null
    {
        return $this->client->getInvoicesDocument($queryParameters);
    }

    public function postDocument(Model\PostDocument $body): ?ResponseInterface
    {
        return $this->client->postInvoicesDocument($body);
    }

    public function putDocument(Model\PutDocument $body): ?ResponseInterface
    {
        return $this->client->putInvoicesDocument($body);
    }

    public function deleteDocument(string $id): ?ResponseInterface
    {
        return $this->client->deleteInvoicesDocumentById($id);
    }

    public function getDocument(string $id): Model\RestResultDocument|ResponseInterface|null
    {
        return $this->client->getInvoicesDocumentById($id);
    }

    public function getDocumentTypes(array $queryParameters = []): Model\RestResultDocumentTypes|ResponseInterface|null
    {
        return $this->client->getInvoicesDocumenttype($queryParameters);
    }

    public function getDocumentType(string $id): Model\RestResultDocumentType|ResponseInterface|null
    {
        return $this->client->getInvoicesDocumenttypeById($id);
    }

    public function getInvoices(array $queryParameters = []): Model\RestResultInvoices|ResponseInterface|null
    {
        return $this->client->getInvoicesInvoice($queryParameters);
    }

    public function postInvoice(Model\PostInvoice $body): ?ResponseInterface
    {
        return $this->client->postInvoicesInvoice($body);
    }

    public function deleteInvoice(string $id): ?ResponseInterface
    {
        return $this->client->deleteInvoicesInvoiceById($id);
    }

    public function getInvoice(string $id): Model\RestResultInvoice|ResponseInterface|null
    {
        return $this->client->getInvoicesInvoiceById($id);
    }

    public function putInvoice(string $id, Model\Invoice $body): ?ResponseInterface
    {
        return $this->client->putInvoicesInvoiceById($id, $body);
    }

    public function getInvoiceStatuses(array $queryParameters = []): Model\RestResultInvoiceStatuses|ResponseInterface|null
    {
        return $this->client->getInvoicesInvoicestatus($queryParameters);
    }

    public function getInvoiceStatus(string $id): ResponseInterface|Model\RestResultInvoiceStatus|null
    {
        return $this->client->getInvoicesInvoicestatusById($id);
    }

    public function getPayments(array $queryParameters = []): Model\RestResultPayments|ResponseInterface|null
    {
        return $this->client->getInvoicesPayment($queryParameters);
    }

    public function postPayment(Model\Payment $body): ?ResponseInterface
    {
        return $this->client->postInvoicesPayment($body);
    }

    public function getPayment(string $id): Model\RestResultPayment|ResponseInterface|null
    {
        return $this->client->getInvoicesPaymentById($id);
    }

    public function putPayment(string $id, Model\Payment $body): ?ResponseInterface
    {
        return $this->client->putInvoicesPaymentById($id, $body);
    }

    public function getPaymentTerms(array $queryParameters = []): Model\RestResultPaymentTerms|ResponseInterface|null
    {
        return $this->client->getInvoicesPaymentterm($queryParameters);
    }

    public function getPaymentTerm(string $id): Model\RestResultPaymentTerm|ResponseInterface|null
    {
        return $this->client->getInvoicesPaymenttermById($id);
    }

    public function getPropositions(array $queryParameters = []): Model\RestResultPropositions|ResponseInterface|null
    {
        return $this->client->getInvoicesProposition($queryParameters);
    }

    public function getReminderSets(array $queryParameters = []): Model\RestResultReminderSets|ResponseInterface|null
    {
        return $this->client->getInvoicesReminderset($queryParameters);
    }

    public function getReminderSet(string $id): Model\RestResultReminderSet|ResponseInterface|null
    {
        return $this->client->getInvoicesRemindersetById($id);
    }

    public function getReminderTemplates(array $queryParameters = []): Model\RestResultReminderTemplates|ResponseInterface|null
    {
        return $this->client->getInvoicesRemindertemplate($queryParameters);
    }

    public function getReminderTemplate(string $id): Model\RestResultReminderTemplate|ResponseInterface|null
    {
        return $this->client->getInvoicesRemindertemplateById($id);
    }

    public function getVatClasses(array $queryParameters = []): ResponseInterface|Model\RestResultVatClasses|null
    {
        return $this->client->getInvoicesVatclass($queryParameters);
    }

    public function getVatClass(string $id): Model\RestResultVatClass|ResponseInterface|null
    {
        return $this->client->getInvoicesVatclassById($id);
    }
}
