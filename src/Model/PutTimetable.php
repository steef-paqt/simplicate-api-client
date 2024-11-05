<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class PutTimetable
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
    protected $employeeId;
    /**
     *
     *
     * @var string
     */
    protected $startDate;
    /**
     *
     *
     * @var bool
     */
    protected $hasOddWeeks;
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
     *
     *
     * @return string
     */
    public function getEmployeeId(): string
    {
        return $this->employeeId;
    }

    /**
     *
     *
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
     * @return bool
     */
    public function getHasOddWeeks(): bool
    {
        return $this->hasOddWeeks;
    }

    /**
     *
     *
     * @param bool $hasOddWeeks
     *
     * @return self
     */
    public function setHasOddWeeks(bool $hasOddWeeks): self
    {
        $this->initialized['hasOddWeeks'] = true;
        $this->hasOddWeeks = $hasOddWeeks;

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
