<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class BudgetTotal extends AbstractModel
{
    /**
     * @var float
     */
    protected $valueBudget;
    /**
     * @var float
     */
    protected $valueSpent;
    /**
     * @var float
     */
    protected $valueInvoiced;

    /**
     * @return float
     */
    public function getValueBudget(): float
    {
        return $this->valueBudget;
    }

    /**
     * @param float $valueBudget
     *
     * @return self
     */
    public function setValueBudget(float $valueBudget): self
    {
        $this->initialized['valueBudget'] = true;
        $this->valueBudget = $valueBudget;

        return $this;
    }

    /**
     * @return float
     */
    public function getValueSpent(): float
    {
        return $this->valueSpent;
    }

    /**
     * @param float $valueSpent
     *
     * @return self
     */
    public function setValueSpent(float $valueSpent): self
    {
        $this->initialized['valueSpent'] = true;
        $this->valueSpent = $valueSpent;

        return $this;
    }

    /**
     * @return float
     */
    public function getValueInvoiced(): float
    {
        return $this->valueInvoiced;
    }

    /**
     * @param float $valueInvoiced
     *
     * @return self
     */
    public function setValueInvoiced(float $valueInvoiced): self
    {
        $this->initialized['valueInvoiced'] = true;
        $this->valueInvoiced = $valueInvoiced;

        return $this;
    }
}
