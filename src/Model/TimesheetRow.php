<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class TimesheetRow
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
    protected $employeeId;
    /**
     * @var string
     */
    protected $startDate;
    /**
     * @var string
     */
    protected $endDate;
    /**
     * @var string
     */
    protected $projectId;
    /**
     * @var string
     */
    protected $projectServiceId;
    /**
     * @var string
     */
    protected $itemtypeId;
    /**
     * @var string
     */
    protected $type;

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
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
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
     * @return string
     */
    public function getProjectServiceId(): string
    {
        return $this->projectServiceId;
    }

    /**
     * @param string $projectServiceId
     *
     * @return self
     */
    public function setProjectServiceId(string $projectServiceId): self
    {
        $this->initialized['projectServiceId'] = true;
        $this->projectServiceId = $projectServiceId;

        return $this;
    }

    /**
     * @return string
     */
    public function getItemtypeId(): string
    {
        return $this->itemtypeId;
    }

    /**
     * @param string $itemtypeId
     *
     * @return self
     */
    public function setItemtypeId(string $itemtypeId): self
    {
        $this->initialized['itemtypeId'] = true;
        $this->itemtypeId = $itemtypeId;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
