<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class AssignmentBudget
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
    protected $assignmentId;
    /**
     * @var string
     */
    protected $rangeStart = '2020-02-03';
    /**
     * @var string
     */
    protected $budgetRangeStart;
    /**
     * @var string
     */
    protected $rangeEnd = '2020-02-10';
    /**
     * @var string
     */
    protected $budgetRangeEnd;
    /**
     * Planned amount for either given week or the rest of the assignment duration. Returns float by default; if 'experimental' header is sent, returns string using ISO 8601 duration format.
     *
     * @var mixed
     */
    protected $plannedAmount;
    /**
     * Spent amount in given range. Returns float by default; if 'experimental' header is sent, returns string using ISO 8601 duration format.
     *
     * @var mixed
     */
    protected $spentAmount;
    /**
     * @var string
     */
    protected $hoursType;

    /**
     * @return string
     */
    public function getAssignmentId(): string
    {
        return $this->assignmentId;
    }

    /**
     * @param string $assignmentId
     *
     * @return self
     */
    public function setAssignmentId(string $assignmentId): self
    {
        $this->initialized['assignmentId'] = true;
        $this->assignmentId = $assignmentId;

        return $this;
    }

    /**
     * @return string
     */
    public function getRangeStart(): string
    {
        return $this->rangeStart;
    }

    /**
     * @param string $rangeStart
     *
     * @return self
     */
    public function setRangeStart(string $rangeStart): self
    {
        $this->initialized['rangeStart'] = true;
        $this->rangeStart = $rangeStart;

        return $this;
    }

    /**
     * @return string
     */
    public function getBudgetRangeStart(): string
    {
        return $this->budgetRangeStart;
    }

    /**
     * @param string $budgetRangeStart
     *
     * @return self
     */
    public function setBudgetRangeStart(string $budgetRangeStart): self
    {
        $this->initialized['budgetRangeStart'] = true;
        $this->budgetRangeStart = $budgetRangeStart;

        return $this;
    }

    /**
     * @return string
     */
    public function getRangeEnd(): string
    {
        return $this->rangeEnd;
    }

    /**
     * @param string $rangeEnd
     *
     * @return self
     */
    public function setRangeEnd(string $rangeEnd): self
    {
        $this->initialized['rangeEnd'] = true;
        $this->rangeEnd = $rangeEnd;

        return $this;
    }

    /**
     * @return string
     */
    public function getBudgetRangeEnd(): string
    {
        return $this->budgetRangeEnd;
    }

    /**
     * @param string $budgetRangeEnd
     *
     * @return self
     */
    public function setBudgetRangeEnd(string $budgetRangeEnd): self
    {
        $this->initialized['budgetRangeEnd'] = true;
        $this->budgetRangeEnd = $budgetRangeEnd;

        return $this;
    }

    /**
     * Planned amount for either given week or the rest of the assignment duration. Returns float by default; if 'experimental' header is sent, returns string using ISO 8601 duration format.
     *
     * @return mixed
     */
    public function getPlannedAmount()
    {
        return $this->plannedAmount;
    }

    /**
     * Planned amount for either given week or the rest of the assignment duration. Returns float by default; if 'experimental' header is sent, returns string using ISO 8601 duration format.
     *
     * @param mixed $plannedAmount
     *
     * @return self
     */
    public function setPlannedAmount($plannedAmount): self
    {
        $this->initialized['plannedAmount'] = true;
        $this->plannedAmount = $plannedAmount;

        return $this;
    }

    /**
     * Spent amount in given range. Returns float by default; if 'experimental' header is sent, returns string using ISO 8601 duration format.
     *
     * @return mixed
     */
    public function getSpentAmount()
    {
        return $this->spentAmount;
    }

    /**
     * Spent amount in given range. Returns float by default; if 'experimental' header is sent, returns string using ISO 8601 duration format.
     *
     * @param mixed $spentAmount
     *
     * @return self
     */
    public function setSpentAmount($spentAmount): self
    {
        $this->initialized['spentAmount'] = true;
        $this->spentAmount = $spentAmount;

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
}
