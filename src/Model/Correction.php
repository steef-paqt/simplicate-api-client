<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class Correction extends AbstractModel
{
    /**
     * @var float
     */
    protected $amount;
    /**
     * @var float
     */
    protected $value;
    /**
     * @var string
     */
    protected $lastCorrectionDate;

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
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
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * @param float $value
     *
     * @return self
     */
    public function setValue(float $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastCorrectionDate(): string
    {
        return $this->lastCorrectionDate;
    }

    /**
     * @param string $lastCorrectionDate
     *
     * @return self
     */
    public function setLastCorrectionDate(string $lastCorrectionDate): self
    {
        $this->initialized['lastCorrectionDate'] = true;
        $this->lastCorrectionDate = $lastCorrectionDate;

        return $this;
    }
}
