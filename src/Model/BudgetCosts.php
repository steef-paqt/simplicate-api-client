<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class BudgetCosts
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
