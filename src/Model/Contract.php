<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class Contract
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
    protected $id;
    /**
     * @var string
     */
    protected $startDate;
    /**
     * @var bool
     */
    protected $endDate;
    /**
     * @var float
     */
    protected $salaryFulltime;
    /**
     * @var float
     */
    protected $parttimePercentage;
    /**
     * @var float
     */
    protected $daysOff;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
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
     * @return bool
     */
    public function getEndDate(): bool
    {
        return $this->endDate;
    }

    /**
     * @param bool $endDate
     *
     * @return self
     */
    public function setEndDate(bool $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return float
     */
    public function getSalaryFulltime(): float
    {
        return $this->salaryFulltime;
    }

    /**
     * @param float $salaryFulltime
     *
     * @return self
     */
    public function setSalaryFulltime(float $salaryFulltime): self
    {
        $this->initialized['salaryFulltime'] = true;
        $this->salaryFulltime = $salaryFulltime;

        return $this;
    }

    /**
     * @return float
     */
    public function getParttimePercentage(): float
    {
        return $this->parttimePercentage;
    }

    /**
     * @param float $parttimePercentage
     *
     * @return self
     */
    public function setParttimePercentage(float $parttimePercentage): self
    {
        $this->initialized['parttimePercentage'] = true;
        $this->parttimePercentage = $parttimePercentage;

        return $this;
    }

    /**
     * @return float
     */
    public function getDaysOff(): float
    {
        return $this->daysOff;
    }

    /**
     * @param float $daysOff
     *
     * @return self
     */
    public function setDaysOff(float $daysOff): self
    {
        $this->initialized['daysOff'] = true;
        $this->daysOff = $daysOff;

        return $this;
    }
}
