<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class DefaultService
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
