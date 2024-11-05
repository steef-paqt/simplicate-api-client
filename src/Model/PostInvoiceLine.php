<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class PostInvoiceLine
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
    protected $vatClassId;
    /**
     * @var string
     */
    protected $revenueGroupId;
    /**
     * @var string
     */
    protected $date;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var float
     */
    protected $amount;
    /**
     * @var float
     */
    protected $price;

    /**
     * @return string
     */
    public function getVatClassId(): string
    {
        return $this->vatClassId;
    }

    /**
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
     * @return string
     */
    public function getRevenueGroupId(): string
    {
        return $this->revenueGroupId;
    }

    /**
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
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

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
}
