<?php

/**
 * InvoiceTemplate
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
 * InvoiceTemplate Class Doc Comment
 *
 * @category Class
 * @package  Paqtcom\Simplicate
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvoiceTemplate implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InvoiceTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'hide_amount' => 'bool',
        'hide_price' => 'bool',
        'footer_normal' => 'string',
        'footer_directdebit' => 'string',
        'default_note' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'hide_amount' => null,
        'hide_price' => null,
        'footer_normal' => null,
        'footer_directdebit' => null,
        'default_note' => null,
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
        'hide_amount' => 'hide_amount',
        'hide_price' => 'hide_price',
        'footer_normal' => 'footer_normal',
        'footer_directdebit' => 'footer_directdebit',
        'default_note' => 'default_note',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'hide_amount' => 'setHideAmount',
        'hide_price' => 'setHidePrice',
        'footer_normal' => 'setFooterNormal',
        'footer_directdebit' => 'setFooterDirectdebit',
        'default_note' => 'setDefaultNote',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'hide_amount' => 'getHideAmount',
        'hide_price' => 'getHidePrice',
        'footer_normal' => 'getFooterNormal',
        'footer_directdebit' => 'getFooterDirectdebit',
        'default_note' => 'getDefaultNote',
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
        $this->container['hide_amount'] = isset($data['hide_amount']) ? $data['hide_amount'] : null;
        $this->container['hide_price'] = isset($data['hide_price']) ? $data['hide_price'] : null;
        $this->container['footer_normal'] = isset($data['footer_normal']) ? $data['footer_normal'] : null;
        $this->container['footer_directdebit'] = isset($data['footer_directdebit']) ? $data['footer_directdebit'] : null;
        $this->container['default_note'] = isset($data['default_note']) ? $data['default_note'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets hide_amount
     *
     * @return bool
     */
    public function getHideAmount()
    {
        return $this->container['hide_amount'];
    }

    /**
     * Sets hide_amount
     *
     * @param bool $hide_amount hide_amount
     *
     * @return $this
     */
    public function setHideAmount($hide_amount)
    {
        $this->container['hide_amount'] = $hide_amount;

        return $this;
    }

    /**
     * Gets hide_price
     *
     * @return bool
     */
    public function getHidePrice()
    {
        return $this->container['hide_price'];
    }

    /**
     * Sets hide_price
     *
     * @param bool $hide_price hide_price
     *
     * @return $this
     */
    public function setHidePrice($hide_price)
    {
        $this->container['hide_price'] = $hide_price;

        return $this;
    }

    /**
     * Gets footer_normal
     *
     * @return string
     */
    public function getFooterNormal()
    {
        return $this->container['footer_normal'];
    }

    /**
     * Sets footer_normal
     *
     * @param string $footer_normal footer_normal
     *
     * @return $this
     */
    public function setFooterNormal($footer_normal)
    {
        $this->container['footer_normal'] = $footer_normal;

        return $this;
    }

    /**
     * Gets footer_directdebit
     *
     * @return string
     */
    public function getFooterDirectdebit()
    {
        return $this->container['footer_directdebit'];
    }

    /**
     * Sets footer_directdebit
     *
     * @param string $footer_directdebit footer_directdebit
     *
     * @return $this
     */
    public function setFooterDirectdebit($footer_directdebit)
    {
        $this->container['footer_directdebit'] = $footer_directdebit;

        return $this;
    }

    /**
     * Gets default_note
     *
     * @return string
     */
    public function getDefaultNote()
    {
        return $this->container['default_note'];
    }

    /**
     * Sets default_note
     *
     * @param string $default_note default_note
     *
     * @return $this
     */
    public function setDefaultNote($default_note)
    {
        $this->container['default_note'] = $default_note;

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
