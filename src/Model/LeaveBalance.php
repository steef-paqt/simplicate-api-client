<?php

/**
 * LeaveBalance
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
 * LeaveBalance Class Doc Comment
 *
 * @category Class
 * @package  Paqtcom\Simplicate
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LeaveBalance implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LeaveBalance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'employee' => '\Paqtcom\Simplicate\Model\GetEmployeeSimple',
        'balance' => 'float',
        'first_change' => 'string',
        'last_change' => 'float',
        'year' => 'int',
        'leavetype' => '\Paqtcom\Simplicate\Model\HrmGetLeaveType',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'employee' => null,
        'balance' => 'float',
        'first_change' => null,
        'last_change' => 'float',
        'year' => null,
        'leavetype' => null,
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
        'employee' => 'employee',
        'balance' => 'balance',
        'first_change' => 'first_change',
        'last_change' => 'last_change',
        'year' => 'year',
        'leavetype' => 'leavetype',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employee' => 'setEmployee',
        'balance' => 'setBalance',
        'first_change' => 'setFirstChange',
        'last_change' => 'setLastChange',
        'year' => 'setYear',
        'leavetype' => 'setLeavetype',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employee' => 'getEmployee',
        'balance' => 'getBalance',
        'first_change' => 'getFirstChange',
        'last_change' => 'getLastChange',
        'year' => 'getYear',
        'leavetype' => 'getLeavetype',
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
        $this->container['employee'] = isset($data['employee']) ? $data['employee'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['first_change'] = isset($data['first_change']) ? $data['first_change'] : null;
        $this->container['last_change'] = isset($data['last_change']) ? $data['last_change'] : null;
        $this->container['year'] = isset($data['year']) ? $data['year'] : null;
        $this->container['leavetype'] = isset($data['leavetype']) ? $data['leavetype'] : null;
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
     * Gets employee
     *
     * @return \Paqtcom\Simplicate\Model\GetEmployeeSimple
     */
    public function getEmployee()
    {
        return $this->container['employee'];
    }

    /**
     * Sets employee
     *
     * @param \Paqtcom\Simplicate\Model\GetEmployeeSimple $employee employee
     *
     * @return $this
     */
    public function setEmployee($employee)
    {
        $this->container['employee'] = $employee;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return float
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param float $balance balance
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets first_change
     *
     * @return string
     */
    public function getFirstChange()
    {
        return $this->container['first_change'];
    }

    /**
     * Sets first_change
     *
     * @param string $first_change first_change
     *
     * @return $this
     */
    public function setFirstChange($first_change)
    {
        $this->container['first_change'] = $first_change;

        return $this;
    }

    /**
     * Gets last_change
     *
     * @return float
     */
    public function getLastChange()
    {
        return $this->container['last_change'];
    }

    /**
     * Sets last_change
     *
     * @param float $last_change last_change
     *
     * @return $this
     */
    public function setLastChange($last_change)
    {
        $this->container['last_change'] = $last_change;

        return $this;
    }

    /**
     * Gets year
     *
     * @return int
     */
    public function getYear()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     *
     * @param int $year year
     *
     * @return $this
     */
    public function setYear($year)
    {
        $this->container['year'] = $year;

        return $this;
    }

    /**
     * Gets leavetype
     *
     * @return \Paqtcom\Simplicate\Model\HrmGetLeaveType
     */
    public function getLeavetype()
    {
        return $this->container['leavetype'];
    }

    /**
     * Sets leavetype
     *
     * @param \Paqtcom\Simplicate\Model\HrmGetLeaveType $leavetype leavetype
     *
     * @return $this
     */
    public function setLeavetype($leavetype)
    {
        $this->container['leavetype'] = $leavetype;

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
