<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class GetMileage
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
     * @var GetEmployeeSimple
     */
    protected $employee;
    /**
     * @var GetProjectSimple
     */
    protected $project;
    /**
     * @var GetHoursType
     */
    protected $type;
    /**
     * @var GetApprovalStatus
     */
    protected $approvalstatus;
    /**
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
     * @var float
     */
    protected $tariff;
    /**
     * @var VatClass
     */
    protected $vatclass;
    /**
     * @var string
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $updatedAt;
    /**
     * @var float
     */
    protected $mileage;
    /**
     * @var string
     */
    protected $relatedHoursId;
    /**
     * @var string
     */
    protected $source;
    /**
     * @var string
     */
    protected $note;
    /**
     * @var string
     */
    protected $startDate;

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
     * @return GetHoursType
     */
    public function getType(): GetHoursType
    {
        return $this->type;
    }

    /**
     * @param GetHoursType $type
     *
     * @return self
     */
    public function setType(GetHoursType $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * @return GetApprovalStatus
     */
    public function getApprovalstatus(): GetApprovalStatus
    {
        return $this->approvalstatus;
    }

    /**
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
     * @return string
     */
    public function getInvoiceStatus(): string
    {
        return $this->invoiceStatus;
    }

    /**
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
     * @return float
     */
    public function getTariff(): float
    {
        return $this->tariff;
    }

    /**
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
     * @return VatClass
     */
    public function getVatclass(): VatClass
    {
        return $this->vatclass;
    }

    /**
     * @param VatClass $vatclass
     *
     * @return self
     */
    public function setVatclass(VatClass $vatclass): self
    {
        $this->initialized['vatclass'] = true;
        $this->vatclass = $vatclass;

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
     * @return float
     */
    public function getMileage(): float
    {
        return $this->mileage;
    }

    /**
     * @param float $mileage
     *
     * @return self
     */
    public function setMileage(float $mileage): self
    {
        $this->initialized['mileage'] = true;
        $this->mileage = $mileage;

        return $this;
    }

    /**
     * @return string
     */
    public function getRelatedHoursId(): string
    {
        return $this->relatedHoursId;
    }

    /**
     * @param string $relatedHoursId
     *
     * @return self
     */
    public function setRelatedHoursId(string $relatedHoursId): self
    {
        $this->initialized['relatedHoursId'] = true;
        $this->relatedHoursId = $relatedHoursId;

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
}
