<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class CurrentTaskEmployee extends AbstractModel
{
    /**
     * @var string
     */
    protected $employeeId;

    /**
     * @return string
     */
    public function getEmployeeId(): string
    {
        return $this->employeeId;
    }

    /**
     * @param string $employeeId
     *
     * @return self
     */
    public function setEmployeeId(string $employeeId): self
    {
        $this->initialized['employeeId'] = true;
        $this->employeeId = $employeeId;

        return $this;
    }
}
