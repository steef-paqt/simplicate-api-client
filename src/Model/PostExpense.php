<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class PostExpense
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
    protected $projectId;
    /**
     * @var string
     */
    protected $serviceId;
    /**
     * @var string
     */
    protected $costtypeId;
    /**
     * @var float
     */
    protected $amount;
    /**
     * @var string
     */
    protected $employeeId;
    /**
     * @var string
     */
    protected $date;

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
    public function getServiceId(): string
    {
        return $this->serviceId;
    }

    /**
     * @param string $serviceId
     *
     * @return self
     */
    public function setServiceId(string $serviceId): self
    {
        $this->initialized['serviceId'] = true;
        $this->serviceId = $serviceId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCosttypeId(): string
    {
        return $this->costtypeId;
    }

    /**
     * @param string $costtypeId
     *
     * @return self
     */
    public function setCosttypeId(string $costtypeId): self
    {
        $this->initialized['costtypeId'] = true;
        $this->costtypeId = $costtypeId;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(float $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

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
    public function getDate(): string
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
}
