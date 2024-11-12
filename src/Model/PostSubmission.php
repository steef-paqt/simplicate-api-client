<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class PostSubmission extends AbstractModel
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
    protected $startDate;
    /**
     * Y-m-d, eg. 2020-01-01
     *
     * @var string
     */
    protected $endDate;

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
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * Y-m-d, eg. 2020-01-01
     *
     * @param string $startDate
     *
     * @return self
     */
    public function setStartDate(string $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Y-m-d, eg. 2020-01-01
     *
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     * Y-m-d, eg. 2020-01-01
     *
     * @param string $endDate
     *
     * @return self
     */
    public function setEndDate(string $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;

        return $this;
    }
}
