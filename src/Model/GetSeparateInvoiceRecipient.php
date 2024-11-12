<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class GetSeparateInvoiceRecipient extends AbstractModel
{
    /**
     * @var GetOrganizationSimple
     */
    protected $organization;
    /**
     * @var GetPersonSimple
     */
    protected $person;
    /**
     * @var GetContactSimple
     */
    protected $contact;
    /**
     * @var bool
     */
    protected $isSeparateInvoiceRecipient;

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
     * @return GetContactSimple
     */
    public function getContact(): GetContactSimple
    {
        return $this->contact;
    }

    /**
     * @param GetContactSimple $contact
     *
     * @return self
     */
    public function setContact(GetContactSimple $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;

        return $this;
    }

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
