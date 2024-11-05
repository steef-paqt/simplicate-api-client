<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class GetTimesheetRowItemtype
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
    protected $name;
    /**
     * @var string
     */
    protected $unitName;
    /**
     * @var bool
     */
    protected $isUnitTariff;
    /**
     * @var bool
     */
    protected $isAttachmentAllowed;
    /**
     * @var bool
     */
    protected $hasWorkflow;

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
    public function getUnitName(): string
    {
        return $this->unitName;
    }

    /**
     * @param string $unitName
     *
     * @return self
     */
    public function setUnitName(string $unitName): self
    {
        $this->initialized['unitName'] = true;
        $this->unitName = $unitName;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsUnitTariff(): bool
    {
        return $this->isUnitTariff;
    }

    /**
     * @param bool $isUnitTariff
     *
     * @return self
     */
    public function setIsUnitTariff(bool $isUnitTariff): self
    {
        $this->initialized['isUnitTariff'] = true;
        $this->isUnitTariff = $isUnitTariff;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsAttachmentAllowed(): bool
    {
        return $this->isAttachmentAllowed;
    }

    /**
     * @param bool $isAttachmentAllowed
     *
     * @return self
     */
    public function setIsAttachmentAllowed(bool $isAttachmentAllowed): self
    {
        $this->initialized['isAttachmentAllowed'] = true;
        $this->isAttachmentAllowed = $isAttachmentAllowed;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasWorkflow(): bool
    {
        return $this->hasWorkflow;
    }

    /**
     * @param bool $hasWorkflow
     *
     * @return self
     */
    public function setHasWorkflow(bool $hasWorkflow): self
    {
        $this->initialized['hasWorkflow'] = true;
        $this->hasWorkflow = $hasWorkflow;

        return $this;
    }
}
