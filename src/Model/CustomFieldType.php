<?php

/**
 * CustomFieldType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Paqtcom\Simplicate
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

namespace Paqtcom\Simplicate\Model;

use ArrayAccess;
use Paqtcom\Simplicate\ObjectSerializer;

/**
 * CustomFieldType Class Doc Comment
 *
 * @category Class
 * @package  Paqtcom\Simplicate
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomFieldType implements ModelInterface, ArrayAccess, \Stringable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $swaggerModelName = 'CustomFieldType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'id' => 'string',
        'type' => 'string',
        'name' => 'string',
        'position' => 'int',
        'is_mandatory_configurable' => 'bool',
        'is_searchable_configurable' => 'bool',
        'is_filterable_configurable' => 'bool',
        'is_collective_mutatable_configurable' => 'bool',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'id' => null,
        'type' => null,
        'name' => null,
        'position' => null,
        'is_mandatory_configurable' => null,
        'is_searchable_configurable' => null,
        'is_filterable_configurable' => null,
        'is_collective_mutatable_configurable' => null,
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
    protected static array $attributeMap = [
        'id' => 'id',
        'type' => 'type',
        'name' => 'name',
        'position' => 'position',
        'is_mandatory_configurable' => 'is_mandatory_configurable',
        'is_searchable_configurable' => 'is_searchable_configurable',
        'is_filterable_configurable' => 'is_filterable_configurable',
        'is_collective_mutatable_configurable' => 'is_collective_mutatable_configurable',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'name' => 'setName',
        'position' => 'setPosition',
        'is_mandatory_configurable' => 'setIsMandatoryConfigurable',
        'is_searchable_configurable' => 'setIsSearchableConfigurable',
        'is_filterable_configurable' => 'setIsFilterableConfigurable',
        'is_collective_mutatable_configurable' => 'setIsCollectiveMutatableConfigurable',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'name' => 'getName',
        'position' => 'getPosition',
        'is_mandatory_configurable' => 'getIsMandatoryConfigurable',
        'is_searchable_configurable' => 'getIsSearchableConfigurable',
        'is_filterable_configurable' => 'getIsFilterableConfigurable',
        'is_collective_mutatable_configurable' => 'getIsCollectiveMutatableConfigurable',
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

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = $data['id'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['position'] = $data['position'] ?? null;
        $this->container['is_mandatory_configurable'] = $data['is_mandatory_configurable'] ?? null;
        $this->container['is_searchable_configurable'] = $data['is_searchable_configurable'] ?? null;
        $this->container['is_filterable_configurable'] = $data['is_filterable_configurable'] ?? null;
        $this->container['is_collective_mutatable_configurable'] = $data['is_collective_mutatable_configurable'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        return [];
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
     * Gets is_mandatory_configurable
     *
     * @return bool
     */
    public function getIsMandatoryConfigurable()
    {
        return $this->container['is_mandatory_configurable'];
    }

    /**
     * Sets is_mandatory_configurable
     *
     * @param bool $is_mandatory_configurable is_mandatory_configurable
     *
     * @return $this
     */
    public function setIsMandatoryConfigurable($is_mandatory_configurable)
    {
        $this->container['is_mandatory_configurable'] = $is_mandatory_configurable;

        return $this;
    }

    /**
     * Gets is_searchable_configurable
     *
     * @return bool
     */
    public function getIsSearchableConfigurable()
    {
        return $this->container['is_searchable_configurable'];
    }

    /**
     * Sets is_searchable_configurable
     *
     * @param bool $is_searchable_configurable is_searchable_configurable
     *
     * @return $this
     */
    public function setIsSearchableConfigurable($is_searchable_configurable)
    {
        $this->container['is_searchable_configurable'] = $is_searchable_configurable;

        return $this;
    }

    /**
     * Gets is_filterable_configurable
     *
     * @return bool
     */
    public function getIsFilterableConfigurable()
    {
        return $this->container['is_filterable_configurable'];
    }

    /**
     * Sets is_filterable_configurable
     *
     * @param bool $is_filterable_configurable is_filterable_configurable
     *
     * @return $this
     */
    public function setIsFilterableConfigurable($is_filterable_configurable)
    {
        $this->container['is_filterable_configurable'] = $is_filterable_configurable;

        return $this;
    }

    /**
     * Gets is_collective_mutatable_configurable
     *
     * @return bool
     */
    public function getIsCollectiveMutatableConfigurable()
    {
        return $this->container['is_collective_mutatable_configurable'];
    }

    /**
     * Sets is_collective_mutatable_configurable
     *
     * @param bool $is_collective_mutatable_configurable is_collective_mutatable_configurable
     *
     * @return $this
     */
    public function setIsCollectiveMutatableConfigurable($is_collective_mutatable_configurable)
    {
        $this->container['is_collective_mutatable_configurable'] = $is_collective_mutatable_configurable;

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
        return $this->container[$offset] ?? null;
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
     */
    public function __toString(): string
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return (string) json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return (string) json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
