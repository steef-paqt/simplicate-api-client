<?php
/**
 * GetCustomField
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Simplicate API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.0
 * Contact: support@simplicate.nl
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.43
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * GetCustomField Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCustomField implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetCustomField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'label' => 'string',
        'value' => 'string',
        'type' => 'string',
        'render_type' => 'string',
        'position' => 'int',
        'filterable' => 'bool',
        'searchable' => 'bool',
        'mandatory' => 'bool',
        'value_type' => 'string',
        'custom_field_group' => '\Swagger\Client\Model\CustomFieldGroup',
        'options' => '\Swagger\Client\Model\CustomFieldOption[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'label' => null,
        'value' => null,
        'type' => null,
        'render_type' => null,
        'position' => null,
        'filterable' => null,
        'searchable' => null,
        'mandatory' => null,
        'value_type' => null,
        'custom_field_group' => null,
        'options' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'label' => 'label',
        'value' => 'value',
        'type' => 'type',
        'render_type' => 'render_type',
        'position' => 'position',
        'filterable' => 'filterable',
        'searchable' => 'searchable',
        'mandatory' => 'mandatory',
        'value_type' => 'value_type',
        'custom_field_group' => 'custom_field_group',
        'options' => 'options'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'label' => 'setLabel',
        'value' => 'setValue',
        'type' => 'setType',
        'render_type' => 'setRenderType',
        'position' => 'setPosition',
        'filterable' => 'setFilterable',
        'searchable' => 'setSearchable',
        'mandatory' => 'setMandatory',
        'value_type' => 'setValueType',
        'custom_field_group' => 'setCustomFieldGroup',
        'options' => 'setOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'label' => 'getLabel',
        'value' => 'getValue',
        'type' => 'getType',
        'render_type' => 'getRenderType',
        'position' => 'getPosition',
        'filterable' => 'getFilterable',
        'searchable' => 'getSearchable',
        'mandatory' => 'getMandatory',
        'value_type' => 'getValueType',
        'custom_field_group' => 'getCustomFieldGroup',
        'options' => 'getOptions'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const VALUE_TYPE_TEXT = 'Text';
    const VALUE_TYPE_INTEGER = 'Integer';
    const VALUE_TYPE_DECIMAL = 'Decimal';
    const VALUE_TYPE_DATE = 'Date';
    const VALUE_TYPE_TIME = 'Time';
    const VALUE_TYPE_DATE_TIME = 'DateTime';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getValueTypeAllowableValues()
    {
        return [
            self::VALUE_TYPE_TEXT,
            self::VALUE_TYPE_INTEGER,
            self::VALUE_TYPE_DECIMAL,
            self::VALUE_TYPE_DATE,
            self::VALUE_TYPE_TIME,
            self::VALUE_TYPE_DATE_TIME,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['render_type'] = isset($data['render_type']) ? $data['render_type'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['filterable'] = isset($data['filterable']) ? $data['filterable'] : null;
        $this->container['searchable'] = isset($data['searchable']) ? $data['searchable'] : null;
        $this->container['mandatory'] = isset($data['mandatory']) ? $data['mandatory'] : null;
        $this->container['value_type'] = isset($data['value_type']) ? $data['value_type'] : null;
        $this->container['custom_field_group'] = isset($data['custom_field_group']) ? $data['custom_field_group'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getValueTypeAllowableValues();
        if (!is_null($this->container['value_type']) && !in_array($this->container['value_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'value_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets render_type
     *
     * @return string
     */
    public function getRenderType()
    {
        return $this->container['render_type'];
    }

    /**
     * Sets render_type
     *
     * @param string $render_type render_type
     *
     * @return $this
     */
    public function setRenderType($render_type)
    {
        $this->container['render_type'] = $render_type;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int $position position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets filterable
     *
     * @return bool
     */
    public function getFilterable()
    {
        return $this->container['filterable'];
    }

    /**
     * Sets filterable
     *
     * @param bool $filterable filterable
     *
     * @return $this
     */
    public function setFilterable($filterable)
    {
        $this->container['filterable'] = $filterable;

        return $this;
    }

    /**
     * Gets searchable
     *
     * @return bool
     */
    public function getSearchable()
    {
        return $this->container['searchable'];
    }

    /**
     * Sets searchable
     *
     * @param bool $searchable searchable
     *
     * @return $this
     */
    public function setSearchable($searchable)
    {
        $this->container['searchable'] = $searchable;

        return $this;
    }

    /**
     * Gets mandatory
     *
     * @return bool
     */
    public function getMandatory()
    {
        return $this->container['mandatory'];
    }

    /**
     * Sets mandatory
     *
     * @param bool $mandatory mandatory
     *
     * @return $this
     */
    public function setMandatory($mandatory)
    {
        $this->container['mandatory'] = $mandatory;

        return $this;
    }

    /**
     * Gets value_type
     *
     * @return string
     */
    public function getValueType()
    {
        return $this->container['value_type'];
    }

    /**
     * Sets value_type
     *
     * @param string $value_type value_type
     *
     * @return $this
     */
    public function setValueType($value_type)
    {
        $allowedValues = $this->getValueTypeAllowableValues();
        if (!is_null($value_type) && !in_array($value_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'value_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['value_type'] = $value_type;

        return $this;
    }

    /**
     * Gets custom_field_group
     *
     * @return \Swagger\Client\Model\CustomFieldGroup
     */
    public function getCustomFieldGroup()
    {
        return $this->container['custom_field_group'];
    }

    /**
     * Sets custom_field_group
     *
     * @param \Swagger\Client\Model\CustomFieldGroup $custom_field_group custom_field_group
     *
     * @return $this
     */
    public function setCustomFieldGroup($custom_field_group)
    {
        $this->container['custom_field_group'] = $custom_field_group;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \Swagger\Client\Model\CustomFieldOption[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \Swagger\Client\Model\CustomFieldOption[] $options options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


