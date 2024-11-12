<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class GetAssignment extends AbstractModel
{
    /**
     * @var string
     */
    protected $id = 'assignment:abc';
    /**
     * @var string
     */
    protected $startDate = '2032-01-01';
    /**
     * @var string
     */
    protected $endDate = '2032-12-31';
    /**
     * @var float
     */
    protected $hoursTotal;
    /**
     * @var float
     */
    protected $hours;
    /**
     * @var string
     */
    protected $hoursType = 'total';
    /**
     * @var int[]
     */
    protected $spread;
    /**
     * @var GetAssignmentStatus
     */
    protected $status;
    /**
     * @var GetProjectSimple
     */
    protected $project;
    /**
     * @var GetProjectServiceSimple
     */
    protected $projectservice;
    /**
     * @var GetProjectServiceHoursType
     */
    protected $projecthourstype;
    /**
     * @var GetEmployeeSimple[]
     */
    protected $employees;
    /**
     * @var string
     */
    protected $spentAmount;
    /**
     * @var bool
     */
    protected $isPlanned;
    /**
     * @var string
     */
    protected $name = 'Website Design Assignment';
    /**
     * @var bool
     */
    protected $useSpread;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $updatedAt;

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
     * @return float
     */
    public function getHoursTotal(): float
    {
        return $this->hoursTotal;
    }

    /**
     * @param float $hoursTotal
     *
     * @return self
     */
    public function setHoursTotal(float $hoursTotal): self
    {
        $this->initialized['hoursTotal'] = true;
        $this->hoursTotal = $hoursTotal;

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

    /**
     * @return string
     */
    public function getHoursType(): string
    {
        return $this->hoursType;
    }

    /**
     * @param string $hoursType
     *
     * @return self
     */
    public function setHoursType(string $hoursType): self
    {
        $this->initialized['hoursType'] = true;
        $this->hoursType = $hoursType;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getSpread(): array
    {
        return $this->spread;
    }

    /**
     * @param int[] $spread
     *
     * @return self
     */
    public function setSpread(array $spread): self
    {
        $this->initialized['spread'] = true;
        $this->spread = $spread;

        return $this;
    }

    /**
     * @return GetAssignmentStatus
     */
    public function getStatus(): GetAssignmentStatus
    {
        return $this->status;
    }

    /**
     * @param GetAssignmentStatus $status
     *
     * @return self
     */
    public function setStatus(GetAssignmentStatus $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * @return GetProjectSimple
     */
    public function getProject(): GetProjectSimple
    {
        return $this->project;
    }

    /**
     * @param GetProjectSimple $project
     *
     * @return self
     */
    public function setProject(GetProjectSimple $project): self
    {
        $this->initialized['project'] = true;
        $this->project = $project;

        return $this;
    }

    /**
     * @return GetProjectServiceSimple
     */
    public function getProjectservice(): GetProjectServiceSimple
    {
        return $this->projectservice;
    }

    /**
     * @param GetProjectServiceSimple $projectservice
     *
     * @return self
     */
    public function setProjectservice(GetProjectServiceSimple $projectservice): self
    {
        $this->initialized['projectservice'] = true;
        $this->projectservice = $projectservice;

        return $this;
    }

    /**
     * @return GetProjectServiceHoursType
     */
    public function getProjecthourstype(): GetProjectServiceHoursType
    {
        return $this->projecthourstype;
    }

    /**
     * @param GetProjectServiceHoursType $projecthourstype
     *
     * @return self
     */
    public function setProjecthourstype(GetProjectServiceHoursType $projecthourstype): self
    {
        $this->initialized['projecthourstype'] = true;
        $this->projecthourstype = $projecthourstype;

        return $this;
    }

    /**
     * @return GetEmployeeSimple[]
     */
    public function getEmployees(): array
    {
        return $this->employees;
    }

    /**
     * @param GetEmployeeSimple[] $employees
     *
     * @return self
     */
    public function setEmployees(array $employees): self
    {
        $this->initialized['employees'] = true;
        $this->employees = $employees;

        return $this;
    }

    /**
     * @return string
     */
    public function getSpentAmount(): string
    {
        return $this->spentAmount;
    }

    /**
     * @param string $spentAmount
     *
     * @return self
     */
    public function setSpentAmount(string $spentAmount): self
    {
        $this->initialized['spentAmount'] = true;
        $this->spentAmount = $spentAmount;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsPlanned(): bool
    {
        return $this->isPlanned;
    }

    /**
     * @param bool $isPlanned
     *
     * @return self
     */
    public function setIsPlanned(bool $isPlanned): self
    {
        $this->initialized['isPlanned'] = true;
        $this->isPlanned = $isPlanned;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * @return bool
     */
    public function getUseSpread(): bool
    {
        return $this->useSpread;
    }

    /**
     * @param bool $useSpread
     *
     * @return self
     */
    public function setUseSpread(bool $useSpread): self
    {
        $this->initialized['useSpread'] = true;
        $this->useSpread = $useSpread;

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
}
