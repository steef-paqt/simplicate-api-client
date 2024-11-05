<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class AssignmentBudgetInfo
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
    protected $id = 'assignmentbudget:abc';
    /**
     * @var AssignmentBudgetInfoFuturePast
     */
    protected $assignmentsPlanned;
    /**
     * @var string
     */
    protected $assignmentsUnplanned = 'PT28H45M';
    /**
     * @var AssignmentBudgetInfoFuturePast
     */
    protected $assignmentsHoursWritten;
    /**
     * @var AssignmentBudgetInfoFuturePast
     */
    protected $itemtypesHoursWritten;
    /**
     * @var AssignmentBudgetInfoFuturePast
     */
    protected $assignmentsHoursCorrections;
    /**
     * @var AssignmentBudgetInfoFuturePast
     */
    protected $itemtypesHoursCorrections;

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
     * @return AssignmentBudgetInfoFuturePast
     */
    public function getAssignmentsPlanned(): AssignmentBudgetInfoFuturePast
    {
        return $this->assignmentsPlanned;
    }

    /**
     * @param AssignmentBudgetInfoFuturePast $assignmentsPlanned
     *
     * @return self
     */
    public function setAssignmentsPlanned(AssignmentBudgetInfoFuturePast $assignmentsPlanned): self
    {
        $this->initialized['assignmentsPlanned'] = true;
        $this->assignmentsPlanned = $assignmentsPlanned;

        return $this;
    }

    /**
     * @return string
     */
    public function getAssignmentsUnplanned(): string
    {
        return $this->assignmentsUnplanned;
    }

    /**
     * @param string $assignmentsUnplanned
     *
     * @return self
     */
    public function setAssignmentsUnplanned(string $assignmentsUnplanned): self
    {
        $this->initialized['assignmentsUnplanned'] = true;
        $this->assignmentsUnplanned = $assignmentsUnplanned;

        return $this;
    }

    /**
     * @return AssignmentBudgetInfoFuturePast
     */
    public function getAssignmentsHoursWritten(): AssignmentBudgetInfoFuturePast
    {
        return $this->assignmentsHoursWritten;
    }

    /**
     * @param AssignmentBudgetInfoFuturePast $assignmentsHoursWritten
     *
     * @return self
     */
    public function setAssignmentsHoursWritten(AssignmentBudgetInfoFuturePast $assignmentsHoursWritten): self
    {
        $this->initialized['assignmentsHoursWritten'] = true;
        $this->assignmentsHoursWritten = $assignmentsHoursWritten;

        return $this;
    }

    /**
     * @return AssignmentBudgetInfoFuturePast
     */
    public function getItemtypesHoursWritten(): AssignmentBudgetInfoFuturePast
    {
        return $this->itemtypesHoursWritten;
    }

    /**
     * @param AssignmentBudgetInfoFuturePast $itemtypesHoursWritten
     *
     * @return self
     */
    public function setItemtypesHoursWritten(AssignmentBudgetInfoFuturePast $itemtypesHoursWritten): self
    {
        $this->initialized['itemtypesHoursWritten'] = true;
        $this->itemtypesHoursWritten = $itemtypesHoursWritten;

        return $this;
    }

    /**
     * @return AssignmentBudgetInfoFuturePast
     */
    public function getAssignmentsHoursCorrections(): AssignmentBudgetInfoFuturePast
    {
        return $this->assignmentsHoursCorrections;
    }

    /**
     * @param AssignmentBudgetInfoFuturePast $assignmentsHoursCorrections
     *
     * @return self
     */
    public function setAssignmentsHoursCorrections(AssignmentBudgetInfoFuturePast $assignmentsHoursCorrections): self
    {
        $this->initialized['assignmentsHoursCorrections'] = true;
        $this->assignmentsHoursCorrections = $assignmentsHoursCorrections;

        return $this;
    }

    /**
     * @return AssignmentBudgetInfoFuturePast
     */
    public function getItemtypesHoursCorrections(): AssignmentBudgetInfoFuturePast
    {
        return $this->itemtypesHoursCorrections;
    }

    /**
     * @param AssignmentBudgetInfoFuturePast $itemtypesHoursCorrections
     *
     * @return self
     */
    public function setItemtypesHoursCorrections(AssignmentBudgetInfoFuturePast $itemtypesHoursCorrections): self
    {
        $this->initialized['itemtypesHoursCorrections'] = true;
        $this->itemtypesHoursCorrections = $itemtypesHoursCorrections;

        return $this;
    }
}
