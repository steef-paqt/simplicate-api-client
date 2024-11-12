<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace Paqtcom\Simplicate\StructuredClients;

use Paqtcom\Simplicate\Model;
use Psr\Http\Message\ResponseInterface;

class HrmClient extends AbstractStructuredClient
{
    public function getAbsences(array $queryParameters = []): Model\RestResultAbsenceMultiple|ResponseInterface|null
    {
        return $this->client->getHrmAbsence($queryParameters);
    }

    public function postAbsence(Model\PostAbsence $body): ?ResponseInterface
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

    public function putAbsence(string $id, Model\PostAbsence $body): ?ResponseInterface
    {
        return $this->client->putHrmAbsenceById($id, $body);
    }

    public function getAbsenceTypes(array $queryParameters = []): Model\RestResultAbsenceTypes|ResponseInterface|null
    {
        return $this->client->getHrmAbsencetype($queryParameters);
    }

    public function getAbsenceType(string $id): Model\RestResultAbsenceType|ResponseInterface|null
    {
        return $this->client->getHrmAbsencetypeById($id);
    }

    public function getCivilStatuses(array $queryParameters = []): Model\RestResultCivilStatuses|ResponseInterface|null
    {
        return $this->client->getHrmCivilstatus($queryParameters);
    }

    public function getCivilStatus(string $id): Model\RestResultCivilStatus|ResponseInterface|null
    {
        return $this->client->getHrmCivilstatusById($id);
    }

    public function getContracts(array $queryParameters = []): Model\RestResultContracts|ResponseInterface|null
    {
        return $this->client->getHrmContract($queryParameters);
    }

    public function getContract(string $id): Model\RestResultContract|ResponseInterface|null
    {
        return $this->client->getHrmContractById($id);
    }

    public function getContractTypes(array $queryParameters = []): Model\RestResultContractTypes|ResponseInterface|null
    {
        return $this->client->getHrmContracttype($queryParameters);
    }

    public function getContractType(string $id): Model\RestResultContractType|ResponseInterface|null
    {
        return $this->client->getHrmContracttypeById($id);
    }

    public function getDocuments(array $queryParameters = []): Model\RestResultDocuments|ResponseInterface|null
    {
        return $this->client->getHrmDocument($queryParameters);
    }

    public function postDocument(Model\PostDocument $body): ?ResponseInterface
    {
        return $this->client->postHrmDocument($body);
    }

    public function putDocument(Model\PutDocument $body): ?ResponseInterface
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

    public function getDocumentTypes(array $queryParameters = []): Model\RestResultDocumentTypes|ResponseInterface|null
    {
        return $this->client->getHrmDocumenttype($queryParameters);
    }

    public function getDocumentType(string $id): Model\RestResultDocumentType|ResponseInterface|null
    {
        return $this->client->getHrmDocumenttypeById($id);
    }

    public function getEmployees(array $queryParameters = []): ResponseInterface|Model\RestResultEmployees|null
    {
        return $this->client->getHrmEmployee($queryParameters);
    }

    public function postEmployee(Model\PostEmployee $body): ?ResponseInterface
    {
        return $this->client->postHrmEmployee($body);
    }

    public function getEmployee(string $id): Model\RestResultEmployee|ResponseInterface|null
    {
        return $this->client->getHrmEmployeeById($id);
    }

    public function putEmployee(Model\PutEmployee $body): ?ResponseInterface
    {
        return $this->client->putHrmEmployeeById($body);
    }

    public function getEmployeeCustomFieldGroups(array $queryParameters = []): Model\RestResultCustomFieldGroups|ResponseInterface|null
    {
        return $this->client->getHrmEmployeecustomfieldgroup($queryParameters);
    }

    public function getEmployeeCustomFieldGroup(string $id): Model\RestResultCustomFieldGroup|ResponseInterface|null
    {
        return $this->client->getHrmEmployeecustomfieldgroupById($id);
    }

    public function getEmployeeCustomFields(array $queryParameters = []): Model\RestResultCustomFields|ResponseInterface|null
    {
        return $this->client->getHrmEmployeecustomfield($queryParameters);
    }

    public function getEmployeeCustomField(string $id): Model\RestResultCustomField|ResponseInterface|null
    {
        return $this->client->getHrmEmployeecustomfieldById($id);
    }

    public function getEmployeeTypes(array $queryParameters = []): ResponseInterface|Model\RestResultEmployeeTypes|null
    {
        return $this->client->getHrmEmployeetype($queryParameters);
    }

    public function getEmployeeType(string $id): Model\RestResultEmployeeType|ResponseInterface|null
    {
        return $this->client->getHrmEmployeetypeById($id);
    }

    public function getEmploymentTypes(array $queryParameters = []): Model\RestResultEmploymentTypes|ResponseInterface|null
    {
        return $this->client->getHrmEmploymenttype($queryParameters);
    }

    public function getEmploymentType(string $id): Model\RestResultEmploymentType|ResponseInterface|null
    {
        return $this->client->getHrmEmploymenttypeById($id);
    }

    public function getLeaves(array $queryParameters = []): Model\RestResultLeaveMultiple|ResponseInterface|null
    {
        return $this->client->getHrmLeave($queryParameters);
    }

    public function postLeave(Model\PostLeave $body): ?ResponseInterface
    {
        return $this->client->postHrmLeave($body);
    }

    public function getLeave(string $id): Model\RestResultLeave|ResponseInterface|null
    {
        return $this->client->getHrmLeaveById($id);
    }

    public function putLeave(string $id, Model\PostLeave $body): ?ResponseInterface
    {
        return $this->client->putHrmLeaveById($id, $body);
    }

    public function getLeaveBalances(array $queryParameters = []): Model\RestResultLeaveBalances|ResponseInterface|null
    {
        return $this->client->getHrmLeavebalance($queryParameters);
    }

    public function getLeaveTypes(array $queryParameters = []): Model\RestResultLeaveTypes|ResponseInterface|null
    {
        return $this->client->getHrmLeavetype($queryParameters);
    }

    public function getLeaveType(string $id): Model\RestResultLeaveType|ResponseInterface|null
    {
        return $this->client->getHrmLeavetypeById($id);
    }

    public function getTeams(array $queryParameters = []): ResponseInterface|Model\RestResultTeams|null
    {
        return $this->client->getHrmTeam($queryParameters);
    }

    public function getTeam(string $id): Model\RestResultTeam|ResponseInterface|null
    {
        return $this->client->getHrmTeamById($id);
    }

    public function getTimetables(array $queryParameters = []): Model\RestResultTimetables|ResponseInterface|null
    {
        return $this->client->getHrmTimetable($queryParameters);
    }

    public function postTimetable(Model\PostTimetable $body): ?ResponseInterface
    {
        return $this->client->postHrmTimetable($body);
    }

    public function deleteTimetable(string $id): ?ResponseInterface
    {
        return $this->client->deleteHrmTimetableById($id);
    }

    public function putTimetable(Model\PutTimetable $body): ?ResponseInterface
    {
        return $this->client->putHrmTimetableById($body);
    }
}
