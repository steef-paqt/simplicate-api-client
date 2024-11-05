<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class CustomFieldType
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
    protected $type;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int
     */
    protected $position;
    /**
     * @var bool
     */
    protected $isMandatoryConfigurable;
    /**
     * @var bool
     */
    protected $isSearchableConfigurable;
    /**
     * @var bool
     */
    protected $isFilterableConfigurable;
    /**
     * @var bool
     */
    protected $isCollectiveMutatableConfigurable;

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
    public function getType(): string
    {
        return $this->type;
    }

    /**
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
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @param int $position
     *
     * @return self
     */
    public function setPosition(int $position): self
    {
        $this->initialized['position'] = true;
        $this->position = $position;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsMandatoryConfigurable(): bool
    {
        return $this->isMandatoryConfigurable;
    }

    /**
     * @param bool $isMandatoryConfigurable
     *
     * @return self
     */
    public function setIsMandatoryConfigurable(bool $isMandatoryConfigurable): self
    {
        $this->initialized['isMandatoryConfigurable'] = true;
        $this->isMandatoryConfigurable = $isMandatoryConfigurable;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsSearchableConfigurable(): bool
    {
        return $this->isSearchableConfigurable;
    }

    /**
     * @param bool $isSearchableConfigurable
     *
     * @return self
     */
    public function setIsSearchableConfigurable(bool $isSearchableConfigurable): self
    {
        $this->initialized['isSearchableConfigurable'] = true;
        $this->isSearchableConfigurable = $isSearchableConfigurable;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsFilterableConfigurable(): bool
    {
        return $this->isFilterableConfigurable;
    }

    /**
     * @param bool $isFilterableConfigurable
     *
     * @return self
     */
    public function setIsFilterableConfigurable(bool $isFilterableConfigurable): self
    {
        $this->initialized['isFilterableConfigurable'] = true;
        $this->isFilterableConfigurable = $isFilterableConfigurable;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsCollectiveMutatableConfigurable(): bool
    {
        return $this->isCollectiveMutatableConfigurable;
    }

    /**
     * @param bool $isCollectiveMutatableConfigurable
     *
     * @return self
     */
    public function setIsCollectiveMutatableConfigurable(bool $isCollectiveMutatableConfigurable): self
    {
        $this->initialized['isCollectiveMutatableConfigurable'] = true;
        $this->isCollectiveMutatableConfigurable = $isCollectiveMutatableConfigurable;

        return $this;
    }
}
