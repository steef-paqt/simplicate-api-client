<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class GetContactPerson
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
     * @var GetOrganizationSimple
     */
    protected $organization;
    /**
     * @var GetPersonSimple
     */
    protected $person;
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
     * @var string
     */
    protected $workFunction;
    /**
     * @var string
     */
    protected $workEmail;
    /**
     * @var string
     */
    protected $workPhone;
    /**
     * @var string
     */
    protected $workMobile;
    /**
     * @var string
     */
    protected $personId;

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
     * @return string
     */
    public function getWorkFunction(): string
    {
        return $this->workFunction;
    }

    /**
     * @param string $workFunction
     *
     * @return self
     */
    public function setWorkFunction(string $workFunction): self
    {
        $this->initialized['workFunction'] = true;
        $this->workFunction = $workFunction;

        return $this;
    }

    /**
     * @return string
     */
    public function getWorkEmail(): string
    {
        return $this->workEmail;
    }

    /**
     * @param string $workEmail
     *
     * @return self
     */
    public function setWorkEmail(string $workEmail): self
    {
        $this->initialized['workEmail'] = true;
        $this->workEmail = $workEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getWorkPhone(): string
    {
        return $this->workPhone;
    }

    /**
     * @param string $workPhone
     *
     * @return self
     */
    public function setWorkPhone(string $workPhone): self
    {
        $this->initialized['workPhone'] = true;
        $this->workPhone = $workPhone;

        return $this;
    }

    /**
     * @return string
     */
    public function getWorkMobile(): string
    {
        return $this->workMobile;
    }

    /**
     * @param string $workMobile
     *
     * @return self
     */
    public function setWorkMobile(string $workMobile): self
    {
        $this->initialized['workMobile'] = true;
        $this->workMobile = $workMobile;

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
}
