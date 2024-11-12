<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class User extends AbstractModel
{
    /**
     * @var string
     */
    protected $username;
    /**
     * @var string
     */
    protected $email;
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
    protected $birthdate;
    /**
     * @var bool
     */
    protected $isAuthyEnabled;
    /**
     * @var bool
     */
    protected $isEmployee;
    /**
     * @var bool
     */
    protected $isLightUser;
    /**
     * @var string
     */
    protected $employeeId;
    /**
     * @var string
     */
    protected $personId;
    /**
     * @var bool
     */
    protected $isBlocked;
    /**
     * @var bool
     */
    protected $isLockNav;
    /**
     * @var string
     */
    protected $keyIdentifier;
    /**
     * @var Timezone
     */
    protected $timezone;
    /**
     * @var Country
     */
    protected $country;
    /**
     * @var string
     */
    protected $hoursViewMode;
    /**
     * @var bool
     */
    protected $isAccountOwner;
    /**
     * @var bool
     */
    protected $hasExternalAgendaIntegration;
    /**
     * @var Right[]
     */
    protected $rights;

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     *
     * @return self
     */
    public function setUsername(string $username): self
    {
        $this->initialized['username'] = true;
        $this->username = $username;

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
    public function getBirthdate(): string
    {
        return $this->birthdate;
    }

    /**
     * @param string $birthdate
     *
     * @return self
     */
    public function setBirthdate(string $birthdate): self
    {
        $this->initialized['birthdate'] = true;
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsAuthyEnabled(): bool
    {
        return $this->isAuthyEnabled;
    }

    /**
     * @param bool $isAuthyEnabled
     *
     * @return self
     */
    public function setIsAuthyEnabled(bool $isAuthyEnabled): self
    {
        $this->initialized['isAuthyEnabled'] = true;
        $this->isAuthyEnabled = $isAuthyEnabled;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsEmployee(): bool
    {
        return $this->isEmployee;
    }

    /**
     * @param bool $isEmployee
     *
     * @return self
     */
    public function setIsEmployee(bool $isEmployee): self
    {
        $this->initialized['isEmployee'] = true;
        $this->isEmployee = $isEmployee;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsLightUser(): bool
    {
        return $this->isLightUser;
    }

    /**
     * @param bool $isLightUser
     *
     * @return self
     */
    public function setIsLightUser(bool $isLightUser): self
    {
        $this->initialized['isLightUser'] = true;
        $this->isLightUser = $isLightUser;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmployeeId(): string
    {
        return $this->employeeId;
    }

    /**
     * @param string $employeeId
     *
     * @return self
     */
    public function setEmployeeId(string $employeeId): self
    {
        $this->initialized['employeeId'] = true;
        $this->employeeId = $employeeId;

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
     * @return bool
     */
    public function getIsBlocked(): bool
    {
        return $this->isBlocked;
    }

    /**
     * @param bool $isBlocked
     *
     * @return self
     */
    public function setIsBlocked(bool $isBlocked): self
    {
        $this->initialized['isBlocked'] = true;
        $this->isBlocked = $isBlocked;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsLockNav(): bool
    {
        return $this->isLockNav;
    }

    /**
     * @param bool $isLockNav
     *
     * @return self
     */
    public function setIsLockNav(bool $isLockNav): self
    {
        $this->initialized['isLockNav'] = true;
        $this->isLockNav = $isLockNav;

        return $this;
    }

    /**
     * @return string
     */
    public function getKeyIdentifier(): string
    {
        return $this->keyIdentifier;
    }

    /**
     * @param string $keyIdentifier
     *
     * @return self
     */
    public function setKeyIdentifier(string $keyIdentifier): self
    {
        $this->initialized['keyIdentifier'] = true;
        $this->keyIdentifier = $keyIdentifier;

        return $this;
    }

    /**
     * @return Timezone
     */
    public function getTimezone(): Timezone
    {
        return $this->timezone;
    }

    /**
     * @param Timezone $timezone
     *
     * @return self
     */
    public function setTimezone(Timezone $timezone): self
    {
        $this->initialized['timezone'] = true;
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * @return Country
     */
    public function getCountry(): Country
    {
        return $this->country;
    }

    /**
     * @param Country $country
     *
     * @return self
     */
    public function setCountry(Country $country): self
    {
        $this->initialized['country'] = true;
        $this->country = $country;

        return $this;
    }

    /**
     * @return string
     */
    public function getHoursViewMode(): string
    {
        return $this->hoursViewMode;
    }

    /**
     * @param string $hoursViewMode
     *
     * @return self
     */
    public function setHoursViewMode(string $hoursViewMode): self
    {
        $this->initialized['hoursViewMode'] = true;
        $this->hoursViewMode = $hoursViewMode;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsAccountOwner(): bool
    {
        return $this->isAccountOwner;
    }

    /**
     * @param bool $isAccountOwner
     *
     * @return self
     */
    public function setIsAccountOwner(bool $isAccountOwner): self
    {
        $this->initialized['isAccountOwner'] = true;
        $this->isAccountOwner = $isAccountOwner;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasExternalAgendaIntegration(): bool
    {
        return $this->hasExternalAgendaIntegration;
    }

    /**
     * @param bool $hasExternalAgendaIntegration
     *
     * @return self
     */
    public function setHasExternalAgendaIntegration(bool $hasExternalAgendaIntegration): self
    {
        $this->initialized['hasExternalAgendaIntegration'] = true;
        $this->hasExternalAgendaIntegration = $hasExternalAgendaIntegration;

        return $this;
    }

    /**
     * @return Right[]
     */
    public function getRights(): array
    {
        return $this->rights;
    }

    /**
     * @param Right[] $rights
     *
     * @return self
     */
    public function setRights(array $rights): self
    {
        $this->initialized['rights'] = true;
        $this->rights = $rights;

        return $this;
    }
}
