<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class GetInvoiceLine extends AbstractModel
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var RevenueGroup
     */
    protected $revenueGroup;
    /**
     * @var string
     */
    protected $defaultServiceId;
    /**
     * @var VatClass
     */
    protected $vatClass;
    /**
     * @var float
     */
    protected $totalVat;
    /**
     * @var string
     */
    protected $serviceId;
    /**
     * @var string
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $updatedAt;
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
     * @return RevenueGroup
     */
    public function getRevenueGroup(): RevenueGroup
    {
        return $this->revenueGroup;
    }

    /**
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
     * @return VatClass
     */
    public function getVatClass(): VatClass
    {
        return $this->vatClass;
    }

    /**
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
     * @return float
     */
    public function getTotalVat(): float
    {
        return $this->totalVat;
    }

    /**
     * @param float $totalVat
     *
     * @return self
     */
    public function setTotalVat(float $totalVat): self
    {
        $this->initialized['totalVat'] = true;
        $this->totalVat = $totalVat;

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
