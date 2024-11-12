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
use Paqtcom\Simplicate\QueryBuilder;
use Psr\Http\Message\ResponseInterface;

class CostsClient extends AbstractStructuredClient
{
    public function getCostsTypes(QueryBuilder $queryParameters = new QueryBuilder()): RestResultHourTypes|ResponseInterface|null
    {
        return $this->client->getCostsCoststype($queryParameters->toArray());
    }

    public function getCostsType(string $id): ResponseInterface|RestResultHourType|null
    {
        return $this->client->getCostsCoststypeById($id);
    }

    public function getExpenses(QueryBuilder $queryParameters = new QueryBuilder()): ResponseInterface|RestResultEmployeeExpenseList|null
    {
        return $this->client->getCostsExpense($queryParameters->toArray());
    }

    public function getExpense(string $id): RestResultEmployeeExpense|ResponseInterface|null
    {
        return $this->client->getCostsExpenseById($id);
    }
}
