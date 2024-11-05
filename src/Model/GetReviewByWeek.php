<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class GetReviewByWeek
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
     * @var string
     */
    protected $employeeName;
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
     * @var string
     */
    protected $statusId;
    /**
     * @var string
     */
    protected $statusCategory;
    /**
     * @var string
     */
    protected $statusLabel;

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
     * @return string
     */
    public function getEmployeeName(): string
    {
        return $this->employeeName;
    }

    /**
     * @param string $employeeName
     *
     * @return self
     */
    public function setEmployeeName(string $employeeName): self
    {
        $this->initialized['employeeName'] = true;
        $this->employeeName = $employeeName;

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

    /**
     * @return string
     */
    public function getStatusId(): string
    {
        return $this->statusId;
    }

    /**
     * @param string $statusId
     *
     * @return self
     */
    public function setStatusId(string $statusId): self
    {
        $this->initialized['statusId'] = true;
        $this->statusId = $statusId;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusCategory(): string
    {
        return $this->statusCategory;
    }

    /**
     * @param string $statusCategory
     *
     * @return self
     */
    public function setStatusCategory(string $statusCategory): self
    {
        $this->initialized['statusCategory'] = true;
        $this->statusCategory = $statusCategory;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusLabel(): string
    {
        return $this->statusLabel;
    }

    /**
     * @param string $statusLabel
     *
     * @return self
     */
    public function setStatusLabel(string $statusLabel): self
    {
        $this->initialized['statusLabel'] = true;
        $this->statusLabel = $statusLabel;

        return $this;
    }
}
