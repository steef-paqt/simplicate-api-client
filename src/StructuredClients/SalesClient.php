<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace Paqtcom\Simplicate\StructuredClients;

use Paqtcom\Simplicate\Model;
use Paqtcom\Simplicate\QueryBuilder;
use Psr\Http\Message\ResponseInterface;

class SalesClient extends AbstractStructuredClient
{
    public function getConvertToProject(string $id): Model\RestResultSale|ResponseInterface|null
    {
        return $this->client->getSalesConverttoprojectById($id);
    }

    public function getDocuments(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultDocuments|ResponseInterface|null
    {
        return $this->client->getSalesDocument($queryParameters->toArray());
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

    public function getDocumentTypes(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultDocumentTypes|ResponseInterface|null
    {
        return $this->client->getSalesDocumenttype($queryParameters->toArray());
    }

    public function getDocumentType(string $id): Model\RestResultDocumentType|ResponseInterface|null
    {
        return $this->client->getSalesDocumenttypeById($id);
    }

    public function getQuotes(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultQuotes|ResponseInterface|null
    {
        return $this->client->getSalesQuote($queryParameters->toArray());
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

    public function getQuoteTemplates(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultQuoteTemplates|ResponseInterface|null
    {
        return $this->client->getSalesQuotetemplate($queryParameters->toArray());
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

    public function getRevenueGroups(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultRevenueGroups|ResponseInterface|null
    {
        return $this->client->getSalesRevenuegroup($queryParameters->toArray());
    }

    public function getRevenueGroup(string $id): ResponseInterface|Model\RestResultRevenueGroup|null
    {
        return $this->client->getSalesRevenuegroupById($id);
    }

    public function getSales(QueryBuilder $queryParameters = new QueryBuilder()): ResponseInterface|Model\RestResultSales|null
    {
        return $this->client->getSalesSale($queryParameters->toArray());
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

    public function getSalesCustomFieldGroups(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultCustomFieldGroups|ResponseInterface|null
    {
        return $this->client->getSalesSalescustomfieldgroup($queryParameters->toArray());
    }

    public function getSalesCustomFieldGroup(string $id): Model\RestResultCustomFieldGroup|ResponseInterface|null
    {
        return $this->client->getSalesSalescustomfieldgroupById($id);
    }

    public function getSalesCustomFields(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultCustomFields|ResponseInterface|null
    {
        return $this->client->getSalesSalescustomfield($queryParameters->toArray());
    }

    public function getSalesCustomField(string $id): Model\RestResultCustomField|ResponseInterface|null
    {
        return $this->client->getSalesSalescustomfieldById($id);
    }

    public function getSalesFilters(QueryBuilder $queryParameters = new QueryBuilder()): ?ResponseInterface
    {
        return $this->client->getSalesSalesfilter($queryParameters->toArray());
    }

    public function getSalesFilter(string $id): ?ResponseInterface
    {
        return $this->client->getSalesSalesfilterById($id);
    }

    public function getSalesProgresses(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultSalesProgresses|ResponseInterface|null
    {
        return $this->client->getSalesSalesprogress($queryParameters->toArray());
    }

    public function getSalesProgress(string $id): Model\RestResultSalesProgress|ResponseInterface|null
    {
        return $this->client->getSalesSalesprogressById($id);
    }

    public function getSalesReasons(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultSalesReasons|ResponseInterface|null
    {
        return $this->client->getSalesSalesreason($queryParameters->toArray());
    }

    public function getSalesReason(string $id): Model\RestResultSalesReason|ResponseInterface|null
    {
        return $this->client->getSalesSalesreasonById($id);
    }

    public function getSalesSources(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultSalesSources|ResponseInterface|null
    {
        return $this->client->getSalesSalessource($queryParameters->toArray());
    }

    public function getSalesSource(string $id): Model\RestResultSalesSource|ResponseInterface|null
    {
        return $this->client->getSalesSalessourceById($id);
    }

    public function getSalesStatuses(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultSalesStatusses|ResponseInterface|null
    {
        return $this->client->getSalesSalesstatus($queryParameters->toArray());
    }

    public function getSalesStatus(string $id): ResponseInterface|Model\RestResultSalesStatus|null
    {
        return $this->client->getSalesSalesstatusById($id);
    }

    public function postServiceByIdDuplicate(string $id, string $body): ?ResponseInterface
    {
        return $this->client->postSalesServiceByIdDuplicate($id, $body);
    }

    public function getServices(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultSalesServices|ResponseInterface|null
    {
        return $this->client->getSalesService($queryParameters->toArray());
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
