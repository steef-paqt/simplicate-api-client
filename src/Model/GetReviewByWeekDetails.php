<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class GetReviewByWeekDetails
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
     * @var float
     */
    protected $rasterHours;
    /**
     * @var float
     */
    protected $writtenHours;
    /**
     * @var float
     */
    protected $overtime;
    /**
     * @var float
     */
    protected $leave;
    /**
     * @var float
     */
    protected $absence;
    /**
     * @var float
     */
    protected $mileage;
    /**
     * @var float
     */
    protected $costs;
    /**
     * @var float
     */
    protected $declarability;
    /**
     * @var float
     */
    protected $productivity;
    /**
     * @var float
     */
    protected $productivityTarget;
    /**
     * @var float
     */
    protected $productivityValue;
    /**
     * @var float
     */
    protected $productivityValueTarget;

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

    /**
     * @return float
     */
    public function getRasterHours(): float
    {
        return $this->rasterHours;
    }

    /**
     * @param float $rasterHours
     *
     * @return self
     */
    public function setRasterHours(float $rasterHours): self
    {
        $this->initialized['rasterHours'] = true;
        $this->rasterHours = $rasterHours;

        return $this;
    }

    /**
     * @return float
     */
    public function getWrittenHours(): float
    {
        return $this->writtenHours;
    }

    /**
     * @param float $writtenHours
     *
     * @return self
     */
    public function setWrittenHours(float $writtenHours): self
    {
        $this->initialized['writtenHours'] = true;
        $this->writtenHours = $writtenHours;

        return $this;
    }

    /**
     * @return float
     */
    public function getOvertime(): float
    {
        return $this->overtime;
    }

    /**
     * @param float $overtime
     *
     * @return self
     */
    public function setOvertime(float $overtime): self
    {
        $this->initialized['overtime'] = true;
        $this->overtime = $overtime;

        return $this;
    }

    /**
     * @return float
     */
    public function getLeave(): float
    {
        return $this->leave;
    }

    /**
     * @param float $leave
     *
     * @return self
     */
    public function setLeave(float $leave): self
    {
        $this->initialized['leave'] = true;
        $this->leave = $leave;

        return $this;
    }

    /**
     * @return float
     */
    public function getAbsence(): float
    {
        return $this->absence;
    }

    /**
     * @param float $absence
     *
     * @return self
     */
    public function setAbsence(float $absence): self
    {
        $this->initialized['absence'] = true;
        $this->absence = $absence;

        return $this;
    }

    /**
     * @return float
     */
    public function getMileage(): float
    {
        return $this->mileage;
    }

    /**
     * @param float $mileage
     *
     * @return self
     */
    public function setMileage(float $mileage): self
    {
        $this->initialized['mileage'] = true;
        $this->mileage = $mileage;

        return $this;
    }

    /**
     * @return float
     */
    public function getCosts(): float
    {
        return $this->costs;
    }

    /**
     * @param float $costs
     *
     * @return self
     */
    public function setCosts(float $costs): self
    {
        $this->initialized['costs'] = true;
        $this->costs = $costs;

        return $this;
    }

    /**
     * @return float
     */
    public function getDeclarability(): float
    {
        return $this->declarability;
    }

    /**
     * @param float $declarability
     *
     * @return self
     */
    public function setDeclarability(float $declarability): self
    {
        $this->initialized['declarability'] = true;
        $this->declarability = $declarability;

        return $this;
    }

    /**
     * @return float
     */
    public function getProductivity(): float
    {
        return $this->productivity;
    }

    /**
     * @param float $productivity
     *
     * @return self
     */
    public function setProductivity(float $productivity): self
    {
        $this->initialized['productivity'] = true;
        $this->productivity = $productivity;

        return $this;
    }

    /**
     * @return float
     */
    public function getProductivityTarget(): float
    {
        return $this->productivityTarget;
    }

    /**
     * @param float $productivityTarget
     *
     * @return self
     */
    public function setProductivityTarget(float $productivityTarget): self
    {
        $this->initialized['productivityTarget'] = true;
        $this->productivityTarget = $productivityTarget;

        return $this;
    }

    /**
     * @return float
     */
    public function getProductivityValue(): float
    {
        return $this->productivityValue;
    }

    /**
     * @param float $productivityValue
     *
     * @return self
     */
    public function setProductivityValue(float $productivityValue): self
    {
        $this->initialized['productivityValue'] = true;
        $this->productivityValue = $productivityValue;

        return $this;
    }

    /**
     * @return float
     */
    public function getProductivityValueTarget(): float
    {
        return $this->productivityValueTarget;
    }

    /**
     * @param float $productivityValueTarget
     *
     * @return self
     */
    public function setProductivityValueTarget(float $productivityValueTarget): self
    {
        $this->initialized['productivityValueTarget'] = true;
        $this->productivityValueTarget = $productivityValueTarget;

        return $this;
    }
}
