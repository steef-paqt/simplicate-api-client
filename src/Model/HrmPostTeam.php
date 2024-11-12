<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class HrmPostTeam extends AbstractModel
{
    /**
     * @var mixed[]
     */
    protected $employeeIds;
    /**
     * @var string
     */
    protected $name;

    /**
     * @return mixed[]
     */
    public function getEmployeeIds(): array
    {
        return $this->employeeIds;
    }

    /**
     * @param mixed[] $employeeIds
     *
     * @return self
     */
    public function setEmployeeIds(array $employeeIds): self
    {
        $this->initialized['employeeIds'] = true;
        $this->employeeIds = $employeeIds;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }
}
