<?php

/**
 * PurchaseType
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
 * PurchaseType Class Doc Comment
 *
 * @category Class
 * @package  Paqtcom\Simplicate
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PurchaseType implements ModelInterface, ArrayAccess, \Stringable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $swaggerModelName = 'PurchaseType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'label' => 'string',
        'blocked' => 'bool',
        'tariff' => 'float',
        'is_unit_tariff' => 'bool',
        'unit_name' => 'string',
        'is_attachment_allowed' => 'bool',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'label' => null,
        'blocked' => null,
        'tariff' => 'float',
        'is_unit_tariff' => null,
        'unit_name' => null,
        'is_attachment_allowed' => null,
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
        'label' => 'label',
        'blocked' => 'blocked',
        'tariff' => 'tariff',
        'is_unit_tariff' => 'is_unit_tariff',
        'unit_name' => 'unit_name',
        'is_attachment_allowed' => 'is_attachment_allowed',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'label' => 'setLabel',
        'blocked' => 'setBlocked',
        'tariff' => 'setTariff',
        'is_unit_tariff' => 'setIsUnitTariff',
        'unit_name' => 'setUnitName',
        'is_attachment_allowed' => 'setIsAttachmentAllowed',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'label' => 'getLabel',
        'blocked' => 'getBlocked',
        'tariff' => 'getTariff',
        'is_unit_tariff' => 'getIsUnitTariff',
        'unit_name' => 'getUnitName',
        'is_attachment_allowed' => 'getIsAttachmentAllowed',
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
        $this->container['label'] = $data['label'] ?? null;
        $this->container['blocked'] = $data['blocked'] ?? null;
        $this->container['tariff'] = $data['tariff'] ?? null;
        $this->container['is_unit_tariff'] = $data['is_unit_tariff'] ?? null;
        $this->container['unit_name'] = $data['unit_name'] ?? null;
        $this->container['is_attachment_allowed'] = $data['is_attachment_allowed'] ?? null;
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
     * Gets blocked
     *
     * @return bool
     */
    public function getBlocked()
    {
        return $this->container['blocked'];
    }

    /**
     * Sets blocked
     *
     * @param bool $blocked blocked
     *
     * @return $this
     */
    public function setBlocked($blocked)
    {
        $this->container['blocked'] = $blocked;

        return $this;
    }

    /**
     * Gets tariff
     *
     * @return float
     */
    public function getTariff()
    {
        return $this->container['tariff'];
    }

    /**
     * Sets tariff
     *
     * @param float $tariff tariff
     *
     * @return $this
     */
    public function setTariff($tariff)
    {
        $this->container['tariff'] = $tariff;

        return $this;
    }

    /**
     * Gets is_unit_tariff
     *
     * @return bool
     */
    public function getIsUnitTariff()
    {
        return $this->container['is_unit_tariff'];
    }

    /**
     * Sets is_unit_tariff
     *
     * @param bool $is_unit_tariff is_unit_tariff
     *
     * @return $this
     */
    public function setIsUnitTariff($is_unit_tariff)
    {
        $this->container['is_unit_tariff'] = $is_unit_tariff;

        return $this;
    }

    /**
     * Gets unit_name
     *
     * @return string
     */
    public function getUnitName()
    {
        return $this->container['unit_name'];
    }

    /**
     * Sets unit_name
     *
     * @param string $unit_name unit_name
     *
     * @return $this
     */
    public function setUnitName($unit_name)
    {
        $this->container['unit_name'] = $unit_name;

        return $this;
    }

    /**
     * Gets is_attachment_allowed
     *
     * @return bool
     */
    public function getIsAttachmentAllowed()
    {
        return $this->container['is_attachment_allowed'];
    }

    /**
     * Sets is_attachment_allowed
     *
     * @param bool $is_attachment_allowed is_attachment_allowed
     *
     * @return $this
     */
    public function setIsAttachmentAllowed($is_attachment_allowed)
    {
        $this->container['is_attachment_allowed'] = $is_attachment_allowed;

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
