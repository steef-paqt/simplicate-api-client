<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class PostTimer extends AbstractModel
{
    /**
     * See /hrm/employee
     *
     * @var string
     */
    protected $employeeId;
    /**
     * See /projects/project
     *
     * @var string
     */
    protected $projectId;
    /**
     * See /projects/projectservice
     *
     * @var string
     */
    protected $projectserviceId;
    /**
     * See /hours/hourstype
     *
     * @var string
     */
    protected $hourstypeId;
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
     * See /hrm/employee
     *
     * @return string
     */
    public function getEmployeeId(): string
    {
        return $this->employeeId;
    }

    /**
     * See /hrm/employee
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
     * See /projects/project
     *
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     * See /projects/project
     *
     * @param string $projectId
     *
     * @return self
     */
    public function setProjectId(string $projectId): self
    {
        $this->initialized['projectId'] = true;
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * See /projects/projectservice
     *
     * @return string
     */
    public function getProjectserviceId(): string
    {
        return $this->projectserviceId;
    }

    /**
     * See /projects/projectservice
     *
     * @param string $projectserviceId
     *
     * @return self
     */
    public function setProjectserviceId(string $projectserviceId): self
    {
        $this->initialized['projectserviceId'] = true;
        $this->projectserviceId = $projectserviceId;

        return $this;
    }

    /**
     * See /hours/hourstype
     *
     * @return string
     */
    public function getHourstypeId(): string
    {
        return $this->hourstypeId;
    }

    /**
     * See /hours/hourstype
     *
     * @param string $hourstypeId
     *
     * @return self
     */
    public function setHourstypeId(string $hourstypeId): self
    {
        $this->initialized['hourstypeId'] = true;
        $this->hourstypeId = $hourstypeId;

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
