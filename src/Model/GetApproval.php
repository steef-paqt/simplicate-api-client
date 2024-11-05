<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class GetApproval
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
     *
     *
     * @var string
     */
    protected $id;
    /**
     *
     *
     * @var GetEmployeeSimple
     */
    protected $employee;
    /**
     *
     *
     * @var GetApprovalStatus
     */
    protected $approvalstatus;
    /**
     *
     *
     * @var string
     */
    protected $date;

    /**
     *
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     *
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     *
     *
     * @return GetEmployeeSimple
     */
    public function getEmployee(): GetEmployeeSimple
    {
        return $this->employee;
    }

    /**
     *
     *
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
     *
     *
     * @return GetApprovalStatus
     */
    public function getApprovalstatus(): GetApprovalStatus
    {
        return $this->approvalstatus;
    }

    /**
     *
     *
     * @param GetApprovalStatus $approvalstatus
     *
     * @return self
     */
    public function setApprovalstatus(GetApprovalStatus $approvalstatus): self
    {
        $this->initialized['approvalstatus'] = true;
        $this->approvalstatus = $approvalstatus;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     *
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }
}
