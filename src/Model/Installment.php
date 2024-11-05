<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class Installment
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
     * @var string
     */
    protected $name;
    /**
     * @var float
     */
    protected $percentage;
    /**
     * @var float
     */
    protected $price;
    /**
     * @var int
     */
    protected $order;
    /**
     * @var string
     */
    protected $expirationDate;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $invoicedDate;
    /**
     * @var string
     */
    protected $invoiceId;
    /**
     * @var string
     */
    protected $invoiceLineId;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * @return float
     */
    public function getPercentage(): float
    {
        return $this->percentage;
    }

    /**
     * @param float $percentage
     *
     * @return self
     */
    public function setPercentage(float $percentage): self
    {
        $this->initialized['percentage'] = true;
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     *
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;

        return $this;
    }

    /**
     * @return int
     */
    public function getOrder(): int
    {
        return $this->order;
    }

    /**
     * @param int $order
     *
     * @return self
     */
    public function setOrder(int $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpirationDate(): string
    {
        return $this->expirationDate;
    }

    /**
     * @param string $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(string $expirationDate): self
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoicedDate(): string
    {
        return $this->invoicedDate;
    }

    /**
     * @param string $invoicedDate
     *
     * @return self
     */
    public function setInvoicedDate(string $invoicedDate): self
    {
        $this->initialized['invoicedDate'] = true;
        $this->invoicedDate = $invoicedDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceId(): string
    {
        return $this->invoiceId;
    }

    /**
     * @param string $invoiceId
     *
     * @return self
     */
    public function setInvoiceId(string $invoiceId): self
    {
        $this->initialized['invoiceId'] = true;
        $this->invoiceId = $invoiceId;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceLineId(): string
    {
        return $this->invoiceLineId;
    }

    /**
     * @param string $invoiceLineId
     *
     * @return self
     */
    public function setInvoiceLineId(string $invoiceLineId): self
    {
        $this->initialized['invoiceLineId'] = true;
        $this->invoiceLineId = $invoiceLineId;

        return $this;
    }
}
