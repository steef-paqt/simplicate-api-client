<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class JournalLine
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
     *
     *
     * @var string
     */
    protected $vatId;
    /**
     *
     *
     * @var bool
     */
    protected $vatIncluded;
    /**
     *
     *
     * @var float
     */
    protected $vatPercentage;
    /**
     *
     *
     * @var float
     */
    protected $amount;
    /**
     *
     *
     * @var int
     */
    protected $quantity;
    /**
     *
     *
     * @var string
     */
    protected $description;

    /**
     *
     *
     * @return string
     */
    public function getVatId(): string
    {
        return $this->vatId;
    }

    /**
     *
     *
     * @param string $vatId
     *
     * @return self
     */
    public function setVatId(string $vatId): self
    {
        $this->initialized['vatId'] = true;
        $this->vatId = $vatId;

        return $this;
    }

    /**
     *
     *
     * @return bool
     */
    public function getVatIncluded(): bool
    {
        return $this->vatIncluded;
    }

    /**
     *
     *
     * @param bool $vatIncluded
     *
     * @return self
     */
    public function setVatIncluded(bool $vatIncluded): self
    {
        $this->initialized['vatIncluded'] = true;
        $this->vatIncluded = $vatIncluded;

        return $this;
    }

    /**
     *
     *
     * @return float
     */
    public function getVatPercentage(): float
    {
        return $this->vatPercentage;
    }

    /**
     *
     *
     * @param float $vatPercentage
     *
     * @return self
     */
    public function setVatPercentage(float $vatPercentage): self
    {
        $this->initialized['vatPercentage'] = true;
        $this->vatPercentage = $vatPercentage;

        return $this;
    }

    /**
     *
     *
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     *
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(float $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }

    /**
     *
     *
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     *
     *
     * @param int $quantity
     *
     * @return self
     */
    public function setQuantity(int $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     *
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }
}
