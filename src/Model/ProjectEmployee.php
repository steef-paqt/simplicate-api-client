<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class ProjectEmployee
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
     * @var string
     */
    protected $projectId;
    /**
     *
     *
     * @var string
     */
    protected $employeeId;
    /**
     *
     *
     * @var float
     */
    protected $tariff;

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
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     *
     *
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
     *
     *
     * @return string
     */
    public function getEmployeeId(): string
    {
        return $this->employeeId;
    }

    /**
     *
     *
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
     *
     *
     * @return float
     */
    public function getTariff(): float
    {
        return $this->tariff;
    }

    /**
     *
     *
     * @param float $tariff
     *
     * @return self
     */
    public function setTariff(float $tariff): self
    {
        $this->initialized['tariff'] = true;
        $this->tariff = $tariff;

        return $this;
    }
}
