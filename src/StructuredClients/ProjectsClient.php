<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace Paqtcom\Simplicate\StructuredClients;

use Paqtcom\Simplicate\Model;
use Paqtcom\Simplicate\QueryBuilder;
use Psr\Http\Message\ResponseInterface;

class ProjectsClient extends AbstractStructuredClient
{
    public function getAssignments(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultProjectAssignments|ResponseInterface|null
    {
        return $this->client->getProjectsAssignment($queryParameters->toArray());
    }

    public function getAssignment(string $id): ResponseInterface|Model\RestResultProjectAssignment|null
    {
        return $this->client->getProjectsAssignmentById($id);
    }

    public function postAssignment(Model\PostAssignment $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postProjectsAssignment($body);
    }

    public function putAssignment(string $id, Model\PutAssignment $body): ?ResponseInterface
    {
        return $this->client->putProjectsAssignmentById($id, $body);
    }

    public function getAssignmentBudgets(QueryBuilder $queryParameters = new QueryBuilder()): ResponseInterface|Model\RestResultProjectAssignmentbudget|null
    {
        return $this->client->getProjectsAssignmentbudget($queryParameters->toArray());
    }

    public function getAssignmentStatuses(QueryBuilder $queryParameters = new QueryBuilder()): ResponseInterface|Model\RestResultProjectAssignmentStatuses|null
    {
        return $this->client->getProjectsAssignmentstatus($queryParameters->toArray());
    }

    public function getAssignmentStatus(string $id, QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultProjectAssignmentStatus|ResponseInterface|null
    {
        return $this->client->getProjectsAssignmentstatusById($id, $queryParameters->toArray());
    }

    public function postAssignmentStatus(Model\AssignmentStatus $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postProjectsAssignmentstatus($body);
    }

    public function putAssignmentStatus(string $id, Model\AssignmentStatus $body): ?ResponseInterface
    {
        return $this->client->putProjectsAssignmentstatusById($id, $body);
    }

    public function getDocuments(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultDocuments|ResponseInterface|null
    {
        return $this->client->getProjectsDocument($queryParameters->toArray());
    }

    public function getDocument(string $id): Model\RestResultDocument|ResponseInterface|null
    {
        return $this->client->getProjectsDocumentById($id);
    }

    public function postDocument(Model\PostDocument $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postProjectsDocument($body);
    }

    public function putDocument(Model\PutDocument $body): ?ResponseInterface
    {
        return $this->client->putProjectsDocument($body);
    }

    public function deleteDocument(string $id): ?ResponseInterface
    {
        return $this->client->deleteProjectsDocumentById($id);
    }

    public function getDocumentTypes(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultDocumentTypes|ResponseInterface|null
    {
        return $this->client->getProjectsDocumenttype($queryParameters->toArray());
    }

    public function getDocumentType(string $id): Model\RestResultDocumentType|ResponseInterface|null
    {
        return $this->client->getProjectsDocumenttypeById($id);
    }

    public function getProjects(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultProjects|ResponseInterface|null
    {
        return $this->client->getProjectsProject($queryParameters->toArray());
    }

    public function getProject(string $id): Model\RestResultProject|ResponseInterface|null
    {
        return $this->client->getProjectsProjectById($id);
    }

    public function postProject(Model\PostProject $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postProjectsProject($body);
    }

    public function deleteProject(string $id): ?ResponseInterface
    {
        return $this->client->deleteProjectsProjectById($id);
    }

    public function putProject(string $id, Model\PostProject $body): ?ResponseInterface
    {
        return $this->client->putProjectsProjectById($id, $body);
    }

    public function getProjectByIdPlanningBudget(string $id, QueryBuilder $queryParameters = new QueryBuilder()): ?ResponseInterface
    {
        return $this->client->getProjectsProjectByIdPlanningBudget($id, $queryParameters->toArray());
    }

    public function getProjectCustomFieldGroups(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultCustomFieldGroups|ResponseInterface|null
    {
        return $this->client->getProjectsProjectcustomfieldgroup($queryParameters->toArray());
    }

    public function getProjectCustomFieldGroup(string $id): Model\RestResultCustomFieldGroup|ResponseInterface|null
    {
        return $this->client->getProjectsProjectcustomfieldgroupById($id);
    }

    public function getProjectCustomFields(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultCustomFields|ResponseInterface|null
    {
        return $this->client->getProjectsProjectcustomfield($queryParameters->toArray());
    }

    public function getProjectCustomField(string $id): Model\RestResultCustomField|ResponseInterface|null
    {
        return $this->client->getProjectsProjectcustomfieldById($id);
    }

    public function getProjectFilters(QueryBuilder $queryParameters = new QueryBuilder()): ?ResponseInterface
    {
        return $this->client->getProjectsProjectfilter($queryParameters->toArray());
    }

    public function getProjectFilter(string $id): ?ResponseInterface
    {
        return $this->client->getProjectsProjectfilterById($id);
    }

    public function getProjectStatuses(QueryBuilder $queryParameters = new QueryBuilder()): ResponseInterface|Model\RestResultProjectStatusses|null
    {
        return $this->client->getProjectsProjectstatus($queryParameters->toArray());
    }

    public function getProjectStatus(string $id): Model\RestResultProjectStatus|ResponseInterface|null
    {
        return $this->client->getProjectsProjectstatusById($id);
    }

    public function getPurchases(QueryBuilder $queryParameters = new QueryBuilder()): ResponseInterface|Model\RestResultPurchases|null
    {
        return $this->client->getProjectsPurchase($queryParameters->toArray());
    }

    public function getPurchase(string $id): Model\RestResultPurchase|ResponseInterface|null
    {
        return $this->client->getProjectsPurchaseById($id);
    }

    public function getPurchaseTypes(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultPurchaseTypes|ResponseInterface|null
    {
        return $this->client->getProjectsPurchasetype($queryParameters->toArray());
    }

    public function getPurchaseType(string $id): Model\RestResultPurchaseType|ResponseInterface|null
    {
        return $this->client->getProjectsPurchasetypeById($id);
    }

    public function getReverseInvoices(QueryBuilder $queryParameters = new QueryBuilder()): ResponseInterface|Model\RestResultReverseInvoices|null
    {
        return $this->client->getProjectsReverseinvoice($queryParameters->toArray());
    }

    public function getReverseInvoice(string $id): Model\RestResultReverseInvoice|ResponseInterface|null
    {
        return $this->client->getProjectsReverseinvoiceById($id);
    }

    public function postServiceByIdDuplicate(string $id, string $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postProjectsServiceByIdDuplicate($id, $body);
    }

    public function getServices(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultProjectServices|ResponseInterface|null
    {
        return $this->client->getProjectsService($queryParameters->toArray());
    }

    public function getService(string $id): ResponseInterface|Model\RestResultProjectService|null
    {
        return $this->client->getProjectsServiceById($id);
    }

    public function postService(Model\PostProjectService $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postProjectsService($body);
    }

    public function deleteService(string $id): ?ResponseInterface
    {
        return $this->client->deleteProjectsServiceById($id);
    }

    public function putService(string $id, Model\PutProjectService $body): ?ResponseInterface
    {
        return $this->client->putProjectsServiceById($id, $body);
    }

    public function getServiceByIdPlanningBudget(string $id, QueryBuilder $queryParameters = new QueryBuilder()): ?ResponseInterface
    {
        return $this->client->getProjectsServiceByIdPlanningBudget($id, $queryParameters->toArray());
    }
}
