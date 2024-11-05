<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class PutContactPerson
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
    protected $isActive;
    /**
     *
     *
     * @var string
     */
    protected $workFunction;
    /**
     *
     *
     * @var string
     */
    protected $workEmail;
    /**
     *
     *
     * @var string
     */
    protected $workPhone;
    /**
     *
     *
     * @var string
     */
    protected $workMobile;
    /**
     *
     *
     * @var string
     */
    protected $personId;

    /**
     *
     *
     * @return bool
     */
    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    /**
     *
     *
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
     *
     *
     * @return string
     */
    public function getWorkFunction(): string
    {
        return $this->workFunction;
    }

    /**
     *
     *
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
     *
     *
     * @return string
     */
    public function getWorkEmail(): string
    {
        return $this->workEmail;
    }

    /**
     *
     *
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
     *
     *
     * @return string
     */
    public function getWorkPhone(): string
    {
        return $this->workPhone;
    }

    /**
     *
     *
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
     *
     *
     * @return string
     */
    public function getWorkMobile(): string
    {
        return $this->workMobile;
    }

    /**
     *
     *
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
}
