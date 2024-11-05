<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class GetProjectServiceHoursType
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
    protected $id;
    /**
     * @var GetHoursType
     */
    protected $hourstype;
    /**
     * @var string
     */
    protected $color;
    /**
     * @var float
     */
    protected $budgetedAmount;
    /**
     * @var float
     */
    protected $tariff;
    /**
     * @var bool
     */
    protected $billable;

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
     * @return GetHoursType
     */
    public function getHourstype(): GetHoursType
    {
        return $this->hourstype;
    }

    /**
     * @param GetHoursType $hourstype
     *
     * @return self
     */
    public function setHourstype(GetHoursType $hourstype): self
    {
        $this->initialized['hourstype'] = true;
        $this->hourstype = $hourstype;

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
     * @return float
     */
    public function getBudgetedAmount(): float
    {
        return $this->budgetedAmount;
    }

    /**
     * @param float $budgetedAmount
     *
     * @return self
     */
    public function setBudgetedAmount(float $budgetedAmount): self
    {
        $this->initialized['budgetedAmount'] = true;
        $this->budgetedAmount = $budgetedAmount;

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
    public function getBillable(): bool
    {
        return $this->billable;
    }

    /**
     * @param bool $billable
     *
     * @return self
     */
    public function setBillable(bool $billable): self
    {
        $this->initialized['billable'] = true;
        $this->billable = $billable;

        return $this;
    }
}
