<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class SubmissionStatus extends AbstractModel
{
    /**
     * @var string
     */
    protected $employeeId;
    /**
     * Y-m-d, eg. 2020-01-01
     *
     * @var string
     */
    protected $date;
    /**
     * @var string
     */
    protected $status;

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
     * Y-m-d, eg. 2020-01-01
     *
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * Y-m-d, eg. 2020-01-01
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

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }
}
