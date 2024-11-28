<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class GetInvoice extends AbstractModel
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $contactId;
    /**
     * @var PaymentTerm
     */
    protected $paymentTerm;
    /**
     * @var GetInvoiceLine[]
     */
    protected $invoiceLines;
    /**
     * @var string
     */
    protected $invoiceNumber;
    /**
     * @var InvoiceStatus
     */
    protected $status;
    /**
     * @var float
     */
    protected $totalExcludingVat;
    /**
     * @var float
     */
    protected $totalVat;
    /**
     * @var float
     */
    protected $totalIncludingVat;
    /**
     * @var float
     */
    protected $totalOutstanding;
    /**
     * @var GetOrganizationSimple
     */
    protected $organization;
    /**
     * @var GetPersonSimple
     */
    protected $person;
    /**
     * @var GetMyOrganizationProfileSimple
     */
    protected $myOrganizationProfile;
    /**
     * @var SubscriptionCycle
     */
    protected $subscriptionCycle;
    /**
     * @var ?GetProjectSimple
     */
    protected $project;
    /**
     * @var GetProjectSimple[]
     */
    protected $projects;
    /**
     * @var string
     */
    protected $sendingMethod;
    /**
     * @var string
     */
    protected $createdAt;
    /**
     * @var ?string
     */
    protected $updatedAt;
    /**
     * @var string
     */
    protected $simplicateUrl;
    /**
     * @var GetInvoiceReminder
     */
    protected $reminder;
    /**
     * @var string
     */
    protected $compositionType;
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
     * @var ?string
     */
    protected $date;
    /**
     * @var string
     */
    protected $subject;
    /**
     * @var string
     */
    protected $reference;
    /**
     * @var string
     */
    protected $projectId;
    /**
     * @var string
     */
    protected $comments;

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
     * @return PaymentTerm
     */
    public function getPaymentTerm(): PaymentTerm
    {
        return $this->paymentTerm;
    }

    /**
     * @param PaymentTerm $paymentTerm
     *
     * @return self
     */
    public function setPaymentTerm(PaymentTerm $paymentTerm): self
    {
        $this->initialized['paymentTerm'] = true;
        $this->paymentTerm = $paymentTerm;

        return $this;
    }

    /**
     * @return GetInvoiceLine[]
     */
    public function getInvoiceLines(): array
    {
        return $this->invoiceLines;
    }

    /**
     * @param GetInvoiceLine[] $invoiceLines
     *
     * @return self
     */
    public function setInvoiceLines(array $invoiceLines): self
    {
        $this->initialized['invoiceLines'] = true;
        $this->invoiceLines = $invoiceLines;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber(): string
    {
        return $this->invoiceNumber;
    }

    /**
     * @param string $invoiceNumber
     *
     * @return self
     */
    public function setInvoiceNumber(string $invoiceNumber): self
    {
        $this->initialized['invoiceNumber'] = true;
        $this->invoiceNumber = $invoiceNumber;

        return $this;
    }

    public function getStatus(): InvoiceStatus
    {
        return $this->status;
    }

    public function setStatus(string $id, string $label): self
    {
        $this->initialized['status'] = true;
        $this->status = (new InvoiceStatus())->setId($id)->setName($label);

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalExcludingVat(): float
    {
        return $this->totalExcludingVat;
    }

    /**
     * @param float $totalExcludingVat
     *
     * @return self
     */
    public function setTotalExcludingVat(float $totalExcludingVat): self
    {
        $this->initialized['totalExcludingVat'] = true;
        $this->totalExcludingVat = $totalExcludingVat;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalVat(): float
    {
        return $this->totalVat;
    }

    /**
     * @param float $totalVat
     *
     * @return self
     */
    public function setTotalVat(float $totalVat): self
    {
        $this->initialized['totalVat'] = true;
        $this->totalVat = $totalVat;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalIncludingVat(): float
    {
        return $this->totalIncludingVat;
    }

    /**
     * @param float $totalIncludingVat
     *
     * @return self
     */
    public function setTotalIncludingVat(float $totalIncludingVat): self
    {
        $this->initialized['totalIncludingVat'] = true;
        $this->totalIncludingVat = $totalIncludingVat;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalOutstanding(): float
    {
        return $this->totalOutstanding;
    }

    /**
     * @param float $totalOutstanding
     *
     * @return self
     */
    public function setTotalOutstanding(float $totalOutstanding): self
    {
        $this->initialized['totalOutstanding'] = true;
        $this->totalOutstanding = $totalOutstanding;

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
     * @return SubscriptionCycle
     */
    public function getSubscriptionCycle(): SubscriptionCycle
    {
        return $this->subscriptionCycle;
    }

    /**
     * @param SubscriptionCycle $subscriptionCycle
     *
     * @return self
     */
    public function setSubscriptionCycle(SubscriptionCycle $subscriptionCycle): self
    {
        $this->initialized['subscriptionCycle'] = true;
        $this->subscriptionCycle = $subscriptionCycle;

        return $this;
    }

    public function getProject(): ?GetProjectSimple
    {
        return $this->project;
    }

    /**
     * @param GetProjectSimple $project
     *
     * @return self
     */
    public function setProject(GetProjectSimple $project): self
    {
        $this->initialized['project'] = true;
        $this->project = $project;

        return $this;
    }

    /**
     * @return GetProjectSimple[]
     */
    public function getProjects(): array
    {
        return $this->projects;
    }

    /**
     * @param GetProjectSimple[] $projects
     *
     * @return self
     */
    public function setProjects(array $projects): self
    {
        $this->initialized['projects'] = true;
        $this->projects = $projects;

        return $this;
    }

    /**
     * @return string
     */
    public function getSendingMethod(): string
    {
        return $this->sendingMethod;
    }

    /**
     * @param string $sendingMethod
     *
     * @return self
     */
    public function setSendingMethod(string $sendingMethod): self
    {
        $this->initialized['sendingMethod'] = true;
        $this->sendingMethod = $sendingMethod;

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

    public function getUpdatedAt(): ?string
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
     * @return GetInvoiceReminder
     */
    public function getReminder(): GetInvoiceReminder
    {
        return $this->reminder;
    }

    /**
     * @param GetInvoiceReminder $reminder
     *
     * @return self
     */
    public function setReminder(GetInvoiceReminder $reminder): self
    {
        $this->initialized['reminder'] = true;
        $this->reminder = $reminder;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompositionType(): string
    {
        return $this->compositionType;
    }

    /**
     * @param string $compositionType
     *
     * @return self
     */
    public function setCompositionType(string $compositionType): self
    {
        $this->initialized['compositionType'] = true;
        $this->compositionType = $compositionType;

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

    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

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
    public function getReference(): string
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     *
     * @return self
     */
    public function setReference(string $reference): self
    {
        $this->initialized['reference'] = true;
        $this->reference = $reference;

        return $this;
    }

    /**
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
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
     * @return string
     */
    public function getComments(): string
    {
        return $this->comments;
    }

    /**
     * @param string $comments
     *
     * @return self
     */
    public function setComments(string $comments): self
    {
        $this->initialized['comments'] = true;
        $this->comments = $comments;

        return $this;
    }
}
