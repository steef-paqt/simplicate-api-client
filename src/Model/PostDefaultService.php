<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class PostDefaultService extends AbstractModel
{
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
    protected $myOrganizationProfileId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var bool
     */
    protected $priceEditable;
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
    public function getMyOrganizationProfileId(): string
    {
        return $this->myOrganizationProfileId;
    }

    /**
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
     * @return bool
     */
    public function getPriceEditable(): bool
    {
        return $this->priceEditable;
    }

    /**
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
