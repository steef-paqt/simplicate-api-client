<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class PostSeparateInvoiceRecipient
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
     * See /crm/organization
     *
     * @var string
     */
    protected $organizationId;
    /**
     * See /crm/person
     *
     * @var string
     */
    protected $personId;
    /**
     * See 'linked_persons_contact' in /crm/organization, or 'linked_as_contact_to_organization' in /crm/person, or /crm/contactperson
     *
     * @var string
     */
    protected $contactId;
    /**
     * @var bool
     */
    protected $isSeparateInvoiceRecipient;

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
     * See 'linked_persons_contact' in /crm/organization, or 'linked_as_contact_to_organization' in /crm/person, or /crm/contactperson
     *
     * @return string
     */
    public function getContactId(): string
    {
        return $this->contactId;
    }

    /**
     * See 'linked_persons_contact' in /crm/organization, or 'linked_as_contact_to_organization' in /crm/person, or /crm/contactperson
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
