<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class GetTimesheetRow
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
     * @var string
     */
    protected $id;
    /**
     *
     *
     * @var int
     */
    protected $order;
    /**
     *
     *
     * @var GetTimesheetRowProject
     */
    protected $project;
    /**
     *
     *
     * @var GetTimesheetRowProjectService
     */
    protected $projectService;
    /**
     *
     *
     * @var GetTimesheetRowItemtype
     */
    protected $itemtype;
    /**
     *
     *
     * @var GetTimesheetRowPersonRelation
     */
    protected $person;
    /**
     *
     *
     * @var GetTimesheetRowOrganizationRelation
     */
    protected $organization;
    /**
     *
     *
     * @var string
     */
    protected $employeeId;
    /**
     *
     *
     * @var string
     */
    protected $startDate;
    /**
     *
     *
     * @var string
     */
    protected $endDate;
    /**
     *
     *
     * @var string
     */
    protected $projectId;
    /**
     *
     *
     * @var string
     */
    protected $projectServiceId;
    /**
     *
     *
     * @var string
     */
    protected $itemtypeId;
    /**
     *
     *
     * @var string
     */
    protected $type;

    /**
     *
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     *
     *
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
     *
     *
     * @return int
     */
    public function getOrder(): int
    {
        return $this->order;
    }

    /**
     *
     *
     * @param int $order
     *
     * @return self
     */
    public function setOrder(int $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;

        return $this;
    }

    /**
     *
     *
     * @return GetTimesheetRowProject
     */
    public function getProject(): GetTimesheetRowProject
    {
        return $this->project;
    }

    /**
     *
     *
     * @param GetTimesheetRowProject $project
     *
     * @return self
     */
    public function setProject(GetTimesheetRowProject $project): self
    {
        $this->initialized['project'] = true;
        $this->project = $project;

        return $this;
    }

    /**
     *
     *
     * @return GetTimesheetRowProjectService
     */
    public function getProjectService(): GetTimesheetRowProjectService
    {
        return $this->projectService;
    }

    /**
     *
     *
     * @param GetTimesheetRowProjectService $projectService
     *
     * @return self
     */
    public function setProjectService(GetTimesheetRowProjectService $projectService): self
    {
        $this->initialized['projectService'] = true;
        $this->projectService = $projectService;

        return $this;
    }

    /**
     *
     *
     * @return GetTimesheetRowItemtype
     */
    public function getItemtype(): GetTimesheetRowItemtype
    {
        return $this->itemtype;
    }

    /**
     *
     *
     * @param GetTimesheetRowItemtype $itemtype
     *
     * @return self
     */
    public function setItemtype(GetTimesheetRowItemtype $itemtype): self
    {
        $this->initialized['itemtype'] = true;
        $this->itemtype = $itemtype;

        return $this;
    }

    /**
     *
     *
     * @return GetTimesheetRowPersonRelation
     */
    public function getPerson(): GetTimesheetRowPersonRelation
    {
        return $this->person;
    }

    /**
     *
     *
     * @param GetTimesheetRowPersonRelation $person
     *
     * @return self
     */
    public function setPerson(GetTimesheetRowPersonRelation $person): self
    {
        $this->initialized['person'] = true;
        $this->person = $person;

        return $this;
    }

    /**
     *
     *
     * @return GetTimesheetRowOrganizationRelation
     */
    public function getOrganization(): GetTimesheetRowOrganizationRelation
    {
        return $this->organization;
    }

    /**
     *
     *
     * @param GetTimesheetRowOrganizationRelation $organization
     *
     * @return self
     */
    public function setOrganization(GetTimesheetRowOrganizationRelation $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getEmployeeId(): string
    {
        return $this->employeeId;
    }

    /**
     *
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
     *
     *
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     *
     *
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
     *
     *
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     *
     *
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
     *
     *
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     *
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
     *
     *
     * @return string
     */
    public function getProjectServiceId(): string
    {
        return $this->projectServiceId;
    }

    /**
     *
     *
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
     *
     *
     * @return string
     */
    public function getItemtypeId(): string
    {
        return $this->itemtypeId;
    }

    /**
     *
     *
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
     *
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     *
     *
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
