<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class PostDocumentLinkedTo
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
     * See /sales/sale
     *
     * @var string
     */
    protected $salesId;
    /**
     * See /projects/project
     *
     * @var string
     */
    protected $projectId;
    /**
     * See /hrm/employee
     *
     * @var string
     */
    protected $employeeId;
    /**
     * See /invoices/invoice
     *
     * @var string
     */
    protected $invoiceId;
    /**
     * See /crm/person
     *
     * @var string
     */
    protected $personId;
    /**
     * See /crm/organization
     *
     * @var string
     */
    protected $organizationId;

    /**
     * See /sales/sale
     *
     * @return string
     */
    public function getSalesId(): string
    {
        return $this->salesId;
    }

    /**
     * See /sales/sale
     *
     * @param string $salesId
     *
     * @return self
     */
    public function setSalesId(string $salesId): self
    {
        $this->initialized['salesId'] = true;
        $this->salesId = $salesId;

        return $this;
    }

    /**
     * See /projects/project
     *
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     * See /projects/project
     *
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
     * See /hrm/employee
     *
     * @return string
     */
    public function getEmployeeId(): string
    {
        return $this->employeeId;
    }

    /**
     * See /hrm/employee
     *
     * @param string $employeeId
     *
     * @return self
     */
    public function setEmployeeId(string $employeeId): self
    {
        $this->initialized['employeeId'] = true;
        $this->employeeId = $employeeId;

        return $this;
    }

    /**
     * See /invoices/invoice
     *
     * @return string
     */
    public function getInvoiceId(): string
    {
        return $this->invoiceId;
    }

    /**
     * See /invoices/invoice
     *
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
     * See /crm/person
     *
     * @return string
     */
    public function getPersonId(): string
    {
        return $this->personId;
    }

    /**
     * See /crm/person
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
     * See /crm/organization
     *
     * @return string
     */
    public function getOrganizationId(): string
    {
        return $this->organizationId;
    }

    /**
     * See /crm/organization
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
}
