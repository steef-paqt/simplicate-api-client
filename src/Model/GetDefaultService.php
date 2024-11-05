<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class GetDefaultService
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
    protected $modified;
    /**
     *
     *
     * @var string
     */
    protected $myOrganizationProfileId;
    /**
     *
     *
     * @var string
     */
    protected $name;
    /**
     *
     *
     * @var bool
     */
    protected $priceEditable;
    /**
     *
     *
     * @var float
     */
    protected $price;

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
    public function getModified(): string
    {
        return $this->modified;
    }

    /**
     *
     *
     * @param string $modified
     *
     * @return self
     */
    public function setModified(string $modified): self
    {
        $this->initialized['modified'] = true;
        $this->modified = $modified;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getMyOrganizationProfileId(): string
    {
        return $this->myOrganizationProfileId;
    }

    /**
     *
     *
     * @param string $myOrganizationProfileId
     *
     * @return self
     */
    public function setMyOrganizationProfileId(string $myOrganizationProfileId): self
    {
        $this->initialized['myOrganizationProfileId'] = true;
        $this->myOrganizationProfileId = $myOrganizationProfileId;

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
     * @return bool
     */
    public function getPriceEditable(): bool
    {
        return $this->priceEditable;
    }

    /**
     *
     *
     * @param bool $priceEditable
     *
     * @return self
     */
    public function setPriceEditable(bool $priceEditable): self
    {
        $this->initialized['priceEditable'] = true;
        $this->priceEditable = $priceEditable;

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
}
