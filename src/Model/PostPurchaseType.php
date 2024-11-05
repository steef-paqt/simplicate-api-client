<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class PostPurchaseType
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
    protected $label;
    /**
     * @var bool
     */
    protected $blocked;
    /**
     * @var float
     */
    protected $tariff;
    /**
     * @var bool
     */
    protected $isUnitTariff;
    /**
     * @var string
     */
    protected $unitName;
    /**
     * @var bool
     */
    protected $isAttachmentAllowed;

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;

        return $this;
    }

    /**
     * @return bool
     */
    public function getBlocked(): bool
    {
        return $this->blocked;
    }

    /**
     * @param bool $blocked
     *
     * @return self
     */
    public function setBlocked(bool $blocked): self
    {
        $this->initialized['blocked'] = true;
        $this->blocked = $blocked;

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
     * @return bool
     */
    public function getIsUnitTariff(): bool
    {
        return $this->isUnitTariff;
    }

    /**
     * @param bool $isUnitTariff
     *
     * @return self
     */
    public function setIsUnitTariff(bool $isUnitTariff): self
    {
        $this->initialized['isUnitTariff'] = true;
        $this->isUnitTariff = $isUnitTariff;

        return $this;
    }

    /**
     * @return string
     */
    public function getUnitName(): string
    {
        return $this->unitName;
    }

    /**
     * @param string $unitName
     *
     * @return self
     */
    public function setUnitName(string $unitName): self
    {
        $this->initialized['unitName'] = true;
        $this->unitName = $unitName;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsAttachmentAllowed(): bool
    {
        return $this->isAttachmentAllowed;
    }

    /**
     * @param bool $isAttachmentAllowed
     *
     * @return self
     */
    public function setIsAttachmentAllowed(bool $isAttachmentAllowed): self
    {
        $this->initialized['isAttachmentAllowed'] = true;
        $this->isAttachmentAllowed = $isAttachmentAllowed;

        return $this;
    }
}
