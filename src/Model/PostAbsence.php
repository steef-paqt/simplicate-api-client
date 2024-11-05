<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class PostAbsence
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
    protected $startDate;
    /**
     * @var string
     */
    protected $endDate;
    /**
     * @var int
     */
    protected $year;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $employeeId;
    /**
     * @var string
     */
    protected $absenceTypeId;
    /**
     * @var bool
     */
    protected $isTimeDefined;

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
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @param int $year
     *
     * @return self
     */
    public function setYear(int $year): self
    {
        $this->initialized['year'] = true;
        $this->year = $year;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

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
    public function getAbsenceTypeId(): string
    {
        return $this->absenceTypeId;
    }

    /**
     * @param string $absenceTypeId
     *
     * @return self
     */
    public function setAbsenceTypeId(string $absenceTypeId): self
    {
        $this->initialized['absenceTypeId'] = true;
        $this->absenceTypeId = $absenceTypeId;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsTimeDefined(): bool
    {
        return $this->isTimeDefined;
    }

    /**
     * @param bool $isTimeDefined
     *
     * @return self
     */
    public function setIsTimeDefined(bool $isTimeDefined): self
    {
        $this->initialized['isTimeDefined'] = true;
        $this->isTimeDefined = $isTimeDefined;

        return $this;
    }
}
