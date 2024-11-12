<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class JournalVat extends AbstractModel
{
    /**
     * @var string
     */
    protected $vatId;
    /**
     * @var float
     */
    protected $amountVat;
    /**
     * @var float
     */
    protected $amountExcl;

    /**
     * @return string
     */
    public function getVatId(): string
    {
        return $this->vatId;
    }

    /**
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
     * @return float
     */
    public function getAmountVat(): float
    {
        return $this->amountVat;
    }

    /**
     * @param float $amountVat
     *
     * @return self
     */
    public function setAmountVat(float $amountVat): self
    {
        $this->initialized['amountVat'] = true;
        $this->amountVat = $amountVat;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmountExcl(): float
    {
        return $this->amountExcl;
    }

    /**
     * @param float $amountExcl
     *
     * @return self
     */
    public function setAmountExcl(float $amountExcl): self
    {
        $this->initialized['amountExcl'] = true;
        $this->amountExcl = $amountExcl;

        return $this;
    }
}
