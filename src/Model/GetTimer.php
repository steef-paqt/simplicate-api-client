<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class GetTimer extends AbstractModel
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var int
     */
    protected $secondsSpent;
    /**
     * @var int
     */
    protected $minSecondsStep;
    /**
     * @var GetEmployeeSimple
     */
    protected $employee;
    /**
     * @var GetProjectSimple
     */
    protected $project;
    /**
     * @var GetProjectServiceSimple
     */
    protected $projectservice;
    /**
     * @var GetHoursType
     */
    protected $hourstype;
    /**
     * @var GetHoursSimple
     */
    protected $relatedHours;
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
    protected $state;
    /**
     * @var string
     */
    protected $description;
    /**
     * JSON
     *
     * @var string
     */
    protected $metadata;

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
     * @return int
     */
    public function getSecondsSpent(): int
    {
        return $this->secondsSpent;
    }

    /**
     * @param int $secondsSpent
     *
     * @return self
     */
    public function setSecondsSpent(int $secondsSpent): self
    {
        $this->initialized['secondsSpent'] = true;
        $this->secondsSpent = $secondsSpent;

        return $this;
    }

    /**
     * @return int
     */
    public function getMinSecondsStep(): int
    {
        return $this->minSecondsStep;
    }

    /**
     * @param int $minSecondsStep
     *
     * @return self
     */
    public function setMinSecondsStep(int $minSecondsStep): self
    {
        $this->initialized['minSecondsStep'] = true;
        $this->minSecondsStep = $minSecondsStep;

        return $this;
    }

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
     * @return GetHoursType
     */
    public function getHourstype(): GetHoursType
    {
        return $this->hourstype;
    }

    /**
     * @param GetHoursType $hourstype
     *
     * @return self
     */
    public function setHourstype(GetHoursType $hourstype): self
    {
        $this->initialized['hourstype'] = true;
        $this->hourstype = $hourstype;

        return $this;
    }

    /**
     * @return GetHoursSimple
     */
    public function getRelatedHours(): GetHoursSimple
    {
        return $this->relatedHours;
    }

    /**
     * @param GetHoursSimple $relatedHours
     *
     * @return self
     */
    public function setRelatedHours(GetHoursSimple $relatedHours): self
    {
        $this->initialized['relatedHours'] = true;
        $this->relatedHours = $relatedHours;

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
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;

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
     * JSON
     *
     * @return string
     */
    public function getMetadata(): string
    {
        return $this->metadata;
    }

    /**
     * JSON
     *
     * @param string $metadata
     *
     * @return self
     */
    public function setMetadata(string $metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;

        return $this;
    }
}
