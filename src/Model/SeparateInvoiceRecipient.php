<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class SeparateInvoiceRecipient
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
    protected $isSeparateInvoiceRecipient;

    /**
     * @return bool
     */
    public function getIsSeparateInvoiceRecipient(): bool
    {
        return $this->isSeparateInvoiceRecipient;
    }

    /**
     * @param bool $isSeparateInvoiceRecipient
     *
     * @return self
     */
    public function setIsSeparateInvoiceRecipient(bool $isSeparateInvoiceRecipient): self
    {
        $this->initialized['isSeparateInvoiceRecipient'] = true;
        $this->isSeparateInvoiceRecipient = $isSeparateInvoiceRecipient;

        return $this;
    }
}
