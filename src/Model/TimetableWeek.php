<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class TimetableWeek
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
     * @var TimetableWeekDay
     */
    protected $day1;
    /**
     *
     *
     * @var TimetableWeekDay
     */
    protected $day2;
    /**
     *
     *
     * @var TimetableWeekDay
     */
    protected $day3;
    /**
     *
     *
     * @var TimetableWeekDay
     */
    protected $day4;
    /**
     *
     *
     * @var TimetableWeekDay
     */
    protected $day5;
    /**
     *
     *
     * @var TimetableWeekDay
     */
    protected $day6;
    /**
     *
     *
     * @var TimetableWeekDay
     */
    protected $day7;

    /**
     *
     *
     * @return TimetableWeekDay
     */
    public function getDay1(): TimetableWeekDay
    {
        return $this->day1;
    }

    /**
     *
     *
     * @param TimetableWeekDay $day1
     *
     * @return self
     */
    public function setDay1(TimetableWeekDay $day1): self
    {
        $this->initialized['day1'] = true;
        $this->day1 = $day1;

        return $this;
    }

    /**
     *
     *
     * @return TimetableWeekDay
     */
    public function getDay2(): TimetableWeekDay
    {
        return $this->day2;
    }

    /**
     *
     *
     * @param TimetableWeekDay $day2
     *
     * @return self
     */
    public function setDay2(TimetableWeekDay $day2): self
    {
        $this->initialized['day2'] = true;
        $this->day2 = $day2;

        return $this;
    }

    /**
     *
     *
     * @return TimetableWeekDay
     */
    public function getDay3(): TimetableWeekDay
    {
        return $this->day3;
    }

    /**
     *
     *
     * @param TimetableWeekDay $day3
     *
     * @return self
     */
    public function setDay3(TimetableWeekDay $day3): self
    {
        $this->initialized['day3'] = true;
        $this->day3 = $day3;

        return $this;
    }

    /**
     *
     *
     * @return TimetableWeekDay
     */
    public function getDay4(): TimetableWeekDay
    {
        return $this->day4;
    }

    /**
     *
     *
     * @param TimetableWeekDay $day4
     *
     * @return self
     */
    public function setDay4(TimetableWeekDay $day4): self
    {
        $this->initialized['day4'] = true;
        $this->day4 = $day4;

        return $this;
    }

    /**
     *
     *
     * @return TimetableWeekDay
     */
    public function getDay5(): TimetableWeekDay
    {
        return $this->day5;
    }

    /**
     *
     *
     * @param TimetableWeekDay $day5
     *
     * @return self
     */
    public function setDay5(TimetableWeekDay $day5): self
    {
        $this->initialized['day5'] = true;
        $this->day5 = $day5;

        return $this;
    }

    /**
     *
     *
     * @return TimetableWeekDay
     */
    public function getDay6(): TimetableWeekDay
    {
        return $this->day6;
    }

    /**
     *
     *
     * @param TimetableWeekDay $day6
     *
     * @return self
     */
    public function setDay6(TimetableWeekDay $day6): self
    {
        $this->initialized['day6'] = true;
        $this->day6 = $day6;

        return $this;
    }

    /**
     *
     *
     * @return TimetableWeekDay
     */
    public function getDay7(): TimetableWeekDay
    {
        return $this->day7;
    }

    /**
     *
     *
     * @param TimetableWeekDay $day7
     *
     * @return self
     */
    public function setDay7(TimetableWeekDay $day7): self
    {
        $this->initialized['day7'] = true;
        $this->day7 = $day7;

        return $this;
    }
}
