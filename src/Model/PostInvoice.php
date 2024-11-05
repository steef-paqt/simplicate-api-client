<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class PostInvoice
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
    protected $paymentTermId;
    /**
     * @var PostInvoiceLine[]
     */
    protected $invoiceLines;
    /**
     * @var string
     */
    protected $statusId;
    /**
     * @var string
     */
    protected $myOrganizationProfileId;
    /**
     * @var string
     */
    protected $organizationId;
    /**
     * @var string
     */
    protected $personId;
    /**
     * @var string
     */
    protected $date;
    /**
     * @var string
     */
    protected $subject;
    /**
     * @var string
     */
    protected $reference;
    /**
     * @var string
     */
    protected $projectId;
    /**
     * @var string
     */
    protected $comments;

    /**
     * @return string
     */
    public function getPaymentTermId(): string
    {
        return $this->paymentTermId;
    }

    /**
     * @param string $paymentTermId
     *
     * @return self
     */
    public function setPaymentTermId(string $paymentTermId): self
    {
        $this->initialized['paymentTermId'] = true;
        $this->paymentTermId = $paymentTermId;

        return $this;
    }

    /**
     * @return PostInvoiceLine[]
     */
    public function getInvoiceLines(): array
    {
        return $this->invoiceLines;
    }

    /**
     * @param PostInvoiceLine[] $invoiceLines
     *
     * @return self
     */
    public function setInvoiceLines(array $invoiceLines): self
    {
        $this->initialized['invoiceLines'] = true;
        $this->invoiceLines = $invoiceLines;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusId(): string
    {
        return $this->statusId;
    }

    /**
     * @param string $statusId
     *
     * @return self
     */
    public function setStatusId(string $statusId): self
    {
        $this->initialized['statusId'] = true;
        $this->statusId = $statusId;

        return $this;
    }

    /**
     * @return string
     */
    public function getMyOrganizationProfileId(): string
    {
        return $this->myOrganizationProfileId;
    }

    /**
     * @param string $myOrganizationProfileId
     *
     * @return self
     */
    public function setMyOrganizationProfileId(string $myOrganizationProfileId): self
    {
        $this->initialized['myOrganizationProfileId'] = true;
        $this->myOrganizationProfileId = $myOrganizationProfileId;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrganizationId(): string
    {
        return $this->organizationId;
    }

    /**
     * @param string $organizationId
     *
     * @return self
     */
    public function setOrganizationId(string $organizationId): self
    {
        $this->initialized['organizationId'] = true;
        $this->organizationId = $organizationId;

        return $this;
    }

    /**
     * @return string
     */
    public function getPersonId(): string
    {
        return $this->personId;
    }

    /**
     * @param string $personId
     *
     * @return self
     */
    public function setPersonId(string $personId): self
    {
        $this->initialized['personId'] = true;
        $this->personId = $personId;

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
    public function getReference(): string
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     *
     * @return self
     */
    public function setReference(string $reference): self
    {
        $this->initialized['reference'] = true;
        $this->reference = $reference;

        return $this;
    }

    /**
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     * @param string $projectId
     *
     * @return self
     */
    public function setProjectId(string $projectId): self
    {
        $this->initialized['projectId'] = true;
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * @return string
     */
    public function getComments(): string
    {
        return $this->comments;
    }

    /**
     * @param string $comments
     *
     * @return self
     */
    public function setComments(string $comments): self
    {
        $this->initialized['comments'] = true;
        $this->comments = $comments;

        return $this;
    }
}
