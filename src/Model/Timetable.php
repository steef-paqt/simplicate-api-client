<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class Timetable extends AbstractModel
{
    /**
     * @var TimetableWeek
     */
    protected $evenWeek;
    /**
     * @var TimetableWeek
     */
    protected $oddWeek;
    /**
     * @var string
     */
    protected $startDate;
    /**
     * @var string
     */
    protected $endDate;
    /**
     * @var int
     */
    protected $productivityTarget;
    /**
     * @var bool
     */
    protected $shouldWriteHours;

    /**
     * @return TimetableWeek
     */
    public function getEvenWeek(): TimetableWeek
    {
        return $this->evenWeek;
    }

    /**
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
     * @return TimetableWeek
     */
    public function getOddWeek(): TimetableWeek
    {
        return $this->oddWeek;
    }

    /**
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
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
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
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
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
     * @return int
     */
    public function getProductivityTarget(): int
    {
        return $this->productivityTarget;
    }

    /**
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
     * @return bool
     */
    public function getShouldWriteHours(): bool
    {
        return $this->shouldWriteHours;
    }

    /**
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
