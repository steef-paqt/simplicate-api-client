<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class QuoteSalesService extends AbstractModel
{
    /**
     * @var string
     */
    protected $vatCode;
    /**
     * @var string
     */
    protected $vatDescription;
    /**
     * @var string
     */
    protected $salesId;
    /**
     * @var string
     */
    protected $defaultServiceId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $invoiceMethod;
    /**
     * @var float
     */
    protected $amount;
    /**
     * @var float
     */
    protected $price;
    /**
     * @var bool
     */
    protected $showItemtype;
    /**
     * @var string
     */
    protected $total;
    /**
     * @var int
     */
    protected $position;
    /**
     * @var string
     */
    protected $subscriptionCycle;
    /**
     * @var string
     */
    protected $explanation;
    /**
     * @var bool
     */
    protected $trackHours;
    /**
     * @var bool
     */
    protected $trackCost;

    /**
     * @return string
     */
    public function getVatCode(): string
    {
        return $this->vatCode;
    }

    /**
     * @param string $vatCode
     *
     * @return self
     */
    public function setVatCode(string $vatCode): self
    {
        $this->initialized['vatCode'] = true;
        $this->vatCode = $vatCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getVatDescription(): string
    {
        return $this->vatDescription;
    }

    /**
     * @param string $vatDescription
     *
     * @return self
     */
    public function setVatDescription(string $vatDescription): self
    {
        $this->initialized['vatDescription'] = true;
        $this->vatDescription = $vatDescription;

        return $this;
    }

    /**
     * @return string
     */
    public function getSalesId(): string
    {
        return $this->salesId;
    }

    /**
     * @param string $salesId
     *
     * @return self
     */
    public function setSalesId(string $salesId): self
    {
        $this->initialized['salesId'] = true;
        $this->salesId = $salesId;

        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultServiceId(): string
    {
        return $this->defaultServiceId;
    }

    /**
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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
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
     * @return string
     */
    public function getInvoiceMethod(): string
    {
        return $this->invoiceMethod;
    }

    /**
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
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
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

    public function getShowItemtype(): bool
    {
        return $this->showItemtype;
    }

    public function setShowItemtype(bool $showItemtype): self
    {
        $this->initialized['showItemtype'] = true;
        $this->showItemtype = $showItemtype;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotal(): string
    {
        return $this->total;
    }

    /**
     * @param int|string $total
     * @return self
     */
    public function setTotal(int|string $total): self
    {
        $this->initialized['total'] = true;
        $this->total = (string) $total;

        return $this;
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @param int $position
     *
     * @return self
     */
    public function setPosition(int $position): self
    {
        $this->initialized['position'] = true;
        $this->position = $position;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubscriptionCycle(): string
    {
        return $this->subscriptionCycle;
    }

    /**
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
     * @return string
     */
    public function getExplanation(): string
    {
        return $this->explanation;
    }

    /**
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
     * @return bool
     */
    public function getTrackHours(): bool
    {
        return $this->trackHours;
    }

    /**
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
     * @return bool
     */
    public function getTrackCost(): bool
    {
        return $this->trackCost;
    }

    /**
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
