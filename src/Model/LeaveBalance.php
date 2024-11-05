<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class LeaveBalance
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
     * @var GetEmployeeSimple
     */
    protected $employee;
    /**
     * @var float
     */
    protected $balance;
    /**
     * @var string
     */
    protected $firstChange;
    /**
     * @var float
     */
    protected $lastChange;
    /**
     * @var int
     */
    protected $year;
    /**
     * @var HrmGetLeaveType
     */
    protected $leavetype;

    /**
     * @return GetEmployeeSimple
     */
    public function getEmployee(): GetEmployeeSimple
    {
        return $this->employee;
    }

    /**
     * @param GetEmployeeSimple $employee
     *
     * @return self
     */
    public function setEmployee(GetEmployeeSimple $employee): self
    {
        $this->initialized['employee'] = true;
        $this->employee = $employee;

        return $this;
    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @param float $balance
     *
     * @return self
     */
    public function setBalance(float $balance): self
    {
        $this->initialized['balance'] = true;
        $this->balance = $balance;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstChange(): string
    {
        return $this->firstChange;
    }

    /**
     * @param string $firstChange
     *
     * @return self
     */
    public function setFirstChange(string $firstChange): self
    {
        $this->initialized['firstChange'] = true;
        $this->firstChange = $firstChange;

        return $this;
    }

    /**
     * @return float
     */
    public function getLastChange(): float
    {
        return $this->lastChange;
    }

    /**
     * @param float $lastChange
     *
     * @return self
     */
    public function setLastChange(float $lastChange): self
    {
        $this->initialized['lastChange'] = true;
        $this->lastChange = $lastChange;

        return $this;
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @param int $year
     *
     * @return self
     */
    public function setYear(int $year): self
    {
        $this->initialized['year'] = true;
        $this->year = $year;

        return $this;
    }

    /**
     * @return HrmGetLeaveType
     */
    public function getLeavetype(): HrmGetLeaveType
    {
        return $this->leavetype;
    }

    /**
     * @param HrmGetLeaveType $leavetype
     *
     * @return self
     */
    public function setLeavetype(HrmGetLeaveType $leavetype): self
    {
        $this->initialized['leavetype'] = true;
        $this->leavetype = $leavetype;

        return $this;
    }
}
