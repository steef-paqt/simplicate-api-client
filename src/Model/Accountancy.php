<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class Accountancy
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
     * @var bool
     */
    protected $isTaxUnitVat;
    /**
     * @var string
     */
    protected $vatNumberFe;
    /**
     * @var string
     */
    protected $taxUnitVatRole;
    /**
     * @var bool
     */
    protected $isTaxUnitVpb;
    /**
     * @var string
     */
    protected $taxUnitVpbRole;

    /**
     * @return bool
     */
    public function getIsTaxUnitVat(): bool
    {
        return $this->isTaxUnitVat;
    }

    /**
     * @param bool $isTaxUnitVat
     *
     * @return self
     */
    public function setIsTaxUnitVat(bool $isTaxUnitVat): self
    {
        $this->initialized['isTaxUnitVat'] = true;
        $this->isTaxUnitVat = $isTaxUnitVat;

        return $this;
    }

    /**
     * @return string
     */
    public function getVatNumberFe(): string
    {
        return $this->vatNumberFe;
    }

    /**
     * @param string $vatNumberFe
     *
     * @return self
     */
    public function setVatNumberFe(string $vatNumberFe): self
    {
        $this->initialized['vatNumberFe'] = true;
        $this->vatNumberFe = $vatNumberFe;

        return $this;
    }

    /**
     * @return string
     */
    public function getTaxUnitVatRole(): string
    {
        return $this->taxUnitVatRole;
    }

    /**
     * @param string $taxUnitVatRole
     *
     * @return self
     */
    public function setTaxUnitVatRole(string $taxUnitVatRole): self
    {
        $this->initialized['taxUnitVatRole'] = true;
        $this->taxUnitVatRole = $taxUnitVatRole;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsTaxUnitVpb(): bool
    {
        return $this->isTaxUnitVpb;
    }

    /**
     * @param bool $isTaxUnitVpb
     *
     * @return self
     */
    public function setIsTaxUnitVpb(bool $isTaxUnitVpb): self
    {
        $this->initialized['isTaxUnitVpb'] = true;
        $this->isTaxUnitVpb = $isTaxUnitVpb;

        return $this;
    }

    /**
     * @return string
     */
    public function getTaxUnitVpbRole(): string
    {
        return $this->taxUnitVpbRole;
    }

    /**
     * @param string $taxUnitVpbRole
     *
     * @return self
     */
    public function setTaxUnitVpbRole(string $taxUnitVpbRole): self
    {
        $this->initialized['taxUnitVpbRole'] = true;
        $this->taxUnitVpbRole = $taxUnitVpbRole;

        return $this;
    }
}
