<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class Journal
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
    protected $journalizeDate;
    /**
     * @var string
     */
    protected $invoiceDate;
    /**
     * @var string
     */
    protected $invoiceNumber;
    /**
     * @var string
     */
    protected $dueDate;
    /**
     * @var string
     */
    protected $subject;
    /**
     * @var string
     */
    protected $relationId;
    /**
     * @var float
     */
    protected $amountExcl;
    /**
     * @var float
     */
    protected $amountIncl;
    /**
     * @var bool
     */
    protected $autocollect;
    /**
     * @var RevenueGroup
     */
    protected $revenuegroup;
    /**
     * @var JournalLine[]
     */
    protected $journalLines;
    /**
     * @var JournalVat[]
     */
    protected $vat;

    /**
     * @return string
     */
    public function getJournalizeDate(): string
    {
        return $this->journalizeDate;
    }

    /**
     * @param string $journalizeDate
     *
     * @return self
     */
    public function setJournalizeDate(string $journalizeDate): self
    {
        $this->initialized['journalizeDate'] = true;
        $this->journalizeDate = $journalizeDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceDate(): string
    {
        return $this->invoiceDate;
    }

    /**
     * @param string $invoiceDate
     *
     * @return self
     */
    public function setInvoiceDate(string $invoiceDate): self
    {
        $this->initialized['invoiceDate'] = true;
        $this->invoiceDate = $invoiceDate;

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
     * @return string
     */
    public function getDueDate(): string
    {
        return $this->dueDate;
    }

    /**
     * @param string $dueDate
     *
     * @return self
     */
    public function setDueDate(string $dueDate): self
    {
        $this->initialized['dueDate'] = true;
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     *
     * @return self
     */
    public function setSubject(string $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;

        return $this;
    }

    /**
     * @return string
     */
    public function getRelationId(): string
    {
        return $this->relationId;
    }

    /**
     * @param string $relationId
     *
     * @return self
     */
    public function setRelationId(string $relationId): self
    {
        $this->initialized['relationId'] = true;
        $this->relationId = $relationId;

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

    /**
     * @return float
     */
    public function getAmountIncl(): float
    {
        return $this->amountIncl;
    }

    /**
     * @param float $amountIncl
     *
     * @return self
     */
    public function setAmountIncl(float $amountIncl): self
    {
        $this->initialized['amountIncl'] = true;
        $this->amountIncl = $amountIncl;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAutocollect(): bool
    {
        return $this->autocollect;
    }

    /**
     * @param bool $autocollect
     *
     * @return self
     */
    public function setAutocollect(bool $autocollect): self
    {
        $this->initialized['autocollect'] = true;
        $this->autocollect = $autocollect;

        return $this;
    }

    /**
     * @return RevenueGroup
     */
    public function getRevenuegroup(): RevenueGroup
    {
        return $this->revenuegroup;
    }

    /**
     * @param RevenueGroup $revenuegroup
     *
     * @return self
     */
    public function setRevenuegroup(RevenueGroup $revenuegroup): self
    {
        $this->initialized['revenuegroup'] = true;
        $this->revenuegroup = $revenuegroup;

        return $this;
    }

    /**
     * @return JournalLine[]
     */
    public function getJournalLines(): array
    {
        return $this->journalLines;
    }

    /**
     * @param JournalLine[] $journalLines
     *
     * @return self
     */
    public function setJournalLines(array $journalLines): self
    {
        $this->initialized['journalLines'] = true;
        $this->journalLines = $journalLines;

        return $this;
    }

    /**
     * @return JournalVat[]
     */
    public function getVat(): array
    {
        return $this->vat;
    }

    /**
     * @param JournalVat[] $vat
     *
     * @return self
     */
    public function setVat(array $vat): self
    {
        $this->initialized['vat'] = true;
        $this->vat = $vat;

        return $this;
    }
}
