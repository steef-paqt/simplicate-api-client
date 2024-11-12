<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class ProjectServiceHoursType extends AbstractModel
{
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
