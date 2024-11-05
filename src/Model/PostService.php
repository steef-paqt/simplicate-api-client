<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class PostService
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
     * See /invoices/vatclass
     *
     * @var string
     */
    protected $vatClassId;
    /**
     * See /sales/revenuegroup
     *
     * @var string
     */
    protected $revenueGroupId;
    /**
     *
     *
     * @var string
     */
    protected $invoiceMethod;
    /**
     *
     *
     * @var PostProjectServiceHoursType[]
     */
    protected $hourTypes;
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
     * See /invoices/vatclass
     *
     * @return string
     */
    public function getVatClassId(): string
    {
        return $this->vatClassId;
    }

    /**
     * See /invoices/vatclass
     *
     * @param string $vatClassId
     *
     * @return self
     */
    public function setVatClassId(string $vatClassId): self
    {
        $this->initialized['vatClassId'] = true;
        $this->vatClassId = $vatClassId;

        return $this;
    }

    /**
     * See /sales/revenuegroup
     *
     * @return string
     */
    public function getRevenueGroupId(): string
    {
        return $this->revenueGroupId;
    }

    /**
     * See /sales/revenuegroup
     *
     * @param string $revenueGroupId
     *
     * @return self
     */
    public function setRevenueGroupId(string $revenueGroupId): self
    {
        $this->initialized['revenueGroupId'] = true;
        $this->revenueGroupId = $revenueGroupId;

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
     * @return PostProjectServiceHoursType[]
     */
    public function getHourTypes(): array
    {
        return $this->hourTypes;
    }

    /**
     *
     *
     * @param PostProjectServiceHoursType[] $hourTypes
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
