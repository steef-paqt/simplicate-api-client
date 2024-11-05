<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class PostApproval
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
     * @var string
     */
    protected $employeeId;
    /**
     * See /hours/approvalstatus. May also be string 'null' to empty the status id
     *
     * @var string
     */
    protected $approvalstatusId;
    /**
     * @var string
     */
    protected $date;

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

    /**
     * See /hours/approvalstatus. May also be string 'null' to empty the status id
     *
     * @return string
     */
    public function getApprovalstatusId(): string
    {
        return $this->approvalstatusId;
    }

    /**
     * See /hours/approvalstatus. May also be string 'null' to empty the status id
     *
     * @param string $approvalstatusId
     *
     * @return self
     */
    public function setApprovalstatusId(string $approvalstatusId): self
    {
        $this->initialized['approvalstatusId'] = true;
        $this->approvalstatusId = $approvalstatusId;

        return $this;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
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
