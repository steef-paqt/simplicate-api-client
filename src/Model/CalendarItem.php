<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class CalendarItem
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
     * @var string
     */
    protected $id;
    /**
     *
     *
     * @var GetEmployeeSimple
     */
    protected $employee;
    /**
     *
     *
     * @var string
     */
    protected $hours;
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
     * @var string
     */
    protected $description;
    /**
     *
     *
     * @var string
     */
    protected $summary;
    /**
     *
     *
     * @var string
     */
    protected $location;
    /**
     *
     *
     * @var bool
     */
    protected $deleted;
    /**
     *
     *
     * @var string
     */
    protected $status;
    /**
     *
     *
     * @var bool
     */
    protected $isRecurring;
    /**
     *
     *
     * @var bool
     */
    protected $isReadOnly;
    /**
     *
     *
     * @var bool
     */
    protected $isTimeDefined;
    /**
     *
     *
     * @var string
     */
    protected $organizerEmail;
    /**
     *
     *
     * @var bool
     */
    protected $private;
    /**
     *
     *
     * @var bool
     */
    protected $obfuscate;
    /**
     *
     *
     * @var string
     */
    protected $hoursId;

    /**
     *
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     *
     *
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
     *
     *
     * @return GetEmployeeSimple
     */
    public function getEmployee(): GetEmployeeSimple
    {
        return $this->employee;
    }

    /**
     *
     *
     * @param GetEmployeeSimple $employee
     *
     * @return self
     */
    public function setEmployee(GetEmployeeSimple $employee): self
    {
        $this->initialized['employee'] = true;
        $this->employee = $employee;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getHours(): string
    {
        return $this->hours;
    }

    /**
     *
     *
     * @param string $hours
     *
     * @return self
     */
    public function setHours(string $hours): self
    {
        $this->initialized['hours'] = true;
        $this->hours = $hours;

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

    /**
     *
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     *
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getSummary(): string
    {
        return $this->summary;
    }

    /**
     *
     *
     * @param string $summary
     *
     * @return self
     */
    public function setSummary(string $summary): self
    {
        $this->initialized['summary'] = true;
        $this->summary = $summary;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     *
     *
     * @param string $location
     *
     * @return self
     */
    public function setLocation(string $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;

        return $this;
    }

    /**
     *
     *
     * @return bool
     */
    public function getDeleted(): bool
    {
        return $this->deleted;
    }

    /**
     *
     *
     * @param bool $deleted
     *
     * @return self
     */
    public function setDeleted(bool $deleted): self
    {
        $this->initialized['deleted'] = true;
        $this->deleted = $deleted;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     *
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     *
     *
     * @return bool
     */
    public function getIsRecurring(): bool
    {
        return $this->isRecurring;
    }

    /**
     *
     *
     * @param bool $isRecurring
     *
     * @return self
     */
    public function setIsRecurring(bool $isRecurring): self
    {
        $this->initialized['isRecurring'] = true;
        $this->isRecurring = $isRecurring;

        return $this;
    }

    /**
     *
     *
     * @return bool
     */
    public function getIsReadOnly(): bool
    {
        return $this->isReadOnly;
    }

    /**
     *
     *
     * @param bool $isReadOnly
     *
     * @return self
     */
    public function setIsReadOnly(bool $isReadOnly): self
    {
        $this->initialized['isReadOnly'] = true;
        $this->isReadOnly = $isReadOnly;

        return $this;
    }

    /**
     *
     *
     * @return bool
     */
    public function getIsTimeDefined(): bool
    {
        return $this->isTimeDefined;
    }

    /**
     *
     *
     * @param bool $isTimeDefined
     *
     * @return self
     */
    public function setIsTimeDefined(bool $isTimeDefined): self
    {
        $this->initialized['isTimeDefined'] = true;
        $this->isTimeDefined = $isTimeDefined;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getOrganizerEmail(): string
    {
        return $this->organizerEmail;
    }

    /**
     *
     *
     * @param string $organizerEmail
     *
     * @return self
     */
    public function setOrganizerEmail(string $organizerEmail): self
    {
        $this->initialized['organizerEmail'] = true;
        $this->organizerEmail = $organizerEmail;

        return $this;
    }

    /**
     *
     *
     * @return bool
     */
    public function getPrivate(): bool
    {
        return $this->private;
    }

    /**
     *
     *
     * @param bool $private
     *
     * @return self
     */
    public function setPrivate(bool $private): self
    {
        $this->initialized['private'] = true;
        $this->private = $private;

        return $this;
    }

    /**
     *
     *
     * @return bool
     */
    public function getObfuscate(): bool
    {
        return $this->obfuscate;
    }

    /**
     *
     *
     * @param bool $obfuscate
     *
     * @return self
     */
    public function setObfuscate(bool $obfuscate): self
    {
        $this->initialized['obfuscate'] = true;
        $this->obfuscate = $obfuscate;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getHoursId(): string
    {
        return $this->hoursId;
    }

    /**
     *
     *
     * @param string $hoursId
     *
     * @return self
     */
    public function setHoursId(string $hoursId): self
    {
        $this->initialized['hoursId'] = true;
        $this->hoursId = $hoursId;

        return $this;
    }
}
