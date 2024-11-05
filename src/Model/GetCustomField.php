<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class GetCustomField
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
    protected $label;
    /**
     * @var string
     */
    protected $value;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $renderType;
    /**
     * @var int
     */
    protected $position;
    /**
     * @var bool
     */
    protected $filterable;
    /**
     * @var bool
     */
    protected $searchable;
    /**
     * @var bool
     */
    protected $mandatory;
    /**
     * @var string
     */
    protected $valueType;
    /**
     * @var CustomFieldGroup
     */
    protected $customFieldGroup;
    /**
     * @var CustomFieldOption[]
     */
    protected $options;

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
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

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
    public function getRenderType(): string
    {
        return $this->renderType;
    }

    /**
     * @param string $renderType
     *
     * @return self
     */
    public function setRenderType(string $renderType): self
    {
        $this->initialized['renderType'] = true;
        $this->renderType = $renderType;

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
    public function getFilterable(): bool
    {
        return $this->filterable;
    }

    /**
     * @param bool $filterable
     *
     * @return self
     */
    public function setFilterable(bool $filterable): self
    {
        $this->initialized['filterable'] = true;
        $this->filterable = $filterable;

        return $this;
    }

    /**
     * @return bool
     */
    public function getSearchable(): bool
    {
        return $this->searchable;
    }

    /**
     * @param bool $searchable
     *
     * @return self
     */
    public function setSearchable(bool $searchable): self
    {
        $this->initialized['searchable'] = true;
        $this->searchable = $searchable;

        return $this;
    }

    /**
     * @return bool
     */
    public function getMandatory(): bool
    {
        return $this->mandatory;
    }

    /**
     * @param bool $mandatory
     *
     * @return self
     */
    public function setMandatory(bool $mandatory): self
    {
        $this->initialized['mandatory'] = true;
        $this->mandatory = $mandatory;

        return $this;
    }

    /**
     * @return string
     */
    public function getValueType(): string
    {
        return $this->valueType;
    }

    /**
     * @param string $valueType
     *
     * @return self
     */
    public function setValueType(string $valueType): self
    {
        $this->initialized['valueType'] = true;
        $this->valueType = $valueType;

        return $this;
    }

    /**
     * @return CustomFieldGroup
     */
    public function getCustomFieldGroup(): CustomFieldGroup
    {
        return $this->customFieldGroup;
    }

    /**
     * @param CustomFieldGroup $customFieldGroup
     *
     * @return self
     */
    public function setCustomFieldGroup(CustomFieldGroup $customFieldGroup): self
    {
        $this->initialized['customFieldGroup'] = true;
        $this->customFieldGroup = $customFieldGroup;

        return $this;
    }

    /**
     * @return CustomFieldOption[]
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @param CustomFieldOption[] $options
     *
     * @return self
     */
    public function setOptions(array $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;

        return $this;
    }
}
