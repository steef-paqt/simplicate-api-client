<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class GetContract
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
     * @var GetEmployee
     */
    protected $employee;
    /**
     * @var GetOrganizationSimple
     */
    protected $employer;
    /**
     * @var EmploymentType
     */
    protected $employmentType;
    /**
     * @var ContractType
     */
    protected $contractType;
    /**
     * @var string
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $updatedAt;
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
     * @return GetEmployee
     */
    public function getEmployee(): GetEmployee
    {
        return $this->employee;
    }

    /**
     * @param GetEmployee $employee
     *
     * @return self
     */
    public function setEmployee(GetEmployee $employee): self
    {
        $this->initialized['employee'] = true;
        $this->employee = $employee;

        return $this;
    }

    /**
     * @return GetOrganizationSimple
     */
    public function getEmployer(): GetOrganizationSimple
    {
        return $this->employer;
    }

    /**
     * @param GetOrganizationSimple $employer
     *
     * @return self
     */
    public function setEmployer(GetOrganizationSimple $employer): self
    {
        $this->initialized['employer'] = true;
        $this->employer = $employer;

        return $this;
    }

    /**
     * @return EmploymentType
     */
    public function getEmploymentType(): EmploymentType
    {
        return $this->employmentType;
    }

    /**
     * @param EmploymentType $employmentType
     *
     * @return self
     */
    public function setEmploymentType(EmploymentType $employmentType): self
    {
        $this->initialized['employmentType'] = true;
        $this->employmentType = $employmentType;

        return $this;
    }

    /**
     * @return ContractType
     */
    public function getContractType(): ContractType
    {
        return $this->contractType;
    }

    /**
     * @param ContractType $contractType
     *
     * @return self
     */
    public function setContractType(ContractType $contractType): self
    {
        $this->initialized['contractType'] = true;
        $this->contractType = $contractType;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
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
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    /**
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
