<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class GetSales
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
    protected $responsibleEmployee;
    /**
     * @var GetPersonSimple
     */
    protected $person;
    /**
     * @var GetOrganizationSimple
     */
    protected $organization;
    /**
     * @var SalesProgress
     */
    protected $progress;
    /**
     * @var SalesSource
     */
    protected $source;
    /**
     * @var SalesStatus
     */
    protected $status;
    /**
     * @var GetSeparateInvoiceRecipient
     */
    protected $separateInvoiceRecipient;
    /**
     * @var GetTeamSimple[]
     */
    protected $teams;
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
    protected $statusUpdatedAt;
    /**
     * @var string
     */
    protected $simplicateUrl;
    /**
     * @var GetProjectSimple
     */
    protected $linkedProject;
    /**
     * @var string
     */
    protected $myOrganizationProfileId;
    /**
     * @var string
     */
    protected $organizationId;
    /**
     * @var string
     */
    protected $personId;
    /**
     * @var string
     */
    protected $contactId;
    /**
     * @var SalesReason
     */
    protected $reason;
    /**
     * @var ContactPerson
     */
    protected $contact;
    /**
     * @var string
     */
    protected $subject;
    /**
     * @var string
     */
    protected $startDate;
    /**
     * @var string
     */
    protected $expectedClosingDate;
    /**
     * @var float
     */
    protected $expectedRevenue;
    /**
     * @var string
     */
    protected $note;
    /**
     * @var int
     */
    protected $chanceToScore;
    /**
     * @var LostToCompetitor
     */
    protected $lostToCompetitor;

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
    public function getResponsibleEmployee(): GetEmployeeSimple
    {
        return $this->responsibleEmployee;
    }

    /**
     * @param GetEmployeeSimple $responsibleEmployee
     *
     * @return self
     */
    public function setResponsibleEmployee(GetEmployeeSimple $responsibleEmployee): self
    {
        $this->initialized['responsibleEmployee'] = true;
        $this->responsibleEmployee = $responsibleEmployee;

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
     * @return SalesProgress
     */
    public function getProgress(): SalesProgress
    {
        return $this->progress;
    }

    /**
     * @param SalesProgress $progress
     *
     * @return self
     */
    public function setProgress(SalesProgress $progress): self
    {
        $this->initialized['progress'] = true;
        $this->progress = $progress;

        return $this;
    }

    /**
     * @return SalesSource
     */
    public function getSource(): SalesSource
    {
        return $this->source;
    }

    /**
     * @param SalesSource $source
     *
     * @return self
     */
    public function setSource(SalesSource $source): self
    {
        $this->initialized['source'] = true;
        $this->source = $source;

        return $this;
    }

    /**
     * @return SalesStatus
     */
    public function getStatus(): SalesStatus
    {
        return $this->status;
    }

    /**
     * @param SalesStatus $status
     *
     * @return self
     */
    public function setStatus(SalesStatus $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

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
    public function getStatusUpdatedAt(): string
    {
        return $this->statusUpdatedAt;
    }

    /**
     * @param string $statusUpdatedAt
     *
     * @return self
     */
    public function setStatusUpdatedAt(string $statusUpdatedAt): self
    {
        $this->initialized['statusUpdatedAt'] = true;
        $this->statusUpdatedAt = $statusUpdatedAt;

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
     * @return GetProjectSimple
     */
    public function getLinkedProject(): GetProjectSimple
    {
        return $this->linkedProject;
    }

    /**
     * @param GetProjectSimple $linkedProject
     *
     * @return self
     */
    public function setLinkedProject(GetProjectSimple $linkedProject): self
    {
        $this->initialized['linkedProject'] = true;
        $this->linkedProject = $linkedProject;

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
     * @return SalesReason
     */
    public function getReason(): SalesReason
    {
        return $this->reason;
    }

    /**
     * @param SalesReason $reason
     *
     * @return self
     */
    public function setReason(SalesReason $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;

        return $this;
    }

    /**
     * @return ContactPerson
     */
    public function getContact(): ContactPerson
    {
        return $this->contact;
    }

    /**
     * @param ContactPerson $contact
     *
     * @return self
     */
    public function setContact(ContactPerson $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     *
     * @return self
     */
    public function setSubject(string $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;

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
    public function getExpectedClosingDate(): string
    {
        return $this->expectedClosingDate;
    }

    /**
     * @param string $expectedClosingDate
     *
     * @return self
     */
    public function setExpectedClosingDate(string $expectedClosingDate): self
    {
        $this->initialized['expectedClosingDate'] = true;
        $this->expectedClosingDate = $expectedClosingDate;

        return $this;
    }

    /**
     * @return float
     */
    public function getExpectedRevenue(): float
    {
        return $this->expectedRevenue;
    }

    /**
     * @param float $expectedRevenue
     *
     * @return self
     */
    public function setExpectedRevenue(float $expectedRevenue): self
    {
        $this->initialized['expectedRevenue'] = true;
        $this->expectedRevenue = $expectedRevenue;

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
     * @return int
     */
    public function getChanceToScore(): int
    {
        return $this->chanceToScore;
    }

    /**
     * @param int $chanceToScore
     *
     * @return self
     */
    public function setChanceToScore(int $chanceToScore): self
    {
        $this->initialized['chanceToScore'] = true;
        $this->chanceToScore = $chanceToScore;

        return $this;
    }

    /**
     * @return LostToCompetitor
     */
    public function getLostToCompetitor(): LostToCompetitor
    {
        return $this->lostToCompetitor;
    }

    /**
     * @param LostToCompetitor $lostToCompetitor
     *
     * @return self
     */
    public function setLostToCompetitor(LostToCompetitor $lostToCompetitor): self
    {
        $this->initialized['lostToCompetitor'] = true;
        $this->lostToCompetitor = $lostToCompetitor;

        return $this;
    }
}
