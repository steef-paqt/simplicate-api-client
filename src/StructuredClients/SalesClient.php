<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace Paqtcom\Simplicate\StructuredClients;

use Paqtcom\Simplicate\Model;
use Psr\Http\Message\ResponseInterface;

class SalesClient extends AbstractStructuredClient
{
    public function getConvertToProject(string $id): Model\RestResultSale|ResponseInterface|null
    {
        return $this->client->getSalesConverttoprojectById($id);
    }

    public function getDocuments(array $queryParameters = []): Model\RestResultDocuments|ResponseInterface|null
    {
        return $this->client->getSalesDocument($queryParameters);
    }

    public function postDocument(Model\PostDocument $body): ?ResponseInterface
    {
        return $this->client->postSalesDocument($body);
    }

    public function putDocument(Model\PutDocument $body): ?ResponseInterface
    {
        return $this->client->putSalesDocument($body);
    }

    public function deleteDocument(string $id): ?ResponseInterface
    {
        return $this->client->deleteSalesDocumentById($id);
    }

    public function getDocument(string $id): Model\RestResultDocument|ResponseInterface|null
    {
        return $this->client->getSalesDocumentById($id);
    }

    public function getDocumentTypes(array $queryParameters = []): Model\RestResultDocumentTypes|ResponseInterface|null
    {
        return $this->client->getSalesDocumenttype($queryParameters);
    }

    public function getDocumentType(string $id): Model\RestResultDocumentType|ResponseInterface|null
    {
        return $this->client->getSalesDocumenttypeById($id);
    }

    public function getQuotes(array $queryParameters = []): Model\RestResultQuotes|ResponseInterface|null
    {
        return $this->client->getSalesQuote($queryParameters);
    }

    public function postQuote(Model\PostQuote $body): ?ResponseInterface
    {
        return $this->client->postSalesQuote($body);
    }

    public function deleteQuote(string $id): ?ResponseInterface
    {
        return $this->client->deleteSalesQuoteById($id);
    }

    public function getQuote(string $id): ResponseInterface|Model\RestResultQuote|null
    {
        return $this->client->getSalesQuoteById($id);
    }

    public function putQuote(string $id, Model\PostQuote $body): ?ResponseInterface
    {
        return $this->client->putSalesQuoteById($id, $body);
    }

    public function putQuoteEmail(string $id, Model\PutQuoteEmail $body): ?ResponseInterface
    {
        return $this->client->putSalesQuoteemailById($id, $body);
    }

    public function getQuoteStatuses(): Model\RestResultQuoteStatuses|ResponseInterface|null
    {
        return $this->client->getSalesQuotestatus();
    }

    public function getQuoteStatus(string $id): Model\RestResultQuoteStatus|ResponseInterface|null
    {
        return $this->client->getSalesQuotestatusById($id);
    }

    public function getQuoteTemplates(array $queryParameters = []): Model\RestResultQuoteTemplates|ResponseInterface|null
    {
        return $this->client->getSalesQuotetemplate($queryParameters);
    }

    public function postQuoteTemplate(Model\PostQuoteTemplate $body): ?ResponseInterface
    {
        return $this->client->postSalesQuotetemplate($body);
    }

    public function deleteQuoteTemplate(string $id): ?ResponseInterface
    {
        return $this->client->deleteSalesQuotetemplateById($id);
    }

    public function getQuoteTemplate(string $id): Model\RestResultQuoteTemplate|ResponseInterface|null
    {
        return $this->client->getSalesQuotetemplateById($id);
    }

    public function putQuoteTemplate(string $id, Model\PostQuoteTemplate $body): ?ResponseInterface
    {
        return $this->client->putSalesQuotetemplateById($id, $body);
    }

    public function getRevenueGroups(array $queryParameters = []): Model\RestResultRevenueGroups|ResponseInterface|null
    {
        return $this->client->getSalesRevenuegroup($queryParameters);
    }

    public function getRevenueGroup(string $id): ResponseInterface|Model\RestResultRevenueGroup|null
    {
        return $this->client->getSalesRevenuegroupById($id);
    }

    public function getSales(array $queryParameters = []): ResponseInterface|Model\RestResultSales|null
    {
        return $this->client->getSalesSale($queryParameters);
    }

    public function postSale(Model\PostSales $body): ?ResponseInterface
    {
        return $this->client->postSalesSale($body);
    }

    public function getSale(string $id): Model\RestResultSale|ResponseInterface|null
    {
        return $this->client->getSalesSaleById($id);
    }

    public function putSale(string $id, Model\PostSales $body): ?ResponseInterface
    {
        return $this->client->putSalesSaleById($id, $body);
    }

    public function postSalesByIdDuplicate(string $id, Model\PostDuplicateSales $body): ?ResponseInterface
    {
        return $this->client->postSalesSalesByIdDuplicate($id, $body);
    }

    public function getSalesCustomFieldGroups(array $queryParameters = []): Model\RestResultCustomFieldGroups|ResponseInterface|null
    {
        return $this->client->getSalesSalescustomfieldgroup($queryParameters);
    }

    public function getSalesCustomFieldGroup(string $id): Model\RestResultCustomFieldGroup|ResponseInterface|null
    {
        return $this->client->getSalesSalescustomfieldgroupById($id);
    }

    public function getSalesCustomFields(array $queryParameters = []): Model\RestResultCustomFields|ResponseInterface|null
    {
        return $this->client->getSalesSalescustomfield($queryParameters);
    }

    public function getSalesCustomField(string $id): Model\RestResultCustomField|ResponseInterface|null
    {
        return $this->client->getSalesSalescustomfieldById($id);
    }

    public function getSalesFilters(array $queryParameters = []): ?ResponseInterface
    {
        return $this->client->getSalesSalesfilter($queryParameters);
    }

    public function getSalesFilter(string $id): ?ResponseInterface
    {
        return $this->client->getSalesSalesfilterById($id);
    }

    public function getSalesProgresses(array $queryParameters = []): Model\RestResultSalesProgresses|ResponseInterface|null
    {
        return $this->client->getSalesSalesprogress($queryParameters);
    }

    public function getSalesProgress(string $id): Model\RestResultSalesProgress|ResponseInterface|null
    {
        return $this->client->getSalesSalesprogressById($id);
    }

    public function getSalesReasons(array $queryParameters = []): Model\RestResultSalesReasons|ResponseInterface|null
    {
        return $this->client->getSalesSalesreason($queryParameters);
    }

    public function getSalesReason(string $id): Model\RestResultSalesReason|ResponseInterface|null
    {
        return $this->client->getSalesSalesreasonById($id);
    }

    public function getSalesSources(array $queryParameters = []): Model\RestResultSalesSources|ResponseInterface|null
    {
        return $this->client->getSalesSalessource($queryParameters);
    }

    public function getSalesSource(string $id): Model\RestResultSalesSource|ResponseInterface|null
    {
        return $this->client->getSalesSalessourceById($id);
    }

    public function getSalesStatuses(array $queryParameters = []): Model\RestResultSalesStatusses|ResponseInterface|null
    {
        return $this->client->getSalesSalesstatus($queryParameters);
    }

    public function getSalesStatus(string $id): ResponseInterface|Model\RestResultSalesStatus|null
    {
        return $this->client->getSalesSalesstatusById($id);
    }

    public function postServiceByIdDuplicate(string $id, string $body): ?ResponseInterface
    {
        return $this->client->postSalesServiceByIdDuplicate($id, $body);
    }

    public function getServices(array $queryParameters = []): Model\RestResultSalesServices|ResponseInterface|null
    {
        return $this->client->getSalesService($queryParameters);
    }

    public function postService(Model\PostSalesService $body): ?ResponseInterface
    {
        return $this->client->postSalesService($body);
    }

    public function deleteService(string $id): ?ResponseInterface
    {
        return $this->client->deleteSalesServiceById($id);
    }

    public function getService(string $id): Model\RestResultSalesService|ResponseInterface|null
    {
        return $this->client->getSalesServiceById($id);
    }

    public function putService(string $id, Model\PostSalesService $body): ?ResponseInterface
    {
        return $this->client->putSalesServiceById($id, $body);
    }
}
