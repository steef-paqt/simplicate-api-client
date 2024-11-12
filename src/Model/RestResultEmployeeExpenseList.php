<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultEmployeeExpenseList extends AbstractRestResult
{
    /**
     * @var Expense[]
     */
    protected $data;

    /**
     * @return Expense[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Expense[] $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
