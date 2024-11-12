<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace Paqtcom\Simplicate\StructuredClients;

use Paqtcom\Simplicate\Model\RestResultEmployeeExpense;
use Paqtcom\Simplicate\Model\RestResultEmployeeExpenseList;
use Paqtcom\Simplicate\Model\RestResultHourType;
use Paqtcom\Simplicate\Model\RestResultHourTypes;
use Psr\Http\Message\ResponseInterface;

class CostsClient extends AbstractStructuredClient
{
    public function getCostsTypes(array $queryParameters = []): RestResultHourTypes|ResponseInterface|null
    {
        return $this->client->getCostsCoststype($queryParameters);
    }

    public function getCostsType(string $id): ResponseInterface|RestResultHourType|null
    {
        return $this->client->getCostsCoststypeById($id);
    }

    public function getExpenses(array $queryParameters = []): ResponseInterface|RestResultEmployeeExpenseList|null
    {
        return $this->client->getCostsExpense($queryParameters);
    }

    public function getExpense(string $id): RestResultEmployeeExpense|ResponseInterface|null
    {
        return $this->client->getCostsExpenseById($id);
    }
}
