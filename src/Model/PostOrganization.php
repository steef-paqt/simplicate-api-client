<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class PostOrganization
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
     * @var PostAddress
     */
    protected $visitingAddress;
    /**
     * @var PostAddress
     */
    protected $postalAddress;
    /**
     * @var RelationType
     */
    protected $relationType;
    /**
     * @var PostEmployeeFk
     */
    protected $relationManager;
    /**
     * @var PostOrganizationFk
     */
    protected $customerGroup;
    /**
     * @var PostContactPersonFk[]
     */
    protected $linkedPersonsContacts;
    /**
     * @var PostInterest[]
     */
    protected $interests;
    /**
     * @var PostDebtor
     */
    protected $debtor;
    /**
     * See /hrm/team
     *
     * @var PostTeam[]
     */
    protected $teams;
    /**
     * @var Accountancy
     */
    protected $accountancy;
    /**
     * @var PostCustomFieldValue[]
     */
    protected $customFields;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $cocCode;
    /**
     * @var string
     */
    protected $vatNumber;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $phone;
    /**
     * @var string
     */
    protected $url;
    /**
     * @var string
     */
    protected $note;
    /**
     * @var string
     */
    protected $linkedinUrl;
    /**
     * @var bool
     */
    protected $hasDifferentPostalAddress;
    /**
     * @var Industry
     */
    protected $industry;
    /**
     * @var OrganizationSize
     */
    protected $organizationsize;
    /**
     * @var string
     */
    protected $invoiceReceiver;
    /**
     * @var bool
     */
    protected $allowAutocollect;
    /**
     * @var string
     */
    protected $bankAccount;
    /**
     * @var string
     */
    protected $bankBic;
    /**
     * @var string
     */
    protected $relationNumber;

    /**
     * @return PostAddress
     */
    public function getVisitingAddress(): PostAddress
    {
        return $this->visitingAddress;
    }

    /**
     * @param PostAddress $visitingAddress
     *
     * @return self
     */
    public function setVisitingAddress(PostAddress $visitingAddress): self
    {
        $this->initialized['visitingAddress'] = true;
        $this->visitingAddress = $visitingAddress;

        return $this;
    }

    /**
     * @return PostAddress
     */
    public function getPostalAddress(): PostAddress
    {
        return $this->postalAddress;
    }

    /**
     * @param PostAddress $postalAddress
     *
     * @return self
     */
    public function setPostalAddress(PostAddress $postalAddress): self
    {
        $this->initialized['postalAddress'] = true;
        $this->postalAddress = $postalAddress;

        return $this;
    }

    /**
     * @return RelationType
     */
    public function getRelationType(): RelationType
    {
        return $this->relationType;
    }

    /**
     * @param RelationType $relationType
     *
     * @return self
     */
    public function setRelationType(RelationType $relationType): self
    {
        $this->initialized['relationType'] = true;
        $this->relationType = $relationType;

        return $this;
    }

    /**
     * @return PostEmployeeFk
     */
    public function getRelationManager(): PostEmployeeFk
    {
        return $this->relationManager;
    }

    /**
     * @param PostEmployeeFk $relationManager
     *
     * @return self
     */
    public function setRelationManager(PostEmployeeFk $relationManager): self
    {
        $this->initialized['relationManager'] = true;
        $this->relationManager = $relationManager;

        return $this;
    }

    /**
     * @return PostOrganizationFk
     */
    public function getCustomerGroup(): PostOrganizationFk
    {
        return $this->customerGroup;
    }

    /**
     * @param PostOrganizationFk $customerGroup
     *
     * @return self
     */
    public function setCustomerGroup(PostOrganizationFk $customerGroup): self
    {
        $this->initialized['customerGroup'] = true;
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @return PostContactPersonFk[]
     */
    public function getLinkedPersonsContacts(): array
    {
        return $this->linkedPersonsContacts;
    }

    /**
     * @param PostContactPersonFk[] $linkedPersonsContacts
     *
     * @return self
     */
    public function setLinkedPersonsContacts(array $linkedPersonsContacts): self
    {
        $this->initialized['linkedPersonsContacts'] = true;
        $this->linkedPersonsContacts = $linkedPersonsContacts;

        return $this;
    }

    /**
     * @return PostInterest[]
     */
    public function getInterests(): array
    {
        return $this->interests;
    }

    /**
     * @param PostInterest[] $interests
     *
     * @return self
     */
    public function setInterests(array $interests): self
    {
        $this->initialized['interests'] = true;
        $this->interests = $interests;

        return $this;
    }

    /**
     * @return PostDebtor
     */
    public function getDebtor(): PostDebtor
    {
        return $this->debtor;
    }

    /**
     * @param PostDebtor $debtor
     *
     * @return self
     */
    public function setDebtor(PostDebtor $debtor): self
    {
        $this->initialized['debtor'] = true;
        $this->debtor = $debtor;

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
     * @return Accountancy
     */
    public function getAccountancy(): Accountancy
    {
        return $this->accountancy;
    }

    /**
     * @param Accountancy $accountancy
     *
     * @return self
     */
    public function setAccountancy(Accountancy $accountancy): self
    {
        $this->initialized['accountancy'] = true;
        $this->accountancy = $accountancy;

        return $this;
    }

    /**
     * @return PostCustomFieldValue[]
     */
    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    /**
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
    public function getCocCode(): string
    {
        return $this->cocCode;
    }

    /**
     * @param string $cocCode
     *
     * @return self
     */
    public function setCocCode(string $cocCode): self
    {
        $this->initialized['cocCode'] = true;
        $this->cocCode = $cocCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getVatNumber(): string
    {
        return $this->vatNumber;
    }

    /**
     * @param string $vatNumber
     *
     * @return self
     */
    public function setVatNumber(string $vatNumber): self
    {
        $this->initialized['vatNumber'] = true;
        $this->vatNumber = $vatNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(string $phone): self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }

    /**
     * @return string
     */
    public function getNote(): string
    {
        return $this->note;
    }

    /**
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
     * @return string
     */
    public function getLinkedinUrl(): string
    {
        return $this->linkedinUrl;
    }

    /**
     * @param string $linkedinUrl
     *
     * @return self
     */
    public function setLinkedinUrl(string $linkedinUrl): self
    {
        $this->initialized['linkedinUrl'] = true;
        $this->linkedinUrl = $linkedinUrl;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasDifferentPostalAddress(): bool
    {
        return $this->hasDifferentPostalAddress;
    }

    /**
     * @param bool $hasDifferentPostalAddress
     *
     * @return self
     */
    public function setHasDifferentPostalAddress(bool $hasDifferentPostalAddress): self
    {
        $this->initialized['hasDifferentPostalAddress'] = true;
        $this->hasDifferentPostalAddress = $hasDifferentPostalAddress;

        return $this;
    }

    /**
     * @return Industry
     */
    public function getIndustry(): Industry
    {
        return $this->industry;
    }

    /**
     * @param Industry $industry
     *
     * @return self
     */
    public function setIndustry(Industry $industry): self
    {
        $this->initialized['industry'] = true;
        $this->industry = $industry;

        return $this;
    }

    /**
     * @return OrganizationSize
     */
    public function getOrganizationsize(): OrganizationSize
    {
        return $this->organizationsize;
    }

    /**
     * @param OrganizationSize $organizationsize
     *
     * @return self
     */
    public function setOrganizationsize(OrganizationSize $organizationsize): self
    {
        $this->initialized['organizationsize'] = true;
        $this->organizationsize = $organizationsize;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceReceiver(): string
    {
        return $this->invoiceReceiver;
    }

    /**
     * @param string $invoiceReceiver
     *
     * @return self
     */
    public function setInvoiceReceiver(string $invoiceReceiver): self
    {
        $this->initialized['invoiceReceiver'] = true;
        $this->invoiceReceiver = $invoiceReceiver;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowAutocollect(): bool
    {
        return $this->allowAutocollect;
    }

    /**
     * @param bool $allowAutocollect
     *
     * @return self
     */
    public function setAllowAutocollect(bool $allowAutocollect): self
    {
        $this->initialized['allowAutocollect'] = true;
        $this->allowAutocollect = $allowAutocollect;

        return $this;
    }

    /**
     * @return string
     */
    public function getBankAccount(): string
    {
        return $this->bankAccount;
    }

    /**
     * @param string $bankAccount
     *
     * @return self
     */
    public function setBankAccount(string $bankAccount): self
    {
        $this->initialized['bankAccount'] = true;
        $this->bankAccount = $bankAccount;

        return $this;
    }

    /**
     * @return string
     */
    public function getBankBic(): string
    {
        return $this->bankBic;
    }

    /**
     * @param string $bankBic
     *
     * @return self
     */
    public function setBankBic(string $bankBic): self
    {
        $this->initialized['bankBic'] = true;
        $this->bankBic = $bankBic;

        return $this;
    }

    /**
     * @return string
     */
    public function getRelationNumber(): string
    {
        return $this->relationNumber;
    }

    /**
     * @param string $relationNumber
     *
     * @return self
     */
    public function setRelationNumber(string $relationNumber): self
    {
        $this->initialized['relationNumber'] = true;
        $this->relationNumber = $relationNumber;

        return $this;
    }
}
