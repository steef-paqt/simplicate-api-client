<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class PersonContact
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
    protected $personId;
    /**
     * @var mixed
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
     * @var Interest[]
     */
    protected $interests;

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
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     *
     * @return self
     */
    public function setFirstName($firstName): self
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
}
