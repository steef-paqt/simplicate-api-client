<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace Paqtcom\Simplicate\StructuredClients;

use Paqtcom\Simplicate\Model;
use Paqtcom\Simplicate\QueryBuilder;
use Psr\Http\Message\ResponseInterface;

class HoursClient extends AbstractStructuredClient
{
    public function postAbsence(Model\PostAbsence $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postHoursAbsence($body);
    }

    public function putAbsence(string $id, Model\PostAbsence $body): Model\RestPutResult|ResponseInterface|null
    {
        return $this->client->putHoursAbsenceById($id, $body);
    }

    public function getApprovals(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultApprovals|ResponseInterface|null
    {
        return $this->client->getHoursApproval($queryParameters->toArray());
    }

    public function postApproval(Model\PostApproval $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postHoursApproval($body);
    }

    public function deleteApproval(string $id): ?ResponseInterface
    {
        return $this->client->deleteHoursApprovalById($id);
    }

    public function getApproval(string $id): Model\RestResultApproval|ResponseInterface|null
    {
        return $this->client->getHoursApprovalById($id);
    }

    public function putApproval(string $id, Model\PostApproval $body): Model\RestPutResult|ResponseInterface|null
    {
        return $this->client->putHoursApprovalById($id, $body);
    }

    public function getApprovalStatuses(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultApprovalStatusList|ResponseInterface|null
    {
        return $this->client->getHoursApprovalstatus($queryParameters->toArray());
    }

    public function getApprovalStatus(string $id): Model\RestResultApprovalStatus|ResponseInterface|null
    {
        return $this->client->getHoursApprovalstatusById($id);
    }

    public function getEmployeeExpenses(QueryBuilder $queryParameters = new QueryBuilder()): ResponseInterface|Model\RestResultEmployeeExpenseList|null
    {
        return $this->client->getHoursEmployeeexpense($queryParameters->toArray());
    }

    public function getEmployeeExpense(string $id): Model\RestResultEmployeeExpense|ResponseInterface|null
    {
        return $this->client->getHoursEmployeeexpenseById($id);
    }

    public function getHours(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultHours|ResponseInterface|null
    {
        return $this->client->getHoursHour($queryParameters->toArray());
    }

    public function postHour(Model\PostHours $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postHoursHour($body);
    }

    public function deleteHour(string $id): ?ResponseInterface
    {
        return $this->client->deleteHoursHourById($id);
    }

    public function getHour(string $id): Model\RestResultHour|ResponseInterface|null
    {
        return $this->client->getHoursHourById($id);
    }

    public function putHour(string $id, Model\PostHours $body): Model\RestPutResult|ResponseInterface|null
    {
        return $this->client->putHoursHourById($id, $body);
    }

    public function getHoursTypes(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultHourTypes|ResponseInterface|null
    {
        return $this->client->getHoursHourstype($queryParameters->toArray());
    }

    public function postHoursType(Model\PostHoursType $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postHoursHourstype($body);
    }

    public function getHoursType(string $id): ResponseInterface|Model\RestResultHourType|null
    {
        return $this->client->getHoursHourstypeById($id);
    }

    public function putHoursType(string $id, Model\PostHoursType $body): Model\RestPutResult|ResponseInterface|null
    {
        return $this->client->putHoursHourstypeById($id, $body);
    }

    public function postLeave(Model\PostLeave $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postHoursLeave($body);
    }

    public function putLeave(string $id, Model\PostLeave $body): Model\RestPutResult|ResponseInterface|null
    {
        return $this->client->putHoursLeaveById($id, $body);
    }

    public function getSubmissions(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultHoursSubmissions|ResponseInterface|null
    {
        return $this->client->getHoursSubmission($queryParameters->toArray());
    }

    public function postSubmission(Model\PostSubmission $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postHoursSubmission($body);
    }

    public function postSubmit(Model\Submit $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postHoursSubmit($body);
    }

    public function getTimesheetRows(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultHoursTimesheetRows|ResponseInterface|null
    {
        return $this->client->getHoursTimesheetrow($queryParameters->toArray());
    }

    public function postTimesheetRow(Model\PostTimesheetRow $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postHoursTimesheetrow($body);
    }

    public function deleteTimesheetRow(string $id): ?ResponseInterface
    {
        return $this->client->deleteHoursTimesheetrowById($id);
    }

    public function putTimesheetRowOrder(array $body): Model\RestPutResult|ResponseInterface|null
    {
        return $this->client->putHoursTimesheetrowOrder($body);
    }

    public function getTimesheetRowMostRecent(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultDateTimeRange|ResponseInterface|null
    {
        return $this->client->getHoursTimesheetrowMostrecent($queryParameters->toArray());
    }
}
