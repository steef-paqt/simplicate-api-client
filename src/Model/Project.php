<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class Project
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
    protected $myOrganizationProfileId;
    /**
     *
     *
     * @var string
     */
    protected $personId;
    /**
     *
     *
     * @var string
     */
    protected $organizationId;
    /**
     *
     *
     * @var string
     */
    protected $contactId;
    /**
     *
     *
     * @var string
     */
    protected $name;
    /**
     *
     *
     * @var bool
     */
    protected $billable;
    /**
     *
     *
     * @var bool
     */
    protected $canRegisterMileage;
    /**
     *
     *
     * @var string
     */
    protected $projectNumber;
    /**
     *
     *
     * @var string
     */
    protected $note;
    /**
     *
     *
     * @var string
     */
    protected $startDate;
    /**
     *
     *
     * @var string
     */
    protected $endDate;
    /**
     *
     *
     * @var string
     */
    protected $invoiceReference;

    /**
     *
     *
     * @return string
     */
    public function getMyOrganizationProfileId(): string
    {
        return $this->myOrganizationProfileId;
    }

    /**
     *
     *
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
     *
     *
     * @return string
     */
    public function getPersonId(): string
    {
        return $this->personId;
    }

    /**
     *
     *
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
     *
     *
     * @return string
     */
    public function getOrganizationId(): string
    {
        return $this->organizationId;
    }

    /**
     *
     *
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
     *
     *
     * @return string
     */
    public function getContactId(): string
    {
        return $this->contactId;
    }

    /**
     *
     *
     * @param string $contactId
     *
     * @return self
     */
    public function setContactId(string $contactId): self
    {
        $this->initialized['contactId'] = true;
        $this->contactId = $contactId;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     *
     *
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
     *
     *
     * @return bool
     */
    public function getBillable(): bool
    {
        return $this->billable;
    }

    /**
     *
     *
     * @param bool $billable
     *
     * @return self
     */
    public function setBillable(bool $billable): self
    {
        $this->initialized['billable'] = true;
        $this->billable = $billable;

        return $this;
    }

    /**
     *
     *
     * @return bool
     */
    public function getCanRegisterMileage(): bool
    {
        return $this->canRegisterMileage;
    }

    /**
     *
     *
     * @param bool $canRegisterMileage
     *
     * @return self
     */
    public function setCanRegisterMileage(bool $canRegisterMileage): self
    {
        $this->initialized['canRegisterMileage'] = true;
        $this->canRegisterMileage = $canRegisterMileage;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getProjectNumber(): string
    {
        return $this->projectNumber;
    }

    /**
     *
     *
     * @param string $projectNumber
     *
     * @return self
     */
    public function setProjectNumber(string $projectNumber): self
    {
        $this->initialized['projectNumber'] = true;
        $this->projectNumber = $projectNumber;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getNote(): string
    {
        return $this->note;
    }

    /**
     *
     *
     * @param string $note
     *
     * @return self
     */
    public function setNote(string $note): self
    {
        $this->initialized['note'] = true;
        $this->note = $note;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     *
     *
     * @param string $startDate
     *
     * @return self
     */
    public function setStartDate(string $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     *
     *
     * @param string $endDate
     *
     * @return self
     */
    public function setEndDate(string $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getInvoiceReference(): string
    {
        return $this->invoiceReference;
    }

    /**
     *
     *
     * @param string $invoiceReference
     *
     * @return self
     */
    public function setInvoiceReference(string $invoiceReference): self
    {
        $this->initialized['invoiceReference'] = true;
        $this->invoiceReference = $invoiceReference;

        return $this;
    }
}
