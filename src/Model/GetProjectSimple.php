<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class GetProjectSimple extends AbstractModel
{
    /**
     * @var string
     */
    protected $id = 'project:abc';
    /**
     * @var string
     */
    protected $name = 'My Project Name';
    /**
     * @var string
     */
    protected $projectNumber = 'P1000A';
    /**
     * @var GetOrganizationSimple
     */
    protected $organization;
    /**
     * @var GetPersonSimple
     */
    protected $person;
    /**
     * @var GetEmployeeSimple
     */
    protected $projectManager;
    /**
     * @var mixed
     */
    protected $separateInvoiceRecipient;
    /**
     * @var bool
     */
    protected $hasRegisterMileageEnabled;

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
     * @return string
     */
    public function getProjectNumber(): string
    {
        return $this->projectNumber;
    }

    /**
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
     * @return GetOrganizationSimple
     */
    public function getOrganization(): GetOrganizationSimple
    {
        return $this->organization;
    }

    /**
     * @param GetOrganizationSimple $organization
     *
     * @return self
     */
    public function setOrganization(GetOrganizationSimple $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }

    /**
     * @return GetPersonSimple
     */
    public function getPerson(): GetPersonSimple
    {
        return $this->person;
    }

    /**
     * @param GetPersonSimple $person
     *
     * @return self
     */
    public function setPerson(GetPersonSimple $person): self
    {
        $this->initialized['person'] = true;
        $this->person = $person;

        return $this;
    }

    /**
     * @return GetEmployeeSimple
     */
    public function getProjectManager(): GetEmployeeSimple
    {
        return $this->projectManager;
    }

    /**
     * @param GetEmployeeSimple $projectManager
     *
     * @return self
     */
    public function setProjectManager(GetEmployeeSimple $projectManager): self
    {
        $this->initialized['projectManager'] = true;
        $this->projectManager = $projectManager;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSeparateInvoiceRecipient()
    {
        return $this->separateInvoiceRecipient;
    }

    /**
     * @param mixed $separateInvoiceRecipient
     *
     * @return self
     */
    public function setSeparateInvoiceRecipient($separateInvoiceRecipient): self
    {
        $this->initialized['separateInvoiceRecipient'] = true;
        $this->separateInvoiceRecipient = $separateInvoiceRecipient;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasRegisterMileageEnabled(): bool
    {
        return $this->hasRegisterMileageEnabled;
    }

    /**
     * @param bool $hasRegisterMileageEnabled
     *
     * @return self
     */
    public function setHasRegisterMileageEnabled(bool $hasRegisterMileageEnabled): self
    {
        $this->initialized['hasRegisterMileageEnabled'] = true;
        $this->hasRegisterMileageEnabled = $hasRegisterMileageEnabled;

        return $this;
    }
}
