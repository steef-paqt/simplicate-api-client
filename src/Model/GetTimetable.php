<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class GetTimetable
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
     * employee_id, See /hrm/employee
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
     * @var string
     */
    protected $createdAt;
    /**
     *
     *
     * @var string
     */
    protected $updatedAt;
    /**
     *
     *
     * @var float
     */
    protected $hourlySalesTariff;
    /**
     *
     *
     * @var float
     */
    protected $hourlyCostTariff;
    /**
     *
     *
     * @var TimetableWeek
     */
    protected $evenWeek;
    /**
     *
     *
     * @var TimetableWeek
     */
    protected $oddWeek;
    /**
     *
     *
     * @var string
     */
    protected $startDate;
    /**
     *
     *
     * @var string
     */
    protected $endDate;
    /**
     *
     *
     * @var int
     */
    protected $productivityTarget;
    /**
     *
     *
     * @var bool
     */
    protected $shouldWriteHours;

    /**
     * employee_id, See /hrm/employee
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * employee_id, See /hrm/employee
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
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     *
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    /**
     *
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     *
     *
     * @return float
     */
    public function getHourlySalesTariff(): float
    {
        return $this->hourlySalesTariff;
    }

    /**
     *
     *
     * @param float $hourlySalesTariff
     *
     * @return self
     */
    public function setHourlySalesTariff(float $hourlySalesTariff): self
    {
        $this->initialized['hourlySalesTariff'] = true;
        $this->hourlySalesTariff = $hourlySalesTariff;

        return $this;
    }

    /**
     *
     *
     * @return float
     */
    public function getHourlyCostTariff(): float
    {
        return $this->hourlyCostTariff;
    }

    /**
     *
     *
     * @param float $hourlyCostTariff
     *
     * @return self
     */
    public function setHourlyCostTariff(float $hourlyCostTariff): self
    {
        $this->initialized['hourlyCostTariff'] = true;
        $this->hourlyCostTariff = $hourlyCostTariff;

        return $this;
    }

    /**
     *
     *
     * @return TimetableWeek
     */
    public function getEvenWeek(): TimetableWeek
    {
        return $this->evenWeek;
    }

    /**
     *
     *
     * @param TimetableWeek $evenWeek
     *
     * @return self
     */
    public function setEvenWeek(TimetableWeek $evenWeek): self
    {
        $this->initialized['evenWeek'] = true;
        $this->evenWeek = $evenWeek;

        return $this;
    }

    /**
     *
     *
     * @return TimetableWeek
     */
    public function getOddWeek(): TimetableWeek
    {
        return $this->oddWeek;
    }

    /**
     *
     *
     * @param TimetableWeek $oddWeek
     *
     * @return self
     */
    public function setOddWeek(TimetableWeek $oddWeek): self
    {
        $this->initialized['oddWeek'] = true;
        $this->oddWeek = $oddWeek;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     *
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
     *
     *
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     *
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
     *
     *
     * @return int
     */
    public function getProductivityTarget(): int
    {
        return $this->productivityTarget;
    }

    /**
     *
     *
     * @param int $productivityTarget
     *
     * @return self
     */
    public function setProductivityTarget(int $productivityTarget): self
    {
        $this->initialized['productivityTarget'] = true;
        $this->productivityTarget = $productivityTarget;

        return $this;
    }

    /**
     *
     *
     * @return bool
     */
    public function getShouldWriteHours(): bool
    {
        return $this->shouldWriteHours;
    }

    /**
     *
     *
     * @param bool $shouldWriteHours
     *
     * @return self
     */
    public function setShouldWriteHours(bool $shouldWriteHours): self
    {
        $this->initialized['shouldWriteHours'] = true;
        $this->shouldWriteHours = $shouldWriteHours;

        return $this;
    }
}
