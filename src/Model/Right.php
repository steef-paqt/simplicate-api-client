<?php

/**
 * Right
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
 * Right Class Doc Comment
 *
 * @category Class
 * @package  Paqtcom\Simplicate
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Right implements ModelInterface, ArrayAccess, \Stringable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $swaggerModelName = 'Right';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'module_key' => 'string',
        'module_label' => 'string',
        'right_key' => 'string',
        'right_label' => 'string',
        'rightsgroup_label' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'module_key' => null,
        'module_label' => null,
        'right_key' => null,
        'right_label' => null,
        'rightsgroup_label' => null,
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
        'module_key' => 'module_key',
        'module_label' => 'module_label',
        'right_key' => 'right_key',
        'right_label' => 'right_label',
        'rightsgroup_label' => 'rightsgroup_label',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'module_key' => 'setModuleKey',
        'module_label' => 'setModuleLabel',
        'right_key' => 'setRightKey',
        'right_label' => 'setRightLabel',
        'rightsgroup_label' => 'setRightsgroupLabel',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'module_key' => 'getModuleKey',
        'module_label' => 'getModuleLabel',
        'right_key' => 'getRightKey',
        'right_label' => 'getRightLabel',
        'rightsgroup_label' => 'getRightsgroupLabel',
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
        $this->container['module_key'] = $data['module_key'] ?? null;
        $this->container['module_label'] = $data['module_label'] ?? null;
        $this->container['right_key'] = $data['right_key'] ?? null;
        $this->container['right_label'] = $data['right_label'] ?? null;
        $this->container['rightsgroup_label'] = $data['rightsgroup_label'] ?? null;
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
     * Gets module_key
     *
     * @return string
     */
    public function getModuleKey()
    {
        return $this->container['module_key'];
    }

    /**
     * Sets module_key
     *
     * @param string $module_key module_key
     *
     * @return $this
     */
    public function setModuleKey($module_key)
    {
        $this->container['module_key'] = $module_key;

        return $this;
    }

    /**
     * Gets module_label
     *
     * @return string
     */
    public function getModuleLabel()
    {
        return $this->container['module_label'];
    }

    /**
     * Sets module_label
     *
     * @param string $module_label module_label
     *
     * @return $this
     */
    public function setModuleLabel($module_label)
    {
        $this->container['module_label'] = $module_label;

        return $this;
    }

    /**
     * Gets right_key
     *
     * @return string
     */
    public function getRightKey()
    {
        return $this->container['right_key'];
    }

    /**
     * Sets right_key
     *
     * @param string $right_key right_key
     *
     * @return $this
     */
    public function setRightKey($right_key)
    {
        $this->container['right_key'] = $right_key;

        return $this;
    }

    /**
     * Gets right_label
     *
     * @return string
     */
    public function getRightLabel()
    {
        return $this->container['right_label'];
    }

    /**
     * Sets right_label
     *
     * @param string $right_label right_label
     *
     * @return $this
     */
    public function setRightLabel($right_label)
    {
        $this->container['right_label'] = $right_label;

        return $this;
    }

    /**
     * Gets rightsgroup_label
     *
     * @return string
     */
    public function getRightsgroupLabel()
    {
        return $this->container['rightsgroup_label'];
    }

    /**
     * Sets rightsgroup_label
     *
     * @param string $rightsgroup_label rightsgroup_label
     *
     * @return $this
     */
    public function setRightsgroupLabel($rightsgroup_label)
    {
        $this->container['rightsgroup_label'] = $rightsgroup_label;

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
