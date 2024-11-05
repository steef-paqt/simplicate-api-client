<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class PostDuplicateSales
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
     *
     *
     * @var bool
     */
    protected $isNewSubject;
    /**
     *
     *
     * @var string
     */
    protected $subject;
    /**
     *
     *
     * @var bool
     */
    protected $isNewResponsibleEmployee;
    /**
     *
     *
     * @var string
     */
    protected $responsibleEmployeeId;
    /**
     *
     *
     * @var bool
     */
    protected $isNewOrganizationOrPerson;
    /**
     *
     *
     * @var string
     */
    protected $organizationId;
    /**
     *
     *
     * @var string
     */
    protected $personId;
    /**
     *
     *
     * @var string
     */
    protected $startDate;
    /**
     *
     *
     * @var string
     */
    protected $endDate;

    /**
     *
     *
     * @return bool
     */
    public function getIsNewSubject(): bool
    {
        return $this->isNewSubject;
    }

    /**
     *
     *
     * @param bool $isNewSubject
     *
     * @return self
     */
    public function setIsNewSubject(bool $isNewSubject): self
    {
        $this->initialized['isNewSubject'] = true;
        $this->isNewSubject = $isNewSubject;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     *
     *
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
     *
     *
     * @return bool
     */
    public function getIsNewResponsibleEmployee(): bool
    {
        return $this->isNewResponsibleEmployee;
    }

    /**
     *
     *
     * @param bool $isNewResponsibleEmployee
     *
     * @return self
     */
    public function setIsNewResponsibleEmployee(bool $isNewResponsibleEmployee): self
    {
        $this->initialized['isNewResponsibleEmployee'] = true;
        $this->isNewResponsibleEmployee = $isNewResponsibleEmployee;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getResponsibleEmployeeId(): string
    {
        return $this->responsibleEmployeeId;
    }

    /**
     *
     *
     * @param string $responsibleEmployeeId
     *
     * @return self
     */
    public function setResponsibleEmployeeId(string $responsibleEmployeeId): self
    {
        $this->initialized['responsibleEmployeeId'] = true;
        $this->responsibleEmployeeId = $responsibleEmployeeId;

        return $this;
    }

    /**
     *
     *
     * @return bool
     */
    public function getIsNewOrganizationOrPerson(): bool
    {
        return $this->isNewOrganizationOrPerson;
    }

    /**
     *
     *
     * @param bool $isNewOrganizationOrPerson
     *
     * @return self
     */
    public function setIsNewOrganizationOrPerson(bool $isNewOrganizationOrPerson): self
    {
        $this->initialized['isNewOrganizationOrPerson'] = true;
        $this->isNewOrganizationOrPerson = $isNewOrganizationOrPerson;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getOrganizationId(): string
    {
        return $this->organizationId;
    }

    /**
     *
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
     *
     *
     * @return string
     */
    public function getPersonId(): string
    {
        return $this->personId;
    }

    /**
     *
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
     *
     *
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     *
     *
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
     *
     *
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     *
     *
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
}
