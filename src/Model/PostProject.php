<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class PostProject
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
     * 'id' found in 'hrm/employee'
     *
     * @var string
     */
    protected $projectManagerId;
    /**
     * 'id' found in 'projects/projectstatus'
     *
     * @var string
     */
    protected $projectStatusId;
    /**
     *
     *
     * @var PostSeparateInvoiceRecipient
     */
    protected $separateInvoiceRecipient;
    /**
     * See /invoices/paymentterm. If you want to unset, please provide string value 'null'
     *
     * @var string
     */
    protected $divergentPaymentTermId;
    /**
     * See /hrm/team
     *
     * @var PostTeam[]
     */
    protected $teams;
    /**
     *
     *
     * @var PostCustomFieldValue[]
     */
    protected $customFields;
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
     * 'id' found in 'hrm/employee'
     *
     * @return string
     */
    public function getProjectManagerId(): string
    {
        return $this->projectManagerId;
    }

    /**
     * 'id' found in 'hrm/employee'
     *
     * @param string $projectManagerId
     *
     * @return self
     */
    public function setProjectManagerId(string $projectManagerId): self
    {
        $this->initialized['projectManagerId'] = true;
        $this->projectManagerId = $projectManagerId;

        return $this;
    }

    /**
     * 'id' found in 'projects/projectstatus'
     *
     * @return string
     */
    public function getProjectStatusId(): string
    {
        return $this->projectStatusId;
    }

    /**
     * 'id' found in 'projects/projectstatus'
     *
     * @param string $projectStatusId
     *
     * @return self
     */
    public function setProjectStatusId(string $projectStatusId): self
    {
        $this->initialized['projectStatusId'] = true;
        $this->projectStatusId = $projectStatusId;

        return $this;
    }

    /**
     *
     *
     * @return PostSeparateInvoiceRecipient
     */
    public function getSeparateInvoiceRecipient(): PostSeparateInvoiceRecipient
    {
        return $this->separateInvoiceRecipient;
    }

    /**
     *
     *
     * @param PostSeparateInvoiceRecipient $separateInvoiceRecipient
     *
     * @return self
     */
    public function setSeparateInvoiceRecipient(PostSeparateInvoiceRecipient $separateInvoiceRecipient): self
    {
        $this->initialized['separateInvoiceRecipient'] = true;
        $this->separateInvoiceRecipient = $separateInvoiceRecipient;

        return $this;
    }

    /**
     * See /invoices/paymentterm. If you want to unset, please provide string value 'null'
     *
     * @return string
     */
    public function getDivergentPaymentTermId(): string
    {
        return $this->divergentPaymentTermId;
    }

    /**
     * See /invoices/paymentterm. If you want to unset, please provide string value 'null'
     *
     * @param string $divergentPaymentTermId
     *
     * @return self
     */
    public function setDivergentPaymentTermId(string $divergentPaymentTermId): self
    {
        $this->initialized['divergentPaymentTermId'] = true;
        $this->divergentPaymentTermId = $divergentPaymentTermId;

        return $this;
    }

    /**
     * See /hrm/team
     *
     * @return PostTeam[]
     */
    public function getTeams(): array
    {
        return $this->teams;
    }

    /**
     * See /hrm/team
     *
     * @param PostTeam[] $teams
     *
     * @return self
     */
    public function setTeams(array $teams): self
    {
        $this->initialized['teams'] = true;
        $this->teams = $teams;

        return $this;
    }

    /**
     *
     *
     * @return PostCustomFieldValue[]
     */
    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    /**
     *
     *
     * @param PostCustomFieldValue[] $customFields
     *
     * @return self
     */
    public function setCustomFields(array $customFields): self
    {
        $this->initialized['customFields'] = true;
        $this->customFields = $customFields;

        return $this;
    }

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
