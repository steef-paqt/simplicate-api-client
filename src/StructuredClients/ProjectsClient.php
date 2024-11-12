<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace Paqtcom\Simplicate\StructuredClients;

use Paqtcom\Simplicate\Model;
use Psr\Http\Message\ResponseInterface;

class ProjectsClient extends AbstractStructuredClient
{
    public function getAssignments(array $queryParameters = []): Model\RestResultProjectAssignments|ResponseInterface|null
    {
        return $this->client->getProjectsAssignment($queryParameters);
    }

    public function getAssignment(string $id): ResponseInterface|Model\RestResultProjectAssignment|null
    {
        return $this->client->getProjectsAssignmentById($id);
    }

    public function postAssignment(Model\PostAssignment $body): ?ResponseInterface
    {
        return $this->client->postProjectsAssignment($body);
    }

    public function putAssignment(string $id, Model\PutAssignment $body): ?ResponseInterface
    {
        return $this->client->putProjectsAssignmentById($id, $body);
    }

    public function getAssignmentBudgets(array $queryParameters = []): ResponseInterface|Model\RestResultProjectAssignmentbudget|null
    {
        return $this->client->getProjectsAssignmentbudget($queryParameters);
    }

    public function getAssignmentStatuses(array $queryParameters = []): ResponseInterface|Model\RestResultProjectAssignmentStatuses|null
    {
        return $this->client->getProjectsAssignmentstatus($queryParameters);
    }

    public function getAssignmentStatus(string $id, array $queryParameters = []): Model\RestResultProjectAssignmentStatus|ResponseInterface|null
    {
        return $this->client->getProjectsAssignmentstatusById($id, $queryParameters);
    }

    public function postAssignmentStatus(Model\AssignmentStatus $body): ?ResponseInterface
    {
        return $this->client->postProjectsAssignmentstatus($body);
    }

    public function putAssignmentStatus(string $id, Model\AssignmentStatus $body): ?ResponseInterface
    {
        return $this->client->putProjectsAssignmentstatusById($id, $body);
    }

    public function getDocuments(array $queryParameters = []): Model\RestResultDocuments|ResponseInterface|null
    {
        return $this->client->getProjectsDocument($queryParameters);
    }

    public function getDocument(string $id): Model\RestResultDocument|ResponseInterface|null
    {
        return $this->client->getProjectsDocumentById($id);
    }

    public function postDocument(Model\PostDocument $body): ?ResponseInterface
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

    public function getDocumentTypes(array $queryParameters = []): Model\RestResultDocumentTypes|ResponseInterface|null
    {
        return $this->client->getProjectsDocumenttype($queryParameters);
    }

    public function getDocumentType(string $id): Model\RestResultDocumentType|ResponseInterface|null
    {
        return $this->client->getProjectsDocumenttypeById($id);
    }

    public function getProjects(array $queryParameters = []): Model\RestResultProjects|ResponseInterface|null
    {
        return $this->client->getProjectsProject($queryParameters);
    }

    public function getProject(string $id): Model\RestResultProject|ResponseInterface|null
    {
        return $this->client->getProjectsProjectById($id);
    }

    public function postProject(Model\PostProject $body): ?ResponseInterface
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

    public function getProjectByIdPlanningBudget(string $id, array $queryParameters = []): ?ResponseInterface
    {
        return $this->client->getProjectsProjectByIdPlanningBudget($id, $queryParameters);
    }

    public function getProjectCustomFieldGroups(array $queryParameters = []): Model\RestResultCustomFieldGroups|ResponseInterface|null
    {
        return $this->client->getProjectsProjectcustomfieldgroup($queryParameters);
    }

    public function getProjectCustomFieldGroup(string $id): Model\RestResultCustomFieldGroup|ResponseInterface|null
    {
        return $this->client->getProjectsProjectcustomfieldgroupById($id);
    }

    public function getProjectCustomFields(array $queryParameters = []): Model\RestResultCustomFields|ResponseInterface|null
    {
        return $this->client->getProjectsProjectcustomfield($queryParameters);
    }

    public function getProjectCustomField(string $id): Model\RestResultCustomField|ResponseInterface|null
    {
        return $this->client->getProjectsProjectcustomfieldById($id);
    }

    public function getProjectFilters(array $queryParameters = []): ?ResponseInterface
    {
        return $this->client->getProjectsProjectfilter($queryParameters);
    }

    public function getProjectFilter(string $id): ?ResponseInterface
    {
        return $this->client->getProjectsProjectfilterById($id);
    }

    public function getProjectStatuses(array $queryParameters = []): ResponseInterface|Model\RestResultProjectStatusses|null
    {
        return $this->client->getProjectsProjectstatus($queryParameters);
    }

    public function getProjectStatus(string $id): Model\RestResultProjectStatus|ResponseInterface|null
    {
        return $this->client->getProjectsProjectstatusById($id);
    }

    public function getPurchases(array $queryParameters = []): ResponseInterface|Model\RestResultPurchases|null
    {
        return $this->client->getProjectsPurchase($queryParameters);
    }

    public function getPurchase(string $id): Model\RestResultPurchase|ResponseInterface|null
    {
        return $this->client->getProjectsPurchaseById($id);
    }

    public function getPurchaseTypes(array $queryParameters = []): Model\RestResultPurchaseTypes|ResponseInterface|null
    {
        return $this->client->getProjectsPurchasetype($queryParameters);
    }

    public function getPurchaseType(string $id): Model\RestResultPurchaseType|ResponseInterface|null
    {
        return $this->client->getProjectsPurchasetypeById($id);
    }

    public function getReverseInvoices(array $queryParameters = []): ResponseInterface|Model\RestResultReverseInvoices|null
    {
        return $this->client->getProjectsReverseinvoice($queryParameters);
    }

    public function getReverseInvoice(string $id): Model\RestResultReverseInvoice|ResponseInterface|null
    {
        return $this->client->getProjectsReverseinvoiceById($id);
    }

    public function postServiceByIdDuplicate(string $id, string $body): ?ResponseInterface
    {
        return $this->client->postProjectsServiceByIdDuplicate($id, $body);
    }

    public function getServices(array $queryParameters = []): Model\RestResultProjectServices|ResponseInterface|null
    {
        return $this->client->getProjectsService($queryParameters);
    }

    public function getService(string $id): ResponseInterface|Model\RestResultProjectService|null
    {
        return $this->client->getProjectsServiceById($id);
    }

    public function postService(Model\PostProjectService $body): ?ResponseInterface
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

    public function getServiceByIdPlanningBudget(string $id, array $queryParameters = []): ?ResponseInterface
    {
        return $this->client->getProjectsServiceByIdPlanningBudget($id, $queryParameters);
    }
}
