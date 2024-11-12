<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class Employee extends AbstractModel
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $personId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $bankAccount;
    /**
     * @var string
     */
    protected $function;
    /**
     * @var mixed
     */
    protected $type;
    /**
     * @var string
     */
    protected $employmentStatus;
    /**
     * @var string
     */
    protected $civilStatus;
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
    protected $workEmail;
    /**
     * @var float
     */
    protected $hourlySalesTariff;
    /**
     * @var float
     */
    protected $hourlyCostTariff;
    /**
     * @var Avatar
     */
    protected $avatar;
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
    public function getFunction(): string
    {
        return $this->function;
    }

    /**
     * @param string $function
     *
     * @return self
     */
    public function setFunction(string $function): self
    {
        $this->initialized['function'] = true;
        $this->function = $function;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     *
     * @return self
     */
    public function setType($type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmploymentStatus(): string
    {
        return $this->employmentStatus;
    }

    /**
     * @param string $employmentStatus
     *
     * @return self
     */
    public function setEmploymentStatus(string $employmentStatus): self
    {
        $this->initialized['employmentStatus'] = true;
        $this->employmentStatus = $employmentStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getCivilStatus(): string
    {
        return $this->civilStatus;
    }

    /**
     * @param string $civilStatus
     *
     * @return self
     */
    public function setCivilStatus(string $civilStatus): self
    {
        $this->initialized['civilStatus'] = true;
        $this->civilStatus = $civilStatus;

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
     * @return float
     */
    public function getHourlySalesTariff(): float
    {
        return $this->hourlySalesTariff;
    }

    /**
     * @param float $hourlySalesTariff
     *
     * @return self
     */
    public function setHourlySalesTariff(float $hourlySalesTariff): self
    {
        $this->initialized['hourlySalesTariff'] = true;
        $this->hourlySalesTariff = $hourlySalesTariff;

        return $this;
    }

    /**
     * @return float
     */
    public function getHourlyCostTariff(): float
    {
        return $this->hourlyCostTariff;
    }

    /**
     * @param float $hourlyCostTariff
     *
     * @return self
     */
    public function setHourlyCostTariff(float $hourlyCostTariff): self
    {
        $this->initialized['hourlyCostTariff'] = true;
        $this->hourlyCostTariff = $hourlyCostTariff;

        return $this;
    }

    /**
     * @return Avatar
     */
    public function getAvatar(): Avatar
    {
        return $this->avatar;
    }

    /**
     * @param Avatar $avatar
     *
     * @return self
     */
    public function setAvatar(Avatar $avatar): self
    {
        $this->initialized['avatar'] = true;
        $this->avatar = $avatar;

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
}
