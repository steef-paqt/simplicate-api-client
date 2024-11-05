<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class PostCustomFieldValue
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
     * The 'name' property found in the custom field definition
     *
     * @var string
     */
    protected $name;
    /**
     * The value for the custom field. Type of value is dependent on the custom field. Can be a string, int, bool, float, or a reference to a customfieldoption:abcd
     *
     * @var string
     */
    protected $value;

    /**
     * The 'name' property found in the custom field definition
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The 'name' property found in the custom field definition
     *
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
     * The value for the custom field. Type of value is dependent on the custom field. Can be a string, int, bool, float, or a reference to a customfieldoption:abcd
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * The value for the custom field. Type of value is dependent on the custom field. Can be a string, int, bool, float, or a reference to a customfieldoption:abcd
     *
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
}
