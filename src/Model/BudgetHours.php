<?php

/**
 * BudgetHours
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

use ArrayAccess;
use Swagger\Client\ObjectSerializer;

/**
 * BudgetHours Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BudgetHours implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BudgetHours';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount_budget' => 'float',
        'amount_spent' => 'float',
        'value_budget' => 'float',
        'value_spent' => 'float',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount_budget' => 'float',
        'amount_spent' => 'float',
        'value_budget' => 'float',
        'value_spent' => 'float',
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
        'amount_budget' => 'amount_budget',
        'amount_spent' => 'amount_spent',
        'value_budget' => 'value_budget',
        'value_spent' => 'value_spent',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount_budget' => 'setAmountBudget',
        'amount_spent' => 'setAmountSpent',
        'value_budget' => 'setValueBudget',
        'value_spent' => 'setValueSpent',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount_budget' => 'getAmountBudget',
        'amount_spent' => 'getAmountSpent',
        'value_budget' => 'getValueBudget',
        'value_spent' => 'getValueSpent',
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
        $this->container['amount_budget'] = isset($data['amount_budget']) ? $data['amount_budget'] : null;
        $this->container['amount_spent'] = isset($data['amount_spent']) ? $data['amount_spent'] : null;
        $this->container['value_budget'] = isset($data['value_budget']) ? $data['value_budget'] : null;
        $this->container['value_spent'] = isset($data['value_spent']) ? $data['value_spent'] : null;
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
     * Gets amount_budget
     *
     * @return float
     */
    public function getAmountBudget()
    {
        return $this->container['amount_budget'];
    }

    /**
     * Sets amount_budget
     *
     * @param float $amount_budget amount_budget
     *
     * @return $this
     */
    public function setAmountBudget($amount_budget)
    {
        $this->container['amount_budget'] = $amount_budget;

        return $this;
    }

    /**
     * Gets amount_spent
     *
     * @return float
     */
    public function getAmountSpent()
    {
        return $this->container['amount_spent'];
    }

    /**
     * Sets amount_spent
     *
     * @param float $amount_spent amount_spent
     *
     * @return $this
     */
    public function setAmountSpent($amount_spent)
    {
        $this->container['amount_spent'] = $amount_spent;

        return $this;
    }

    /**
     * Gets value_budget
     *
     * @return float
     */
    public function getValueBudget()
    {
        return $this->container['value_budget'];
    }

    /**
     * Sets value_budget
     *
     * @param float $value_budget value_budget
     *
     * @return $this
     */
    public function setValueBudget($value_budget)
    {
        $this->container['value_budget'] = $value_budget;

        return $this;
    }

    /**
     * Gets value_spent
     *
     * @return float
     */
    public function getValueSpent()
    {
        return $this->container['value_spent'];
    }

    /**
     * Sets value_spent
     *
     * @param float $value_spent value_spent
     *
     * @return $this
     */
    public function setValueSpent($value_spent)
    {
        $this->container['value_spent'] = $value_spent;

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
