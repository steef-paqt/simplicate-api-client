<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class GetSharedItem
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
    protected $createdAt;
    /**
     *
     *
     * @var string
     */
    protected $updatedAt;
    /**
     *
     *
     * @var string
     */
    protected $tag;
    /**
     *
     *
     * @var string
     */
    protected $type;
    /**
     *
     *
     * @var string
     */
    protected $employeeId;
    /**
     *
     *
     * @var string
     */
    protected $shared;
    /**
     *
     *
     * @var string
     */
    protected $data;

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
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     *
     *
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
     *
     *
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    /**
     *
     *
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
     *
     *
     * @return string
     */
    public function getTag(): string
    {
        return $this->tag;
    }

    /**
     *
     *
     * @param string $tag
     *
     * @return self
     */
    public function setTag(string $tag): self
    {
        $this->initialized['tag'] = true;
        $this->tag = $tag;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     *
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

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
     * @return string
     */
    public function getShared(): string
    {
        return $this->shared;
    }

    /**
     *
     *
     * @param string $shared
     *
     * @return self
     */
    public function setShared(string $shared): self
    {
        $this->initialized['shared'] = true;
        $this->shared = $shared;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     *
     *
     * @param string $data
     *
     * @return self
     */
    public function setData(string $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
