<?php
/**
 * Quote
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
 * Quote Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Quote implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Quote';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sales_id' => 'string',
        'quote_subject' => 'string',
        'json' => 'string',
        'customer_reference' => 'string',
        'is_blocked' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sales_id' => null,
        'quote_subject' => null,
        'json' => null,
        'customer_reference' => null,
        'is_blocked' => null
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
        'sales_id' => 'sales_id',
        'quote_subject' => 'quote_subject',
        'json' => 'json',
        'customer_reference' => 'customer_reference',
        'is_blocked' => 'is_blocked'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sales_id' => 'setSalesId',
        'quote_subject' => 'setQuoteSubject',
        'json' => 'setJson',
        'customer_reference' => 'setCustomerReference',
        'is_blocked' => 'setIsBlocked'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sales_id' => 'getSalesId',
        'quote_subject' => 'getQuoteSubject',
        'json' => 'getJson',
        'customer_reference' => 'getCustomerReference',
        'is_blocked' => 'getIsBlocked'
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
        $this->container['sales_id'] = isset($data['sales_id']) ? $data['sales_id'] : null;
        $this->container['quote_subject'] = isset($data['quote_subject']) ? $data['quote_subject'] : null;
        $this->container['json'] = isset($data['json']) ? $data['json'] : null;
        $this->container['customer_reference'] = isset($data['customer_reference']) ? $data['customer_reference'] : null;
        $this->container['is_blocked'] = isset($data['is_blocked']) ? $data['is_blocked'] : null;
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
     * Gets sales_id
     *
     * @return string
     */
    public function getSalesId()
    {
        return $this->container['sales_id'];
    }

    /**
     * Sets sales_id
     *
     * @param string $sales_id sales_id
     *
     * @return $this
     */
    public function setSalesId($sales_id)
    {
        $this->container['sales_id'] = $sales_id;

        return $this;
    }

    /**
     * Gets quote_subject
     *
     * @return string
     */
    public function getQuoteSubject()
    {
        return $this->container['quote_subject'];
    }

    /**
     * Sets quote_subject
     *
     * @param string $quote_subject quote_subject
     *
     * @return $this
     */
    public function setQuoteSubject($quote_subject)
    {
        $this->container['quote_subject'] = $quote_subject;

        return $this;
    }

    /**
     * Gets json
     *
     * @return string
     */
    public function getJson()
    {
        return $this->container['json'];
    }

    /**
     * Sets json
     *
     * @param string $json json
     *
     * @return $this
     */
    public function setJson($json)
    {
        $this->container['json'] = $json;

        return $this;
    }

    /**
     * Gets customer_reference
     *
     * @return string
     */
    public function getCustomerReference()
    {
        return $this->container['customer_reference'];
    }

    /**
     * Sets customer_reference
     *
     * @param string $customer_reference customer_reference
     *
     * @return $this
     */
    public function setCustomerReference($customer_reference)
    {
        $this->container['customer_reference'] = $customer_reference;

        return $this;
    }

    /**
     * Gets is_blocked
     *
     * @return int
     */
    public function getIsBlocked()
    {
        return $this->container['is_blocked'];
    }

    /**
     * Sets is_blocked
     *
     * @param int $is_blocked is_blocked
     *
     * @return $this
     */
    public function setIsBlocked($is_blocked)
    {
        $this->container['is_blocked'] = $is_blocked;

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


