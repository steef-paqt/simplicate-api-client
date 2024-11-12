<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class BudgetHours extends AbstractModel
{
    /**
     * @var float
     */
    protected $amountBudget;
    /**
     * @var float
     */
    protected $amountSpent;
    /**
     * @var float
     */
    protected $valueBudget;
    /**
     * @var float
     */
    protected $valueSpent;

    /**
     * @return float
     */
    public function getAmountBudget(): float
    {
        return $this->amountBudget;
    }

    /**
     * @param float $amountBudget
     *
     * @return self
     */
    public function setAmountBudget(float $amountBudget): self
    {
        $this->initialized['amountBudget'] = true;
        $this->amountBudget = $amountBudget;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmountSpent(): float
    {
        return $this->amountSpent;
    }

    /**
     * @param float $amountSpent
     *
     * @return self
     */
    public function setAmountSpent(float $amountSpent): self
    {
        $this->initialized['amountSpent'] = true;
        $this->amountSpent = $amountSpent;

        return $this;
    }

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
}
