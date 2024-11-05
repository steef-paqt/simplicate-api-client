<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class GetHours
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
     * @var GetEmployeeSimple
     */
    protected $employee;
    /**
     *
     *
     * @var GetProjectSimple
     */
    protected $project;
    /**
     *
     *
     * @var GetHoursHoursProjectService
     */
    protected $projectservice;
    /**
     * When record is leave related return leaveType
     *
     * @var mixed
     */
    protected $type;
    /**
     *
     *
     * @var GetApprovalStatus
     */
    protected $approvalstatus;
    /**
     *
     *
     * @var string
     */
    protected $invoiceStatus;
    /**
     * See /invoices/invoice
     *
     * @var string
     */
    protected $invoiceId;
    /**
     * See /invoices/invoice
     *
     * @var string
     */
    protected $invoicelineId;
    /**
     *
     *
     * @var float
     */
    protected $tariff;
    /**
     *
     *
     * @var GetCustomField[]
     */
    protected $customFields;
    /**
     *
     *
     * @var string
     */
    protected $createdAt;
    /**
     *
     *
     * @var string
     */
    protected $updatedAt;
    /**
     *
     *
     * @var bool
     */
    protected $locked;
    /**
     *
     *
     * @var IsSatisfied
     */
    protected $isEditable;
    /**
     *
     *
     * @var IsSatisfied
     */
    protected $isDeletable;
    /**
     *
     *
     * @var LeaveStatus
     */
    protected $leaveStatus;
    /**
     *
     *
     * @var string
     */
    protected $leaveId;
    /**
     *
     *
     * @var string
     */
    protected $absenceId;
    /**
     *
     *
     * @var string
     */
    protected $status;
    /**
     *
     *
     * @var Correction
     */
    protected $corrections;
    /**
     *
     *
     * @var GetMileageSimple
     */
    protected $mileage;
    /**
     *
     *
     * @var bool
     */
    protected $isProductive;
    /**
     *
     *
     * @var float
     */
    protected $hours;
    /**
     *
     *
     * @var int
     */
    protected $durationInMinutes;
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
     * @var bool
     */
    protected $isTimeDefined;
    /**
     *
     *
     * @var bool
     */
    protected $isRecurring;
    /**
     *
     *
     * @var Recurrence
     */
    protected $recurrence;
    /**
     *
     *
     * @var bool
     */
    protected $isExternal;
    /**
     *
     *
     * @var bool
     */
    protected $billable;
    /**
     *
     *
     * @var string
     */
    protected $note;
    /**
     *
     *
     * @var Address
     */
    protected $address;
    /**
     *
     *
     * @var string
     */
    protected $assignmentId;
    /**
     *
     *
     * @var bool
     */
    protected $shouldSyncToCronofy;
    /**
     *
     *
     * @var string
     */
    protected $source;

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
     * @return GetEmployeeSimple
     */
    public function getEmployee(): GetEmployeeSimple
    {
        return $this->employee;
    }

    /**
     *
     *
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
     *
     *
     * @return GetProjectSimple
     */
    public function getProject(): GetProjectSimple
    {
        return $this->project;
    }

    /**
     *
     *
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
     *
     *
     * @return GetHoursHoursProjectService
     */
    public function getProjectservice(): GetHoursHoursProjectService
    {
        return $this->projectservice;
    }

    /**
     *
     *
     * @param GetHoursHoursProjectService $projectservice
     *
     * @return self
     */
    public function setProjectservice(GetHoursHoursProjectService $projectservice): self
    {
        $this->initialized['projectservice'] = true;
        $this->projectservice = $projectservice;

        return $this;
    }

    /**
     * When record is leave related return leaveType
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * When record is leave related return leaveType
     *
     * @param mixed $type
     *
     * @return self
     */
    public function setType($type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     *
     *
     * @return GetApprovalStatus
     */
    public function getApprovalstatus(): GetApprovalStatus
    {
        return $this->approvalstatus;
    }

    /**
     *
     *
     * @param GetApprovalStatus $approvalstatus
     *
     * @return self
     */
    public function setApprovalstatus(GetApprovalStatus $approvalstatus): self
    {
        $this->initialized['approvalstatus'] = true;
        $this->approvalstatus = $approvalstatus;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getInvoiceStatus(): string
    {
        return $this->invoiceStatus;
    }

    /**
     *
     *
     * @param string $invoiceStatus
     *
     * @return self
     */
    public function setInvoiceStatus(string $invoiceStatus): self
    {
        $this->initialized['invoiceStatus'] = true;
        $this->invoiceStatus = $invoiceStatus;

        return $this;
    }

    /**
     * See /invoices/invoice
     *
     * @return string
     */
    public function getInvoiceId(): string
    {
        return $this->invoiceId;
    }

    /**
     * See /invoices/invoice
     *
     * @param string $invoiceId
     *
     * @return self
     */
    public function setInvoiceId(string $invoiceId): self
    {
        $this->initialized['invoiceId'] = true;
        $this->invoiceId = $invoiceId;

        return $this;
    }

    /**
     * See /invoices/invoice
     *
     * @return string
     */
    public function getInvoicelineId(): string
    {
        return $this->invoicelineId;
    }

    /**
     * See /invoices/invoice
     *
     * @param string $invoicelineId
     *
     * @return self
     */
    public function setInvoicelineId(string $invoicelineId): self
    {
        $this->initialized['invoicelineId'] = true;
        $this->invoicelineId = $invoicelineId;

        return $this;
    }

    /**
     *
     *
     * @return float
     */
    public function getTariff(): float
    {
        return $this->tariff;
    }

    /**
     *
     *
     * @param float $tariff
     *
     * @return self
     */
    public function setTariff(float $tariff): self
    {
        $this->initialized['tariff'] = true;
        $this->tariff = $tariff;

        return $this;
    }

    /**
     *
     *
     * @return GetCustomField[]
     */
    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    /**
     *
     *
     * @param GetCustomField[] $customFields
     *
     * @return self
     */
    public function setCustomFields(array $customFields): self
    {
        $this->initialized['customFields'] = true;
        $this->customFields = $customFields;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     *
     *
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
     *
     *
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    /**
     *
     *
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
     *
     *
     * @return bool
     */
    public function getLocked(): bool
    {
        return $this->locked;
    }

    /**
     *
     *
     * @param bool $locked
     *
     * @return self
     */
    public function setLocked(bool $locked): self
    {
        $this->initialized['locked'] = true;
        $this->locked = $locked;

        return $this;
    }

    /**
     *
     *
     * @return IsSatisfied
     */
    public function getIsEditable(): IsSatisfied
    {
        return $this->isEditable;
    }

    /**
     *
     *
     * @param IsSatisfied $isEditable
     *
     * @return self
     */
    public function setIsEditable(IsSatisfied $isEditable): self
    {
        $this->initialized['isEditable'] = true;
        $this->isEditable = $isEditable;

        return $this;
    }

    /**
     *
     *
     * @return IsSatisfied
     */
    public function getIsDeletable(): IsSatisfied
    {
        return $this->isDeletable;
    }

    /**
     *
     *
     * @param IsSatisfied $isDeletable
     *
     * @return self
     */
    public function setIsDeletable(IsSatisfied $isDeletable): self
    {
        $this->initialized['isDeletable'] = true;
        $this->isDeletable = $isDeletable;

        return $this;
    }

    /**
     *
     *
     * @return LeaveStatus
     */
    public function getLeaveStatus(): LeaveStatus
    {
        return $this->leaveStatus;
    }

    /**
     *
     *
     * @param LeaveStatus $leaveStatus
     *
     * @return self
     */
    public function setLeaveStatus(LeaveStatus $leaveStatus): self
    {
        $this->initialized['leaveStatus'] = true;
        $this->leaveStatus = $leaveStatus;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getLeaveId(): string
    {
        return $this->leaveId;
    }

    /**
     *
     *
     * @param string $leaveId
     *
     * @return self
     */
    public function setLeaveId(string $leaveId): self
    {
        $this->initialized['leaveId'] = true;
        $this->leaveId = $leaveId;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getAbsenceId(): string
    {
        return $this->absenceId;
    }

    /**
     *
     *
     * @param string $absenceId
     *
     * @return self
     */
    public function setAbsenceId(string $absenceId): self
    {
        $this->initialized['absenceId'] = true;
        $this->absenceId = $absenceId;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     *
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     *
     *
     * @return Correction
     */
    public function getCorrections(): Correction
    {
        return $this->corrections;
    }

    /**
     *
     *
     * @param Correction $corrections
     *
     * @return self
     */
    public function setCorrections(Correction $corrections): self
    {
        $this->initialized['corrections'] = true;
        $this->corrections = $corrections;

        return $this;
    }

    /**
     *
     *
     * @return GetMileageSimple
     */
    public function getMileage(): GetMileageSimple
    {
        return $this->mileage;
    }

    /**
     *
     *
     * @param GetMileageSimple $mileage
     *
     * @return self
     */
    public function setMileage(GetMileageSimple $mileage): self
    {
        $this->initialized['mileage'] = true;
        $this->mileage = $mileage;

        return $this;
    }

    /**
     *
     *
     * @return bool
     */
    public function getIsProductive(): bool
    {
        return $this->isProductive;
    }

    /**
     *
     *
     * @param bool $isProductive
     *
     * @return self
     */
    public function setIsProductive(bool $isProductive): self
    {
        $this->initialized['isProductive'] = true;
        $this->isProductive = $isProductive;

        return $this;
    }

    /**
     *
     *
     * @return float
     */
    public function getHours(): float
    {
        return $this->hours;
    }

    /**
     *
     *
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
     *
     *
     * @return int
     */
    public function getDurationInMinutes(): int
    {
        return $this->durationInMinutes;
    }

    /**
     *
     *
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
     * @return bool
     */
    public function getIsTimeDefined(): bool
    {
        return $this->isTimeDefined;
    }

    /**
     *
     *
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
     *
     *
     * @return bool
     */
    public function getIsRecurring(): bool
    {
        return $this->isRecurring;
    }

    /**
     *
     *
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
     *
     *
     * @return Recurrence
     */
    public function getRecurrence(): Recurrence
    {
        return $this->recurrence;
    }

    /**
     *
     *
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
     *
     *
     * @return bool
     */
    public function getIsExternal(): bool
    {
        return $this->isExternal;
    }

    /**
     *
     *
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
     *
     *
     * @return bool
     */
    public function getBillable(): bool
    {
        return $this->billable;
    }

    /**
     *
     *
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
     *
     *
     * @return string
     */
    public function getNote(): string
    {
        return $this->note;
    }

    /**
     *
     *
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
     *
     *
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     *
     *
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
     *
     *
     * @return string
     */
    public function getAssignmentId(): string
    {
        return $this->assignmentId;
    }

    /**
     *
     *
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
     *
     *
     * @return bool
     */
    public function getShouldSyncToCronofy(): bool
    {
        return $this->shouldSyncToCronofy;
    }

    /**
     *
     *
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
     *
     *
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     *
     *
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
