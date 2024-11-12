<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class TimetableWeekDay extends AbstractModel
{
    /**
     * @var float
     */
    protected $startTime;
    /**
     * @var float
     */
    protected $endTime;
    /**
     * @var float
     */
    protected $hours;

    /**
     * @return float
     */
    public function getStartTime(): float
    {
        return $this->startTime;
    }

    /**
     * @param float $startTime
     *
     * @return self
     */
    public function setStartTime(float $startTime): self
    {
        $this->initialized['startTime'] = true;
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * @return float
     */
    public function getEndTime(): float
    {
        return $this->endTime;
    }

    /**
     * @param float $endTime
     *
     * @return self
     */
    public function setEndTime(float $endTime): self
    {
        $this->initialized['endTime'] = true;
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * @return float
     */
    public function getHours(): float
    {
        return $this->hours;
    }

    /**
     * @param float $hours
     *
     * @return self
     */
    public function setHours(float $hours): self
    {
        $this->initialized['hours'] = true;
        $this->hours = $hours;

        return $this;
    }
}
