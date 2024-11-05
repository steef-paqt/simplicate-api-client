<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class PostContactPersonFk
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
    protected $personId;
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
    protected $workMobile;

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
}
