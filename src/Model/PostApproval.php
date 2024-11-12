<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class PostApproval extends AbstractModel
{
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
