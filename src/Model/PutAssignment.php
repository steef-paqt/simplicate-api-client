<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class PutAssignment
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
     * @var PostEmployeeFk[]
     */
    protected $employees;
    /**
     * @var string
     */
    protected $statusId = 'assignmentstatus:abc';
    /**
     * @var string
     */
    protected $name = 'Website Design Assignment';
    /**
     * @var bool
     */
    protected $useSpread;
    /**
     * @var string
     */
    protected $hoursType;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $updatedAt;

    /**
     * @return PostEmployeeFk[]
     */
    public function getEmployees(): array
    {
        return $this->employees;
    }

    /**
     * @param PostEmployeeFk[] $employees
     *
     * @return self
     */
    public function setEmployees(array $employees): self
    {
        $this->initialized['employees'] = true;
        $this->employees = $employees;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusId(): string
    {
        return $this->statusId;
    }

    /**
     * @param string $statusId
     *
     * @return self
     */
    public function setStatusId(string $statusId): self
    {
        $this->initialized['statusId'] = true;
        $this->statusId = $statusId;

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
     * @return bool
     */
    public function getUseSpread(): bool
    {
        return $this->useSpread;
    }

    /**
     * @param bool $useSpread
     *
     * @return self
     */
    public function setUseSpread(bool $useSpread): self
    {
        $this->initialized['useSpread'] = true;
        $this->useSpread = $useSpread;

        return $this;
    }

    /**
     * @return string
     */
    public function getHoursType(): string
    {
        return $this->hoursType;
    }

    /**
     * @param string $hoursType
     *
     * @return self
     */
    public function setHoursType(string $hoursType): self
    {
        $this->initialized['hoursType'] = true;
        $this->hoursType = $hoursType;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
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
}
