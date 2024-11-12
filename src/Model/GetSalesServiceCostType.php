<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class GetSalesServiceCostType extends AbstractModel
{
    /**
     * @var string
     */
    protected $label;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var GetPurchaseType
     */
    protected $costtype;
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
     * @return GetPurchaseType
     */
    public function getCosttype(): GetPurchaseType
    {
        return $this->costtype;
    }

    /**
     * @param GetPurchaseType $costtype
     *
     * @return self
     */
    public function setCosttype(GetPurchaseType $costtype): self
    {
        $this->initialized['costtype'] = true;
        $this->costtype = $costtype;

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
