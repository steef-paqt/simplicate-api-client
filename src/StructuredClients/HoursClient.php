<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace Paqtcom\Simplicate\StructuredClients;

use Paqtcom\Simplicate\Model;
use Psr\Http\Message\ResponseInterface;

class HoursClient extends AbstractStructuredClient
{
    public function postAbsence(Model\PostAbsence $body): ?ResponseInterface
    {
        return $this->client->postHoursAbsence($body);
    }

    public function putAbsence(string $id, Model\PostAbsence $body): ?ResponseInterface
    {
        return $this->client->putHoursAbsenceById($id, $body);
    }

    public function getApprovals(array $queryParameters = []): Model\RestResultApprovals|ResponseInterface|null
    {
        return $this->client->getHoursApproval($queryParameters);
    }

    public function postApproval(Model\PostApproval $body): ?ResponseInterface
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

    public function putApproval(string $id, Model\PostApproval $body): ?ResponseInterface
    {
        return $this->client->putHoursApprovalById($id, $body);
    }

    public function getApprovalStatuses(array $queryParameters = []): Model\RestResultApprovalStatusList|ResponseInterface|null
    {
        return $this->client->getHoursApprovalstatus($queryParameters);
    }

    public function getApprovalStatus(string $id): Model\RestResultApprovalStatus|ResponseInterface|null
    {
        return $this->client->getHoursApprovalstatusById($id);
    }

    public function getEmployeeExpenses(array $queryParameters = []): ResponseInterface|Model\RestResultEmployeeExpenseList|null
    {
        return $this->client->getHoursEmployeeexpense($queryParameters);
    }

    public function getEmployeeExpense(string $id): Model\RestResultEmployeeExpense|ResponseInterface|null
    {
        return $this->client->getHoursEmployeeexpenseById($id);
    }

    public function getHours(array $queryParameters = []): Model\RestResultHours|ResponseInterface|null
    {
        return $this->client->getHoursHour($queryParameters);
    }

    public function postHour(Model\PostHours $body): ?ResponseInterface
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

    public function putHour(string $id, Model\PostHours $body): ?ResponseInterface
    {
        return $this->client->putHoursHourById($id, $body);
    }

    public function getHoursTypes(array $queryParameters = []): Model\RestResultHourTypes|ResponseInterface|null
    {
        return $this->client->getHoursHourstype($queryParameters);
    }

    public function postHoursType(Model\PostHoursType $body): ?ResponseInterface
    {
        return $this->client->postHoursHourstype($body);
    }

    public function getHoursType(string $id): ResponseInterface|Model\RestResultHourType|null
    {
        return $this->client->getHoursHourstypeById($id);
    }

    public function putHoursType(string $id, Model\PostHoursType $body): ?ResponseInterface
    {
        return $this->client->putHoursHourstypeById($id, $body);
    }

    public function postLeave(Model\PostLeave $body): ?ResponseInterface
    {
        return $this->client->postHoursLeave($body);
    }

    public function putLeave(string $id, Model\PostLeave $body): ?ResponseInterface
    {
        return $this->client->putHoursLeaveById($id, $body);
    }

    public function getSubmissions(array $queryParameters = []): Model\RestResultHoursSubmissions|ResponseInterface|null
    {
        return $this->client->getHoursSubmission($queryParameters);
    }

    public function postSubmission(Model\PostSubmission $body): ?ResponseInterface
    {
        return $this->client->postHoursSubmission($body);
    }

    public function postSubmit(Model\Submit $body): ?ResponseInterface
    {
        return $this->client->postHoursSubmit($body);
    }

    public function getTimesheetRows(array $queryParameters = []): Model\RestResultHoursTimesheetRows|ResponseInterface|null
    {
        return $this->client->getHoursTimesheetrow($queryParameters);
    }

    public function postTimesheetRow(Model\PostTimesheetRow $body): ?ResponseInterface
    {
        return $this->client->postHoursTimesheetrow($body);
    }

    public function deleteTimesheetRow(string $id): ?ResponseInterface
    {
        return $this->client->deleteHoursTimesheetrowById($id);
    }

    public function putTimesheetRowOrder(array $body): ?ResponseInterface
    {
        return $this->client->putHoursTimesheetrowOrder($body);
    }

    public function getTimesheetRowMostRecent(array $queryParameters = []): Model\RestResultDateTimeRange|ResponseInterface|null
    {
        return $this->client->getHoursTimesheetrowMostrecent($queryParameters);
    }
}
