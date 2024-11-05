<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class GetPerson
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
    protected $id;
    /**
     * @var string
     */
    protected $genderId;
    /**
     * @var bool
     */
    protected $useCustomSalutation;
    /**
     * @var string
     */
    protected $customSalutation;
    /**
     * @var GetInterest[]
     */
    protected $interests;
    /**
     * @var string
     */
    protected $simplicateUrl;
    /**
     * @var GetAddress[]
     */
    protected $address;
    /**
     * @var Employee
     */
    protected $relationManager;
    /**
     * @var GetTeamSimple[]
     */
    protected $teams;
    /**
     * @var int
     */
    protected $isEmployee;
    /**
     * @var OrganizationContact[]
     */
    protected $linkedAsContactToOrganization;
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
     * @var bool
     */
    protected $isActive;
    /**
     * @var RelationType
     */
    protected $relationType;
    /**
     * @var string
     */
    protected $gender;
    /**
     * @var string
     */
    protected $initials;
    /**
     * @var string
     */
    protected $firstName;
    /**
     * @var string
     */
    protected $familyNamePrefix;
    /**
     * @var string
     */
    protected $familyName;
    /**
     * @var string
     */
    protected $fullName;
    /**
     * @var string
     */
    protected $dateOfBirth;
    /**
     * @var string
     */
    protected $note;
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
    protected $websiteUrl;
    /**
     * @var string
     */
    protected $twitterUrl;
    /**
     * @var string
     */
    protected $linkedinUrl;
    /**
     * @var string
     */
    protected $facebookUrl;
    /**
     * @var string
     */
    protected $relationNumber;
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
    protected $invoiceReceiver;
    /**
     * @var string
     */
    protected $mailingListEmail;
    /**
     * @var PersonMailingList[]
     */
    protected $mailingLists;

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
    public function getGenderId(): string
    {
        return $this->genderId;
    }

    /**
     * @param string $genderId
     *
     * @return self
     */
    public function setGenderId(string $genderId): self
    {
        $this->initialized['genderId'] = true;
        $this->genderId = $genderId;

        return $this;
    }

    /**
     * @return bool
     */
    public function getUseCustomSalutation(): bool
    {
        return $this->useCustomSalutation;
    }

    /**
     * @param bool $useCustomSalutation
     *
     * @return self
     */
    public function setUseCustomSalutation(bool $useCustomSalutation): self
    {
        $this->initialized['useCustomSalutation'] = true;
        $this->useCustomSalutation = $useCustomSalutation;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomSalutation(): string
    {
        return $this->customSalutation;
    }

    /**
     * @param string $customSalutation
     *
     * @return self
     */
    public function setCustomSalutation(string $customSalutation): self
    {
        $this->initialized['customSalutation'] = true;
        $this->customSalutation = $customSalutation;

        return $this;
    }

    /**
     * @return GetInterest[]
     */
    public function getInterests(): array
    {
        return $this->interests;
    }

    /**
     * @param GetInterest[] $interests
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
     * @return GetAddress[]
     */
    public function getAddress(): array
    {
        return $this->address;
    }

    /**
     * @param GetAddress[] $address
     *
     * @return self
     */
    public function setAddress(array $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

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
     * @return int
     */
    public function getIsEmployee(): int
    {
        return $this->isEmployee;
    }

    /**
     * @param int $isEmployee
     *
     * @return self
     */
    public function setIsEmployee(int $isEmployee): self
    {
        $this->initialized['isEmployee'] = true;
        $this->isEmployee = $isEmployee;

        return $this;
    }

    /**
     * @return OrganizationContact[]
     */
    public function getLinkedAsContactToOrganization(): array
    {
        return $this->linkedAsContactToOrganization;
    }

    /**
     * @param OrganizationContact[] $linkedAsContactToOrganization
     *
     * @return self
     */
    public function setLinkedAsContactToOrganization(array $linkedAsContactToOrganization): self
    {
        $this->initialized['linkedAsContactToOrganization'] = true;
        $this->linkedAsContactToOrganization = $linkedAsContactToOrganization;

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
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     *
     * @return self
     */
    public function setGender(string $gender): self
    {
        $this->initialized['gender'] = true;
        $this->gender = $gender;

        return $this;
    }

    /**
     * @return string
     */
    public function getInitials(): string
    {
        return $this->initials;
    }

    /**
     * @param string $initials
     *
     * @return self
     */
    public function setInitials(string $initials): self
    {
        $this->initialized['initials'] = true;
        $this->initials = $initials;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getFamilyNamePrefix(): string
    {
        return $this->familyNamePrefix;
    }

    /**
     * @param string $familyNamePrefix
     *
     * @return self
     */
    public function setFamilyNamePrefix(string $familyNamePrefix): self
    {
        $this->initialized['familyNamePrefix'] = true;
        $this->familyNamePrefix = $familyNamePrefix;

        return $this;
    }

    /**
     * @return string
     */
    public function getFamilyName(): string
    {
        return $this->familyName;
    }

    /**
     * @param string $familyName
     *
     * @return self
     */
    public function setFamilyName(string $familyName): self
    {
        $this->initialized['familyName'] = true;
        $this->familyName = $familyName;

        return $this;
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->fullName;
    }

    /**
     * @param string $fullName
     *
     * @return self
     */
    public function setFullName(string $fullName): self
    {
        $this->initialized['fullName'] = true;
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * @return string
     */
    public function getDateOfBirth(): string
    {
        return $this->dateOfBirth;
    }

    /**
     * @param string $dateOfBirth
     *
     * @return self
     */
    public function setDateOfBirth(string $dateOfBirth): self
    {
        $this->initialized['dateOfBirth'] = true;
        $this->dateOfBirth = $dateOfBirth;

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
    public function getWebsiteUrl(): string
    {
        return $this->websiteUrl;
    }

    /**
     * @param string $websiteUrl
     *
     * @return self
     */
    public function setWebsiteUrl(string $websiteUrl): self
    {
        $this->initialized['websiteUrl'] = true;
        $this->websiteUrl = $websiteUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getTwitterUrl(): string
    {
        return $this->twitterUrl;
    }

    /**
     * @param string $twitterUrl
     *
     * @return self
     */
    public function setTwitterUrl(string $twitterUrl): self
    {
        $this->initialized['twitterUrl'] = true;
        $this->twitterUrl = $twitterUrl;

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
     * @return string
     */
    public function getFacebookUrl(): string
    {
        return $this->facebookUrl;
    }

    /**
     * @param string $facebookUrl
     *
     * @return self
     */
    public function setFacebookUrl(string $facebookUrl): self
    {
        $this->initialized['facebookUrl'] = true;
        $this->facebookUrl = $facebookUrl;

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
     * @return string
     */
    public function getMailingListEmail(): string
    {
        return $this->mailingListEmail;
    }

    /**
     * @param string $mailingListEmail
     *
     * @return self
     */
    public function setMailingListEmail(string $mailingListEmail): self
    {
        $this->initialized['mailingListEmail'] = true;
        $this->mailingListEmail = $mailingListEmail;

        return $this;
    }

    /**
     * @return PersonMailingList[]
     */
    public function getMailingLists(): array
    {
        return $this->mailingLists;
    }

    /**
     * @param PersonMailingList[] $mailingLists
     *
     * @return self
     */
    public function setMailingLists(array $mailingLists): self
    {
        $this->initialized['mailingLists'] = true;
        $this->mailingLists = $mailingLists;

        return $this;
    }
}
