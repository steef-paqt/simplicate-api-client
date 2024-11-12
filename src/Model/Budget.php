<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class Budget extends AbstractModel
{
    /**
     * @var BudgetHours
     */
    protected $hours;
    /**
     * @var BudgetCosts
     */
    protected $costs;
    /**
     * @var BudgetTotal
     */
    protected $total;

    /**
     * @return BudgetHours
     */
    public function getHours(): BudgetHours
    {
        return $this->hours;
    }

    /**
     * @param BudgetHours $hours
     *
     * @return self
     */
    public function setHours(BudgetHours $hours): self
    {
        $this->initialized['hours'] = true;
        $this->hours = $hours;

        return $this;
    }

    /**
     * @return BudgetCosts
     */
    public function getCosts(): BudgetCosts
    {
        return $this->costs;
    }

    /**
     * @param BudgetCosts $costs
     *
     * @return self
     */
    public function setCosts(BudgetCosts $costs): self
    {
        $this->initialized['costs'] = true;
        $this->costs = $costs;

        return $this;
    }

    /**
     * @return BudgetTotal
     */
    public function getTotal(): BudgetTotal
    {
        return $this->total;
    }

    /**
     * @param BudgetTotal $total
     *
     * @return self
     */
    public function setTotal(BudgetTotal $total): self
    {
        $this->initialized['total'] = true;
        $this->total = $total;

        return $this;
    }
}
