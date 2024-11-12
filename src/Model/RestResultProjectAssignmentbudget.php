<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultProjectAssignmentbudget extends AbstractRestResult
{
    /**
     * @var AssignmentBudget[]
     */
    protected $data;

    /**
     * @return AssignmentBudget[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param AssignmentBudget[] $data
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
