<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class ReverseInvoice
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
    protected $id;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $date;
    /**
     * @var string
     */
    protected $invoiceNumber;
    /**
     * @var float
     */
    protected $price;
    /**
     * @var GetProjectSimple
     */
    protected $project;
    /**
     * @var GetInvoiceSimple
     */
    protected $invoice;

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
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber(): string
    {
        return $this->invoiceNumber;
    }

    /**
     * @param string $invoiceNumber
     *
     * @return self
     */
    public function setInvoiceNumber(string $invoiceNumber): self
    {
        $this->initialized['invoiceNumber'] = true;
        $this->invoiceNumber = $invoiceNumber;

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
     * @return GetProjectSimple
     */
    public function getProject(): GetProjectSimple
    {
        return $this->project;
    }

    /**
     * @param GetProjectSimple $project
     *
     * @return self
     */
    public function setProject(GetProjectSimple $project): self
    {
        $this->initialized['project'] = true;
        $this->project = $project;

        return $this;
    }

    /**
     * @return GetInvoiceSimple
     */
    public function getInvoice(): GetInvoiceSimple
    {
        return $this->invoice;
    }

    /**
     * @param GetInvoiceSimple $invoice
     *
     * @return self
     */
    public function setInvoice(GetInvoiceSimple $invoice): self
    {
        $this->initialized['invoice'] = true;
        $this->invoice = $invoice;

        return $this;
    }
}
