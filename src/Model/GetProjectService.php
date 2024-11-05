<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class GetProjectService
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
    protected $projectId;
    /**
     *
     *
     * @var string
     */
    protected $relatedServiceId;
    /**
     *
     *
     * @var string
     */
    protected $expectedInvoiceDate;
    /**
     *
     *
     * @var string
     */
    protected $invoiceDate;
    /**
     *
     *
     * @var string
     */
    protected $status;
    /**
     *
     *
     * @var GetProjectServiceHoursType[]
     */
    protected $hourTypes;
    /**
     *
     *
     * @var GetProjectServiceCostType[]
     */
    protected $costTypes;
    /**
     *
     *
     * @var VatClass
     */
    protected $vatClass;
    /**
     *
     *
     * @var RevenueGroup
     */
    protected $revenueGroup;
    /**
     *
     *
     * @var bool
     */
    protected $invoiceInInstallments;
    /**
     *
     *
     * @var Installment[]
     */
    protected $installments;
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
     * @var string
     */
    protected $budgetFinancialHours;
    /**
     *
     *
     * @var string
     */
    protected $writeHoursStartDate;
    /**
     *
     *
     * @var string
     */
    protected $writeHoursEndDate;
    /**
     *
     *
     * @var string
     */
    protected $serviceNumber;
    /**
     *
     *
     * @var bool
     */
    protected $useInResourcePlanner;
    /**
     *
     *
     * @var string
     */
    protected $id;
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
    protected $subscriptionCycle;
    /**
     *
     *
     * @var float
     */
    protected $budget;
    /**
     *
     *
     * @var string
     */
    protected $defaultServiceId;
    /**
     *
     *
     * @var string
     */
    protected $name;
    /**
     *
     *
     * @var string
     */
    protected $explanation;
    /**
     *
     *
     * @var string
     */
    protected $invoiceMethod;
    /**
     *
     *
     * @var float
     */
    protected $amount;
    /**
     *
     *
     * @var float
     */
    protected $price;
    /**
     *
     *
     * @var bool
     */
    protected $trackHours;
    /**
     *
     *
     * @var bool
     */
    protected $trackCost;

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
    public function getRelatedServiceId(): string
    {
        return $this->relatedServiceId;
    }

    /**
     *
     *
     * @param string $relatedServiceId
     *
     * @return self
     */
    public function setRelatedServiceId(string $relatedServiceId): self
    {
        $this->initialized['relatedServiceId'] = true;
        $this->relatedServiceId = $relatedServiceId;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getExpectedInvoiceDate(): string
    {
        return $this->expectedInvoiceDate;
    }

    /**
     *
     *
     * @param string $expectedInvoiceDate
     *
     * @return self
     */
    public function setExpectedInvoiceDate(string $expectedInvoiceDate): self
    {
        $this->initialized['expectedInvoiceDate'] = true;
        $this->expectedInvoiceDate = $expectedInvoiceDate;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getInvoiceDate(): string
    {
        return $this->invoiceDate;
    }

    /**
     *
     *
     * @param string $invoiceDate
     *
     * @return self
     */
    public function setInvoiceDate(string $invoiceDate): self
    {
        $this->initialized['invoiceDate'] = true;
        $this->invoiceDate = $invoiceDate;

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
     * @return GetProjectServiceHoursType[]
     */
    public function getHourTypes(): array
    {
        return $this->hourTypes;
    }

    /**
     *
     *
     * @param GetProjectServiceHoursType[] $hourTypes
     *
     * @return self
     */
    public function setHourTypes(array $hourTypes): self
    {
        $this->initialized['hourTypes'] = true;
        $this->hourTypes = $hourTypes;

        return $this;
    }

    /**
     *
     *
     * @return GetProjectServiceCostType[]
     */
    public function getCostTypes(): array
    {
        return $this->costTypes;
    }

    /**
     *
     *
     * @param GetProjectServiceCostType[] $costTypes
     *
     * @return self
     */
    public function setCostTypes(array $costTypes): self
    {
        $this->initialized['costTypes'] = true;
        $this->costTypes = $costTypes;

        return $this;
    }

    /**
     *
     *
     * @return VatClass
     */
    public function getVatClass(): VatClass
    {
        return $this->vatClass;
    }

    /**
     *
     *
     * @param VatClass $vatClass
     *
     * @return self
     */
    public function setVatClass(VatClass $vatClass): self
    {
        $this->initialized['vatClass'] = true;
        $this->vatClass = $vatClass;

        return $this;
    }

    /**
     *
     *
     * @return RevenueGroup
     */
    public function getRevenueGroup(): RevenueGroup
    {
        return $this->revenueGroup;
    }

    /**
     *
     *
     * @param RevenueGroup $revenueGroup
     *
     * @return self
     */
    public function setRevenueGroup(RevenueGroup $revenueGroup): self
    {
        $this->initialized['revenueGroup'] = true;
        $this->revenueGroup = $revenueGroup;

        return $this;
    }

    /**
     *
     *
     * @return bool
     */
    public function getInvoiceInInstallments(): bool
    {
        return $this->invoiceInInstallments;
    }

    /**
     *
     *
     * @param bool $invoiceInInstallments
     *
     * @return self
     */
    public function setInvoiceInInstallments(bool $invoiceInInstallments): self
    {
        $this->initialized['invoiceInInstallments'] = true;
        $this->invoiceInInstallments = $invoiceInInstallments;

        return $this;
    }

    /**
     *
     *
     * @return Installment[]
     */
    public function getInstallments(): array
    {
        return $this->installments;
    }

    /**
     *
     *
     * @param Installment[] $installments
     *
     * @return self
     */
    public function setInstallments(array $installments): self
    {
        $this->initialized['installments'] = true;
        $this->installments = $installments;

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
     * @return string
     */
    public function getBudgetFinancialHours(): string
    {
        return $this->budgetFinancialHours;
    }

    /**
     *
     *
     * @param string $budgetFinancialHours
     *
     * @return self
     */
    public function setBudgetFinancialHours(string $budgetFinancialHours): self
    {
        $this->initialized['budgetFinancialHours'] = true;
        $this->budgetFinancialHours = $budgetFinancialHours;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getWriteHoursStartDate(): string
    {
        return $this->writeHoursStartDate;
    }

    /**
     *
     *
     * @param string $writeHoursStartDate
     *
     * @return self
     */
    public function setWriteHoursStartDate(string $writeHoursStartDate): self
    {
        $this->initialized['writeHoursStartDate'] = true;
        $this->writeHoursStartDate = $writeHoursStartDate;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getWriteHoursEndDate(): string
    {
        return $this->writeHoursEndDate;
    }

    /**
     *
     *
     * @param string $writeHoursEndDate
     *
     * @return self
     */
    public function setWriteHoursEndDate(string $writeHoursEndDate): self
    {
        $this->initialized['writeHoursEndDate'] = true;
        $this->writeHoursEndDate = $writeHoursEndDate;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getServiceNumber(): string
    {
        return $this->serviceNumber;
    }

    /**
     *
     *
     * @param string $serviceNumber
     *
     * @return self
     */
    public function setServiceNumber(string $serviceNumber): self
    {
        $this->initialized['serviceNumber'] = true;
        $this->serviceNumber = $serviceNumber;

        return $this;
    }

    /**
     *
     *
     * @return bool
     */
    public function getUseInResourcePlanner(): bool
    {
        return $this->useInResourcePlanner;
    }

    /**
     *
     *
     * @param bool $useInResourcePlanner
     *
     * @return self
     */
    public function setUseInResourcePlanner(bool $useInResourcePlanner): self
    {
        $this->initialized['useInResourcePlanner'] = true;
        $this->useInResourcePlanner = $useInResourcePlanner;

        return $this;
    }

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
    public function getSubscriptionCycle(): string
    {
        return $this->subscriptionCycle;
    }

    /**
     *
     *
     * @param string $subscriptionCycle
     *
     * @return self
     */
    public function setSubscriptionCycle(string $subscriptionCycle): self
    {
        $this->initialized['subscriptionCycle'] = true;
        $this->subscriptionCycle = $subscriptionCycle;

        return $this;
    }

    /**
     *
     *
     * @return float
     */
    public function getBudget(): float
    {
        return $this->budget;
    }

    /**
     *
     *
     * @param float $budget
     *
     * @return self
     */
    public function setBudget(float $budget): self
    {
        $this->initialized['budget'] = true;
        $this->budget = $budget;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getDefaultServiceId(): string
    {
        return $this->defaultServiceId;
    }

    /**
     *
     *
     * @param string $defaultServiceId
     *
     * @return self
     */
    public function setDefaultServiceId(string $defaultServiceId): self
    {
        $this->initialized['defaultServiceId'] = true;
        $this->defaultServiceId = $defaultServiceId;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     *
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getExplanation(): string
    {
        return $this->explanation;
    }

    /**
     *
     *
     * @param string $explanation
     *
     * @return self
     */
    public function setExplanation(string $explanation): self
    {
        $this->initialized['explanation'] = true;
        $this->explanation = $explanation;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getInvoiceMethod(): string
    {
        return $this->invoiceMethod;
    }

    /**
     *
     *
     * @param string $invoiceMethod
     *
     * @return self
     */
    public function setInvoiceMethod(string $invoiceMethod): self
    {
        $this->initialized['invoiceMethod'] = true;
        $this->invoiceMethod = $invoiceMethod;

        return $this;
    }

    /**
     *
     *
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     *
     *
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
     *
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     *
     *
     * @param float $price
     *
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;

        return $this;
    }

    /**
     *
     *
     * @return bool
     */
    public function getTrackHours(): bool
    {
        return $this->trackHours;
    }

    /**
     *
     *
     * @param bool $trackHours
     *
     * @return self
     */
    public function setTrackHours(bool $trackHours): self
    {
        $this->initialized['trackHours'] = true;
        $this->trackHours = $trackHours;

        return $this;
    }

    /**
     *
     *
     * @return bool
     */
    public function getTrackCost(): bool
    {
        return $this->trackCost;
    }

    /**
     *
     *
     * @param bool $trackCost
     *
     * @return self
     */
    public function setTrackCost(bool $trackCost): self
    {
        $this->initialized['trackCost'] = true;
        $this->trackCost = $trackCost;

        return $this;
    }
}
