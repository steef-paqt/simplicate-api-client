<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class HrmPostTeam
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
