<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class GetProject
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
     * @var GetEmployeeSimple
     */
    protected $projectManager;
    /**
     * @var ProjectStatus
     */
    protected $projectStatus;
    /**
     * @var string
     */
    protected $hoursRateType;
    /**
     * @var bool
     */
    protected $abnormalAddress;
    /**
     * @var string
     */
    protected $abnormalPersonId;
    /**
     * @var string
     */
    protected $abnormalOrganizationId;
    /**
     * @var GetOrganizationSimple
     */
    protected $organization;
    /**
     * @var GetPersonSimple
     */
    protected $person;
    /**
     * @var GetSeparateInvoiceRecipient
     */
    protected $separateInvoiceRecipient;
    /**
     * @var GetContactSimple
     */
    protected $contact;
    /**
     * @var GetMyOrganizationProfileSimple
     */
    protected $myOrganizationProfile;
    /**
     * @var GetPaymentTerm
     */
    protected $divergentPaymentTerm;
    /**
     * @var GetEmployeeSimple[]
     */
    protected $employees;
    /**
     * @var GetTeamSimple[]
     */
    protected $teams;
    /**
     * @var Budget
     */
    protected $budget;
    /**
     * @var string
     */
    protected $abnormalContactId;
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
     * @var bool
     */
    protected $isReverseBilling;
    /**
     * @var bool
     */
    protected $isInvoiceApproval;
    /**
     * @var GetProjectSimple
     */
    protected $copiedFromProject;
    /**
     * @var string
     */
    protected $myOrganizationProfileId;
    /**
     * @var string
     */
    protected $personId;
    /**
     * @var string
     */
    protected $organizationId;
    /**
     * @var string
     */
    protected $contactId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var bool
     */
    protected $billable;
    /**
     * @var bool
     */
    protected $canRegisterMileage;
    /**
     * @var string
     */
    protected $projectNumber;
    /**
     * @var string
     */
    protected $note;
    /**
     * @var string
     */
    protected $startDate;
    /**
     * @var string
     */
    protected $endDate;
    /**
     * @var string
     */
    protected $invoiceReference;

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
     * @return ProjectStatus
     */
    public function getProjectStatus(): ProjectStatus
    {
        return $this->projectStatus;
    }

    /**
     * @param ProjectStatus $projectStatus
     *
     * @return self
     */
    public function setProjectStatus(ProjectStatus $projectStatus): self
    {
        $this->initialized['projectStatus'] = true;
        $this->projectStatus = $projectStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getHoursRateType(): string
    {
        return $this->hoursRateType;
    }

    /**
     * @param string $hoursRateType
     *
     * @return self
     */
    public function setHoursRateType(string $hoursRateType): self
    {
        $this->initialized['hoursRateType'] = true;
        $this->hoursRateType = $hoursRateType;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAbnormalAddress(): bool
    {
        return $this->abnormalAddress;
    }

    /**
     * @param bool $abnormalAddress
     *
     * @return self
     */
    public function setAbnormalAddress(bool $abnormalAddress): self
    {
        $this->initialized['abnormalAddress'] = true;
        $this->abnormalAddress = $abnormalAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getAbnormalPersonId(): string
    {
        return $this->abnormalPersonId;
    }

    /**
     * @param string $abnormalPersonId
     *
     * @return self
     */
    public function setAbnormalPersonId(string $abnormalPersonId): self
    {
        $this->initialized['abnormalPersonId'] = true;
        $this->abnormalPersonId = $abnormalPersonId;

        return $this;
    }

    /**
     * @return string
     */
    public function getAbnormalOrganizationId(): string
    {
        return $this->abnormalOrganizationId;
    }

    /**
     * @param string $abnormalOrganizationId
     *
     * @return self
     */
    public function setAbnormalOrganizationId(string $abnormalOrganizationId): self
    {
        $this->initialized['abnormalOrganizationId'] = true;
        $this->abnormalOrganizationId = $abnormalOrganizationId;

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
     * @return GetSeparateInvoiceRecipient
     */
    public function getSeparateInvoiceRecipient(): GetSeparateInvoiceRecipient
    {
        return $this->separateInvoiceRecipient;
    }

    /**
     * @param GetSeparateInvoiceRecipient $separateInvoiceRecipient
     *
     * @return self
     */
    public function setSeparateInvoiceRecipient(GetSeparateInvoiceRecipient $separateInvoiceRecipient): self
    {
        $this->initialized['separateInvoiceRecipient'] = true;
        $this->separateInvoiceRecipient = $separateInvoiceRecipient;

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
     * @return GetMyOrganizationProfileSimple
     */
    public function getMyOrganizationProfile(): GetMyOrganizationProfileSimple
    {
        return $this->myOrganizationProfile;
    }

    /**
     * @param GetMyOrganizationProfileSimple $myOrganizationProfile
     *
     * @return self
     */
    public function setMyOrganizationProfile(GetMyOrganizationProfileSimple $myOrganizationProfile): self
    {
        $this->initialized['myOrganizationProfile'] = true;
        $this->myOrganizationProfile = $myOrganizationProfile;

        return $this;
    }

    /**
     * @return GetPaymentTerm
     */
    public function getDivergentPaymentTerm(): GetPaymentTerm
    {
        return $this->divergentPaymentTerm;
    }

    /**
     * @param GetPaymentTerm $divergentPaymentTerm
     *
     * @return self
     */
    public function setDivergentPaymentTerm(GetPaymentTerm $divergentPaymentTerm): self
    {
        $this->initialized['divergentPaymentTerm'] = true;
        $this->divergentPaymentTerm = $divergentPaymentTerm;

        return $this;
    }

    /**
     * @return GetEmployeeSimple[]
     */
    public function getEmployees(): array
    {
        return $this->employees;
    }

    /**
     * @param GetEmployeeSimple[] $employees
     *
     * @return self
     */
    public function setEmployees(array $employees): self
    {
        $this->initialized['employees'] = true;
        $this->employees = $employees;

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
     * @return Budget
     */
    public function getBudget(): Budget
    {
        return $this->budget;
    }

    /**
     * @param Budget $budget
     *
     * @return self
     */
    public function setBudget(Budget $budget): self
    {
        $this->initialized['budget'] = true;
        $this->budget = $budget;

        return $this;
    }

    /**
     * @return string
     */
    public function getAbnormalContactId(): string
    {
        return $this->abnormalContactId;
    }

    /**
     * @param string $abnormalContactId
     *
     * @return self
     */
    public function setAbnormalContactId(string $abnormalContactId): self
    {
        $this->initialized['abnormalContactId'] = true;
        $this->abnormalContactId = $abnormalContactId;

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
     * @return bool
     */
    public function getIsReverseBilling(): bool
    {
        return $this->isReverseBilling;
    }

    /**
     * @param bool $isReverseBilling
     *
     * @return self
     */
    public function setIsReverseBilling(bool $isReverseBilling): self
    {
        $this->initialized['isReverseBilling'] = true;
        $this->isReverseBilling = $isReverseBilling;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsInvoiceApproval(): bool
    {
        return $this->isInvoiceApproval;
    }

    /**
     * @param bool $isInvoiceApproval
     *
     * @return self
     */
    public function setIsInvoiceApproval(bool $isInvoiceApproval): self
    {
        $this->initialized['isInvoiceApproval'] = true;
        $this->isInvoiceApproval = $isInvoiceApproval;

        return $this;
    }

    /**
     * @return GetProjectSimple
     */
    public function getCopiedFromProject(): GetProjectSimple
    {
        return $this->copiedFromProject;
    }

    /**
     * @param GetProjectSimple $copiedFromProject
     *
     * @return self
     */
    public function setCopiedFromProject(GetProjectSimple $copiedFromProject): self
    {
        $this->initialized['copiedFromProject'] = true;
        $this->copiedFromProject = $copiedFromProject;

        return $this;
    }

    /**
     * @return string
     */
    public function getMyOrganizationProfileId(): string
    {
        return $this->myOrganizationProfileId;
    }

    /**
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
     * @return string
     */
    public function getPersonId(): string
    {
        return $this->personId;
    }

    /**
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
     * @return string
     */
    public function getOrganizationId(): string
    {
        return $this->organizationId;
    }

    /**
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
     * @return string
     */
    public function getContactId(): string
    {
        return $this->contactId;
    }

    /**
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
     * @return bool
     */
    public function getBillable(): bool
    {
        return $this->billable;
    }

    /**
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
     * @return bool
     */
    public function getCanRegisterMileage(): bool
    {
        return $this->canRegisterMileage;
    }

    /**
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
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
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
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
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
     * @return string
     */
    public function getInvoiceReference(): string
    {
        return $this->invoiceReference;
    }

    /**
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
