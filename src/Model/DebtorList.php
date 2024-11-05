<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class DebtorList
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
     * @var GetOrganizationDebtorSimple
     */
    protected $organization;
    /**
     * @var GetPersonDebtorSimple
     */
    protected $person;

    /**
     * @return GetOrganizationDebtorSimple
     */
    public function getOrganization(): GetOrganizationDebtorSimple
    {
        return $this->organization;
    }

    /**
     * @param GetOrganizationDebtorSimple $organization
     *
     * @return self
     */
    public function setOrganization(GetOrganizationDebtorSimple $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }

    /**
     * @return GetPersonDebtorSimple
     */
    public function getPerson(): GetPersonDebtorSimple
    {
        return $this->person;
    }

    /**
     * @param GetPersonDebtorSimple $person
     *
     * @return self
     */
    public function setPerson(GetPersonDebtorSimple $person): self
    {
        $this->initialized['person'] = true;
        $this->person = $person;

        return $this;
    }
}
