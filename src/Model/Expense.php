<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class Expense
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
     * @var GetProjectSimple
     */
    protected $project;
    /**
     * @var string
     */
    protected $serviceId;
    /**
     * @var GetProjectServiceCostType
     */
    protected $costtype;
    /**
     * @var GetPurchaseType
     */
    protected $defaultCosttype;
    /**
     * @var float
     */
    protected $amount;
    /**
     * @var float
     */
    protected $purchasePriceUnit;
    /**
     * @var float
     */
    protected $tariff;
    /**
     * @var float
     */
    protected $purchasePriceTotal;
    /**
     * @var float
     */
    protected $purchaseMargin;
    /**
     * @var float
     */
    protected $totalPrice;
    /**
     * @var bool
     */
    protected $isBillable;
    /**
     * @var ApprovalStatus
     */
    protected $approvalStatus;
    /**
     * @var string
     */
    protected $invoiceStatus;
    /**
     * @var GetInvoice
     */
    protected $invoice;
    /**
     * @var GetEmployeeSimple
     */
    protected $employee;
    /**
     * @var string
     */
    protected $date;
    /**
     * @var string
     */
    protected $note;
    /**
     * @var string
     */
    protected $servicePurchaseStartDate;
    /**
     * @var string
     */
    protected $servicePurchaseEndDate;
    /**
     * @var ExpenseAttachment[]
     */
    protected $attachments;

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
     * @return string
     */
    public function getServiceId(): string
    {
        return $this->serviceId;
    }

    /**
     * @param string $serviceId
     *
     * @return self
     */
    public function setServiceId(string $serviceId): self
    {
        $this->initialized['serviceId'] = true;
        $this->serviceId = $serviceId;

        return $this;
    }

    /**
     * @return GetProjectServiceCostType
     */
    public function getCosttype(): GetProjectServiceCostType
    {
        return $this->costtype;
    }

    /**
     * @param GetProjectServiceCostType $costtype
     *
     * @return self
     */
    public function setCosttype(GetProjectServiceCostType $costtype): self
    {
        $this->initialized['costtype'] = true;
        $this->costtype = $costtype;

        return $this;
    }

    /**
     * @return GetPurchaseType
     */
    public function getDefaultCosttype(): GetPurchaseType
    {
        return $this->defaultCosttype;
    }

    /**
     * @param GetPurchaseType $defaultCosttype
     *
     * @return self
     */
    public function setDefaultCosttype(GetPurchaseType $defaultCosttype): self
    {
        $this->initialized['defaultCosttype'] = true;
        $this->defaultCosttype = $defaultCosttype;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(float $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return float
     */
    public function getPurchasePriceUnit(): float
    {
        return $this->purchasePriceUnit;
    }

    /**
     * @param float $purchasePriceUnit
     *
     * @return self
     */
    public function setPurchasePriceUnit(float $purchasePriceUnit): self
    {
        $this->initialized['purchasePriceUnit'] = true;
        $this->purchasePriceUnit = $purchasePriceUnit;

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
     * @return float
     */
    public function getPurchasePriceTotal(): float
    {
        return $this->purchasePriceTotal;
    }

    /**
     * @param float $purchasePriceTotal
     *
     * @return self
     */
    public function setPurchasePriceTotal(float $purchasePriceTotal): self
    {
        $this->initialized['purchasePriceTotal'] = true;
        $this->purchasePriceTotal = $purchasePriceTotal;

        return $this;
    }

    /**
     * @return float
     */
    public function getPurchaseMargin(): float
    {
        return $this->purchaseMargin;
    }

    /**
     * @param float $purchaseMargin
     *
     * @return self
     */
    public function setPurchaseMargin(float $purchaseMargin): self
    {
        $this->initialized['purchaseMargin'] = true;
        $this->purchaseMargin = $purchaseMargin;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }

    /**
     * @param float $totalPrice
     *
     * @return self
     */
    public function setTotalPrice(float $totalPrice): self
    {
        $this->initialized['totalPrice'] = true;
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsBillable(): bool
    {
        return $this->isBillable;
    }

    /**
     * @param bool $isBillable
     *
     * @return self
     */
    public function setIsBillable(bool $isBillable): self
    {
        $this->initialized['isBillable'] = true;
        $this->isBillable = $isBillable;

        return $this;
    }

    /**
     * @return ApprovalStatus
     */
    public function getApprovalStatus(): ApprovalStatus
    {
        return $this->approvalStatus;
    }

    /**
     * @param ApprovalStatus $approvalStatus
     *
     * @return self
     */
    public function setApprovalStatus(ApprovalStatus $approvalStatus): self
    {
        $this->initialized['approvalStatus'] = true;
        $this->approvalStatus = $approvalStatus;

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
     * @return GetInvoice
     */
    public function getInvoice(): GetInvoice
    {
        return $this->invoice;
    }

    /**
     * @param GetInvoice $invoice
     *
     * @return self
     */
    public function setInvoice(GetInvoice $invoice): self
    {
        $this->initialized['invoice'] = true;
        $this->invoice = $invoice;

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
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

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
    public function getServicePurchaseStartDate(): string
    {
        return $this->servicePurchaseStartDate;
    }

    /**
     * @param string $servicePurchaseStartDate
     *
     * @return self
     */
    public function setServicePurchaseStartDate(string $servicePurchaseStartDate): self
    {
        $this->initialized['servicePurchaseStartDate'] = true;
        $this->servicePurchaseStartDate = $servicePurchaseStartDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getServicePurchaseEndDate(): string
    {
        return $this->servicePurchaseEndDate;
    }

    /**
     * @param string $servicePurchaseEndDate
     *
     * @return self
     */
    public function setServicePurchaseEndDate(string $servicePurchaseEndDate): self
    {
        $this->initialized['servicePurchaseEndDate'] = true;
        $this->servicePurchaseEndDate = $servicePurchaseEndDate;

        return $this;
    }

    /**
     * @return ExpenseAttachment[]
     */
    public function getAttachments(): array
    {
        return $this->attachments;
    }

    /**
     * @param ExpenseAttachment[] $attachments
     *
     * @return self
     */
    public function setAttachments(array $attachments): self
    {
        $this->initialized['attachments'] = true;
        $this->attachments = $attachments;

        return $this;
    }
}
