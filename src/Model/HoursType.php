<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class HoursType extends AbstractModel
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $label;
    /**
     * @var string
     */
    protected $tariff;
    /**
     * @var bool
     */
    protected $blocked;
    /**
     * @var string
     */
    protected $color;
    /**
     * @var VatClass
     */
    protected $vatclass;

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
     * @return string
     */
    public function getTariff(): string
    {
        return $this->tariff;
    }

    /**
     * @param string $tariff
     *
     * @return self
     */
    public function setTariff(string $tariff): self
    {
        $this->initialized['tariff'] = true;
        $this->tariff = $tariff;

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
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     *
     * @return self
     */
    public function setColor(string $color): self
    {
        $this->initialized['color'] = true;
        $this->color = $color;

        return $this;
    }

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
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

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
}
