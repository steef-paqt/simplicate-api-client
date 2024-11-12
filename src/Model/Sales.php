<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class Sales extends AbstractModel
{
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
