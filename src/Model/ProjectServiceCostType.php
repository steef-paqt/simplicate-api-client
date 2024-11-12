<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class ProjectServiceCostType extends AbstractModel
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
     * @var float
     */
    protected $purchaseMargin;
    /**
     * @var float
     */
    protected $purchaseTariff;

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
     * @return float
     */
    public function getPurchaseMargin(): float
    {
        return $this->purchaseMargin;
    }

    /**
     * @param float $purchaseMargin
     *
     * @return self
     */
    public function setPurchaseMargin(float $purchaseMargin): self
    {
        $this->initialized['purchaseMargin'] = true;
        $this->purchaseMargin = $purchaseMargin;

        return $this;
    }

    /**
     * @return float
     */
    public function getPurchaseTariff(): float
    {
        return $this->purchaseTariff;
    }

    /**
     * @param float $purchaseTariff
     *
     * @return self
     */
    public function setPurchaseTariff(float $purchaseTariff): self
    {
        $this->initialized['purchaseTariff'] = true;
        $this->purchaseTariff = $purchaseTariff;

        return $this;
    }
}
