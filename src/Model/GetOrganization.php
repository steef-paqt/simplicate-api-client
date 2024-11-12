<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class GetOrganization extends AbstractModel
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var GetAddress
     */
    protected $visitingAddress;
    /**
     * @var GetAddress
     */
    protected $postalAddress;
    /**
     * @var RelationType
     */
    protected $relationType;
    /**
     * @var Employee
     */
    protected $relationManager;
    /**
     * @var CustomerGroup
     */
    protected $customerGroup;
    /**
     * @var GetTeamSimple[]
     */
    protected $teams;
    /**
     * @var GetDebtor
     */
    protected $debtor;
    /**
     * @var OrganizationSize
     */
    protected $organizationsize;
    /**
     * @var ContactPerson[]
     */
    protected $linkedPersonsContacts;
    /**
     * @var Interest[]
     */
    protected $interests;
    /**
     * @var Accountancy
     */
    protected $accountancy;
    /**
     * @var GetCustomField[]
     */
    protected $customFields;
    /**
     * @var string
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $updatedAt;
    /**
     * @var string
     */
    protected $simplicateUrl;
    /**
     * @var SbiCode[]
     */
    protected $sbiCodes;
    /**
     * @var bool
     */
    protected $isActive;
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
     * @return GetAddress
     */
    public function getVisitingAddress(): GetAddress
    {
        return $this->visitingAddress;
    }

    /**
     * @param GetAddress $visitingAddress
     *
     * @return self
     */
    public function setVisitingAddress(GetAddress $visitingAddress): self
    {
        $this->initialized['visitingAddress'] = true;
        $this->visitingAddress = $visitingAddress;

        return $this;
    }

    /**
     * @return GetAddress
     */
    public function getPostalAddress(): GetAddress
    {
        return $this->postalAddress;
    }

    /**
     * @param GetAddress $postalAddress
     *
     * @return self
     */
    public function setPostalAddress(GetAddress $postalAddress): self
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
     * @return Employee
     */
    public function getRelationManager(): Employee
    {
        return $this->relationManager;
    }

    /**
     * @param Employee $relationManager
     *
     * @return self
     */
    public function setRelationManager(Employee $relationManager): self
    {
        $this->initialized['relationManager'] = true;
        $this->relationManager = $relationManager;

        return $this;
    }

    /**
     * @return CustomerGroup
     */
    public function getCustomerGroup(): CustomerGroup
    {
        return $this->customerGroup;
    }

    /**
     * @param CustomerGroup $customerGroup
     *
     * @return self
     */
    public function setCustomerGroup(CustomerGroup $customerGroup): self
    {
        $this->initialized['customerGroup'] = true;
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @return GetTeamSimple[]
     */
    public function getTeams(): array
    {
        return $this->teams;
    }

    /**
     * @param GetTeamSimple[] $teams
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
     * @return GetDebtor
     */
    public function getDebtor(): GetDebtor
    {
        return $this->debtor;
    }

    /**
     * @param GetDebtor $debtor
     *
     * @return self
     */
    public function setDebtor(GetDebtor $debtor): self
    {
        $this->initialized['debtor'] = true;
        $this->debtor = $debtor;

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
     * @return ContactPerson[]
     */
    public function getLinkedPersonsContacts(): array
    {
        return $this->linkedPersonsContacts;
    }

    /**
     * @param ContactPerson[] $linkedPersonsContacts
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
     * @return Interest[]
     */
    public function getInterests(): array
    {
        return $this->interests;
    }

    /**
     * @param Interest[] $interests
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
     * @return GetCustomField[]
     */
    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    /**
     * @param GetCustomField[] $customFields
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
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    /**
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getSimplicateUrl(): string
    {
        return $this->simplicateUrl;
    }

    /**
     * @param string $simplicateUrl
     *
     * @return self
     */
    public function setSimplicateUrl(string $simplicateUrl): self
    {
        $this->initialized['simplicateUrl'] = true;
        $this->simplicateUrl = $simplicateUrl;

        return $this;
    }

    /**
     * @return SbiCode[]
     */
    public function getSbiCodes(): array
    {
        return $this->sbiCodes;
    }

    /**
     * @param SbiCode[] $sbiCodes
     *
     * @return self
     */
    public function setSbiCodes(array $sbiCodes): self
    {
        $this->initialized['sbiCodes'] = true;
        $this->sbiCodes = $sbiCodes;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    /**
     * @param bool $isActive
     *
     * @return self
     */
    public function setIsActive(bool $isActive): self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;

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
