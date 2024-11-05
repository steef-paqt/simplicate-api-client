<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class PostHours
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
    protected $projectId;
    /**
     * @var string
     */
    protected $projectserviceId;
    /**
     * @var string
     */
    protected $typeId;
    /**
     * @var string
     */
    protected $approvalstatusId;
    /**
     * @var PostCalendarItem
     */
    protected $externalItem;
    /**
     * @var string
     */
    protected $assignmentId;
    /**
     * @var string
     */
    protected $addressId;
    /**
     * @var float
     */
    protected $hours;
    /**
     * @var int
     */
    protected $durationInMinutes;
    /**
     * @var string
     */
    protected $startDate;
    /**
     * @var string
     */
    protected $endDate;
    /**
     * @var bool
     */
    protected $isTimeDefined;
    /**
     * @var bool
     */
    protected $isRecurring;
    /**
     * @var Recurrence
     */
    protected $recurrence;
    /**
     * @var bool
     */
    protected $isExternal;
    /**
     * @var bool
     */
    protected $billable;
    /**
     * @var string
     */
    protected $note;
    /**
     * @var Address
     */
    protected $address;
    /**
     * @var bool
     */
    protected $shouldSyncToCronofy;
    /**
     * @var string
     */
    protected $source;

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
    public function getProjectserviceId(): string
    {
        return $this->projectserviceId;
    }

    /**
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
     * @return string
     */
    public function getTypeId(): string
    {
        return $this->typeId;
    }

    /**
     * @param string $typeId
     *
     * @return self
     */
    public function setTypeId(string $typeId): self
    {
        $this->initialized['typeId'] = true;
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * @return string
     */
    public function getApprovalstatusId(): string
    {
        return $this->approvalstatusId;
    }

    /**
     * @param string $approvalstatusId
     *
     * @return self
     */
    public function setApprovalstatusId(string $approvalstatusId): self
    {
        $this->initialized['approvalstatusId'] = true;
        $this->approvalstatusId = $approvalstatusId;

        return $this;
    }

    /**
     * @return PostCalendarItem
     */
    public function getExternalItem(): PostCalendarItem
    {
        return $this->externalItem;
    }

    /**
     * @param PostCalendarItem $externalItem
     *
     * @return self
     */
    public function setExternalItem(PostCalendarItem $externalItem): self
    {
        $this->initialized['externalItem'] = true;
        $this->externalItem = $externalItem;

        return $this;
    }

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
    public function getAddressId(): string
    {
        return $this->addressId;
    }

    /**
     * @param string $addressId
     *
     * @return self
     */
    public function setAddressId(string $addressId): self
    {
        $this->initialized['addressId'] = true;
        $this->addressId = $addressId;

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
     * @return int
     */
    public function getDurationInMinutes(): int
    {
        return $this->durationInMinutes;
    }

    /**
     * @param int $durationInMinutes
     *
     * @return self
     */
    public function setDurationInMinutes(int $durationInMinutes): self
    {
        $this->initialized['durationInMinutes'] = true;
        $this->durationInMinutes = $durationInMinutes;

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

    /**
     * @return bool
     */
    public function getIsRecurring(): bool
    {
        return $this->isRecurring;
    }

    /**
     * @param bool $isRecurring
     *
     * @return self
     */
    public function setIsRecurring(bool $isRecurring): self
    {
        $this->initialized['isRecurring'] = true;
        $this->isRecurring = $isRecurring;

        return $this;
    }

    /**
     * @return Recurrence
     */
    public function getRecurrence(): Recurrence
    {
        return $this->recurrence;
    }

    /**
     * @param Recurrence $recurrence
     *
     * @return self
     */
    public function setRecurrence(Recurrence $recurrence): self
    {
        $this->initialized['recurrence'] = true;
        $this->recurrence = $recurrence;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsExternal(): bool
    {
        return $this->isExternal;
    }

    /**
     * @param bool $isExternal
     *
     * @return self
     */
    public function setIsExternal(bool $isExternal): self
    {
        $this->initialized['isExternal'] = true;
        $this->isExternal = $isExternal;

        return $this;
    }

    /**
     * @return bool
     */
    public function getBillable(): bool
    {
        return $this->billable;
    }

    /**
     * @param bool $billable
     *
     * @return self
     */
    public function setBillable(bool $billable): self
    {
        $this->initialized['billable'] = true;
        $this->billable = $billable;

        return $this;
    }

    /**
     * @return string
     */
    public function getNote(): string
    {
        return $this->note;
    }

    /**
     * @param string $note
     *
     * @return self
     */
    public function setNote(string $note): self
    {
        $this->initialized['note'] = true;
        $this->note = $note;

        return $this;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param Address $address
     *
     * @return self
     */
    public function setAddress(Address $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }

    /**
     * @return bool
     */
    public function getShouldSyncToCronofy(): bool
    {
        return $this->shouldSyncToCronofy;
    }

    /**
     * @param bool $shouldSyncToCronofy
     *
     * @return self
     */
    public function setShouldSyncToCronofy(bool $shouldSyncToCronofy): self
    {
        $this->initialized['shouldSyncToCronofy'] = true;
        $this->shouldSyncToCronofy = $shouldSyncToCronofy;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source): self
    {
        $this->initialized['source'] = true;
        $this->source = $source;

        return $this;
    }
}
