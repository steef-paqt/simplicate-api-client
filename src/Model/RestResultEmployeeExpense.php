<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultEmployeeExpense extends AbstractRestResult
{
    /**
     * @var Expense
     */
    protected $data;

    /**
     * @return Expense
     */
    public function getData(): Expense
    {
        return $this->data;
    }

    /**
     * @param Expense $data
     *
     * @return self
     */
    public function setData(Expense $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
