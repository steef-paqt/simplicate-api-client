<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class PostHoursType
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
    protected $type;
    /**
     * See /invoices/vatclass
     *
     * @var string
     */
    protected $vatclassId;
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
     * See /invoices/vatclass
     *
     * @return string
     */
    public function getVatclassId(): string
    {
        return $this->vatclassId;
    }

    /**
     * See /invoices/vatclass
     *
     * @param string $vatclassId
     *
     * @return self
     */
    public function setVatclassId(string $vatclassId): self
    {
        $this->initialized['vatclassId'] = true;
        $this->vatclassId = $vatclassId;

        return $this;
    }

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
}
