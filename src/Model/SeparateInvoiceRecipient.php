<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class SeparateInvoiceRecipient extends AbstractModel
{
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
