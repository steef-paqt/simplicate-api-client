<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace Paqtcom\Simplicate\StructuredClients;

use Paqtcom\Simplicate\Model;
use Paqtcom\Simplicate\QueryBuilder;
use Psr\Http\Message\ResponseInterface;

class InvoicesClient extends AbstractStructuredClient
{
    public function getDocuments(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultDocuments|ResponseInterface|null
    {
        return $this->client->getInvoicesDocument($queryParameters->toArray());
    }

    public function postDocument(Model\PostDocument $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postInvoicesDocument($body);
    }

    public function putDocument(Model\PutDocument $body): Model\RestPutResult|ResponseInterface|null
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

    public function getDocumentTypes(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultDocumentTypes|ResponseInterface|null
    {
        return $this->client->getInvoicesDocumenttype($queryParameters->toArray());
    }

    public function getDocumentType(string $id): Model\RestResultDocumentType|ResponseInterface|null
    {
        return $this->client->getInvoicesDocumenttypeById($id);
    }

    public function getInvoices(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultInvoices|ResponseInterface|null
    {
        return $this->client->getInvoicesInvoice($queryParameters->toArray());
    }

    public function postInvoice(Model\PostInvoice $body): Model\RestPostResult|ResponseInterface|null
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

    public function putInvoice(string $id, Model\Invoice $body): Model\RestPutResult|ResponseInterface|null
    {
        return $this->client->putInvoicesInvoiceById($id, $body);
    }

    public function getInvoiceStatuses(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultInvoiceStatuses|ResponseInterface|null
    {
        return $this->client->getInvoicesInvoicestatus($queryParameters->toArray());
    }

    public function getInvoiceStatus(string $id): ResponseInterface|Model\RestResultInvoiceStatus|null
    {
        return $this->client->getInvoicesInvoicestatusById($id);
    }

    public function getPayments(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultPayments|ResponseInterface|null
    {
        return $this->client->getInvoicesPayment($queryParameters->toArray());
    }

    public function postPayment(Model\Payment $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postInvoicesPayment($body);
    }

    public function getPayment(string $id): Model\RestResultPayment|ResponseInterface|null
    {
        return $this->client->getInvoicesPaymentById($id);
    }

    public function putPayment(string $id, Model\Payment $body): Model\RestPutResult|ResponseInterface|null
    {
        return $this->client->putInvoicesPaymentById($id, $body);
    }

    public function getPaymentTerms(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultPaymentTerms|ResponseInterface|null
    {
        return $this->client->getInvoicesPaymentterm($queryParameters->toArray());
    }

    public function getPaymentTerm(string $id): Model\RestResultPaymentTerm|ResponseInterface|null
    {
        return $this->client->getInvoicesPaymenttermById($id);
    }

    public function getPropositions(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultPropositions|ResponseInterface|null
    {
        return $this->client->getInvoicesProposition($queryParameters->toArray());
    }

    public function getReminderSets(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultReminderSets|ResponseInterface|null
    {
        return $this->client->getInvoicesReminderset($queryParameters->toArray());
    }

    public function getReminderSet(string $id): Model\RestResultReminderSet|ResponseInterface|null
    {
        return $this->client->getInvoicesRemindersetById($id);
    }

    public function getReminderTemplates(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultReminderTemplates|ResponseInterface|null
    {
        return $this->client->getInvoicesRemindertemplate($queryParameters->toArray());
    }

    public function getReminderTemplate(string $id): Model\RestResultReminderTemplate|ResponseInterface|null
    {
        return $this->client->getInvoicesRemindertemplateById($id);
    }

    public function getVatClasses(QueryBuilder $queryParameters = new QueryBuilder()): ResponseInterface|Model\RestResultVatClasses|null
    {
        return $this->client->getInvoicesVatclass($queryParameters->toArray());
    }

    public function getVatClass(string $id): Model\RestResultVatClass|ResponseInterface|null
    {
        return $this->client->getInvoicesVatclassById($id);
    }
}
