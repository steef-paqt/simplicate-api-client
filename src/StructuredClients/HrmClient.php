<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace Paqtcom\Simplicate\StructuredClients;

use Paqtcom\Simplicate\Model;
use Paqtcom\Simplicate\QueryBuilder;
use Psr\Http\Message\ResponseInterface;

class HrmClient extends AbstractStructuredClient
{
    public function getAbsences(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultAbsenceMultiple|ResponseInterface|null
    {
        return $this->client->getHrmAbsence($queryParameters->toArray());
    }

    public function postAbsence(Model\PostAbsence $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postHrmAbsence($body);
    }

    public function deleteAbsence(string $id): ?ResponseInterface
    {
        return $this->client->deleteHrmAbsenceById($id);
    }

    public function getAbsence(string $id): Model\RestResultAbsence|ResponseInterface|null
    {
        return $this->client->getHrmAbsenceById($id);
    }

    public function putAbsence(string $id, Model\PostAbsence $body): Model\RestPutResult|ResponseInterface|null
    {
        return $this->client->putHrmAbsenceById($id, $body);
    }

    public function getAbsenceTypes(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultAbsenceTypes|ResponseInterface|null
    {
        return $this->client->getHrmAbsencetype($queryParameters->toArray());
    }

    public function getAbsenceType(string $id): Model\RestResultAbsenceType|ResponseInterface|null
    {
        return $this->client->getHrmAbsencetypeById($id);
    }

    public function getCivilStatuses(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultCivilStatuses|ResponseInterface|null
    {
        return $this->client->getHrmCivilstatus($queryParameters->toArray());
    }

    public function getCivilStatus(string $id): Model\RestResultCivilStatus|ResponseInterface|null
    {
        return $this->client->getHrmCivilstatusById($id);
    }

    public function getContracts(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultContracts|ResponseInterface|null
    {
        return $this->client->getHrmContract($queryParameters->toArray());
    }

    public function getContract(string $id): Model\RestResultContract|ResponseInterface|null
    {
        return $this->client->getHrmContractById($id);
    }

    public function getContractTypes(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultContractTypes|ResponseInterface|null
    {
        return $this->client->getHrmContracttype($queryParameters->toArray());
    }

    public function getContractType(string $id): Model\RestResultContractType|ResponseInterface|null
    {
        return $this->client->getHrmContracttypeById($id);
    }

    public function getDocuments(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultDocuments|ResponseInterface|null
    {
        return $this->client->getHrmDocument($queryParameters->toArray());
    }

    public function postDocument(Model\PostDocument $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postHrmDocument($body);
    }

    public function putDocument(Model\PutDocument $body): Model\RestPutResult|ResponseInterface|null
    {
        return $this->client->putHrmDocument($body);
    }

    public function deleteDocument(string $id): ?ResponseInterface
    {
        return $this->client->deleteHrmDocumentById($id);
    }

    public function getDocument(string $id): Model\RestResultDocument|ResponseInterface|null
    {
        return $this->client->getHrmDocumentById($id);
    }

    public function getDocumentTypes(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultDocumentTypes|ResponseInterface|null
    {
        return $this->client->getHrmDocumenttype($queryParameters->toArray());
    }

    public function getDocumentType(string $id): Model\RestResultDocumentType|ResponseInterface|null
    {
        return $this->client->getHrmDocumenttypeById($id);
    }

    public function getEmployees(QueryBuilder $queryParameters = new QueryBuilder()): ResponseInterface|Model\RestResultEmployees|null
    {
        return $this->client->getHrmEmployee($queryParameters->toArray());
    }

    public function postEmployee(Model\PostEmployee $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postHrmEmployee($body);
    }

    public function getEmployee(string $id): Model\RestResultEmployee|ResponseInterface|null
    {
        return $this->client->getHrmEmployeeById($id);
    }

    public function putEmployee(Model\PutEmployee $body): Model\RestPutResult|ResponseInterface|null
    {
        return $this->client->putHrmEmployeeById($body);
    }

    public function getEmployeeCustomFieldGroups(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultCustomFieldGroups|ResponseInterface|null
    {
        return $this->client->getHrmEmployeecustomfieldgroup($queryParameters->toArray());
    }

    public function getEmployeeCustomFieldGroup(string $id): Model\RestResultCustomFieldGroup|ResponseInterface|null
    {
        return $this->client->getHrmEmployeecustomfieldgroupById($id);
    }

    public function getEmployeeCustomFields(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultCustomFields|ResponseInterface|null
    {
        return $this->client->getHrmEmployeecustomfield($queryParameters->toArray());
    }

    public function getEmployeeCustomField(string $id): Model\RestResultCustomField|ResponseInterface|null
    {
        return $this->client->getHrmEmployeecustomfieldById($id);
    }

    public function getEmployeeTypes(QueryBuilder $queryParameters = new QueryBuilder()): ResponseInterface|Model\RestResultEmployeeTypes|null
    {
        return $this->client->getHrmEmployeetype($queryParameters->toArray());
    }

    public function getEmployeeType(string $id): Model\RestResultEmployeeType|ResponseInterface|null
    {
        return $this->client->getHrmEmployeetypeById($id);
    }

    public function getEmploymentTypes(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultEmploymentTypes|ResponseInterface|null
    {
        return $this->client->getHrmEmploymenttype($queryParameters->toArray());
    }

    public function getEmploymentType(string $id): Model\RestResultEmploymentType|ResponseInterface|null
    {
        return $this->client->getHrmEmploymenttypeById($id);
    }

    public function getLeaves(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultLeaveMultiple|ResponseInterface|null
    {
        return $this->client->getHrmLeave($queryParameters->toArray());
    }

    public function postLeave(Model\PostLeave $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postHrmLeave($body);
    }

    public function getLeave(string $id): Model\RestResultLeave|ResponseInterface|null
    {
        return $this->client->getHrmLeaveById($id);
    }

    public function putLeave(string $id, Model\PostLeave $body): Model\RestPutResult|ResponseInterface|null
    {
        return $this->client->putHrmLeaveById($id, $body);
    }

    public function getLeaveBalances(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultLeaveBalances|ResponseInterface|null
    {
        return $this->client->getHrmLeavebalance($queryParameters->toArray());
    }

    public function getLeaveTypes(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultLeaveTypes|ResponseInterface|null
    {
        return $this->client->getHrmLeavetype($queryParameters->toArray());
    }

    public function getLeaveType(string $id): Model\RestResultLeaveType|ResponseInterface|null
    {
        return $this->client->getHrmLeavetypeById($id);
    }

    public function getTeams(QueryBuilder $queryParameters = new QueryBuilder()): ResponseInterface|Model\RestResultTeams|null
    {
        return $this->client->getHrmTeam($queryParameters->toArray());
    }

    public function getTeam(string $id): Model\RestResultTeam|ResponseInterface|null
    {
        return $this->client->getHrmTeamById($id);
    }

    public function getTimetables(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultTimetables|ResponseInterface|null
    {
        return $this->client->getHrmTimetable($queryParameters->toArray());
    }

    public function postTimetable(Model\PostTimetable $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postHrmTimetable($body);
    }

    public function deleteTimetable(string $id): ?ResponseInterface
    {
        return $this->client->deleteHrmTimetableById($id);
    }

    public function putTimetable(Model\PutTimetable $body): Model\RestPutResult|ResponseInterface|null
    {
        return $this->client->putHrmTimetableById($body);
    }
}
