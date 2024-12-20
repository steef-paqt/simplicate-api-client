<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class GetLeaveType extends AbstractModel
{
    /**
     * @var bool
     */
    protected $hasWorkflow;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var float
     */
    protected $billable;
    /**
     * @var VatClass
     */
    protected $vatclass;
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
     * @return bool
     */
    public function getHasWorkflow(): bool
    {
        return $this->hasWorkflow;
    }

    /**
     * @param bool $hasWorkflow
     *
     * @return self
     */
    public function setHasWorkflow(bool $hasWorkflow): self
    {
        $this->initialized['hasWorkflow'] = true;
        $this->hasWorkflow = $hasWorkflow;

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
     * @return float
     */
    public function getBillable(): float
    {
        return $this->billable;
    }

    /**
     * @param float $billable
     *
     * @return self
     */
    public function setBillable(float $billable): self
    {
        $this->initialized['billable'] = true;
        $this->billable = $billable;

        return $this;
    }

    /**
     * @return VatClass
     */
    public function getVatclass(): VatClass
    {
        return $this->vatclass;
    }

    /**
     * @param VatClass $vatclass
     *
     * @return self
     */
    public function setVatclass(VatClass $vatclass): self
    {
        $this->initialized['vatclass'] = true;
        $this->vatclass = $vatclass;

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
