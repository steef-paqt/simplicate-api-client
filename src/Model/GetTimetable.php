<?php

/**
 * GetTimetable
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
 * GetTimetable Class Doc Comment
 *
 * @category Class
 * @package  Paqtcom\Simplicate
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetTimetable implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetTimetable';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'employee' => '\Paqtcom\Simplicate\Model\GetEmployeeSimple',
        'created_at' => 'string',
        'updated_at' => 'string',
        'hourly_sales_tariff' => 'float',
        'hourly_cost_tariff' => 'float',
        'even_week' => '\Paqtcom\Simplicate\Model\TimetableWeek',
        'odd_week' => '\Paqtcom\Simplicate\Model\TimetableWeek',
        'start_date' => 'string',
        'end_date' => 'string',
        'productivity_target' => 'int',
        'should_write_hours' => 'bool',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'employee' => null,
        'created_at' => null,
        'updated_at' => null,
        'hourly_sales_tariff' => 'float',
        'hourly_cost_tariff' => 'float',
        'even_week' => null,
        'odd_week' => null,
        'start_date' => null,
        'end_date' => null,
        'productivity_target' => null,
        'should_write_hours' => null,
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
        'employee' => 'employee',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'hourly_sales_tariff' => 'hourly_sales_tariff',
        'hourly_cost_tariff' => 'hourly_cost_tariff',
        'even_week' => 'even_week',
        'odd_week' => 'odd_week',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'productivity_target' => 'productivity_target',
        'should_write_hours' => 'should_write_hours',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'employee' => 'setEmployee',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'hourly_sales_tariff' => 'setHourlySalesTariff',
        'hourly_cost_tariff' => 'setHourlyCostTariff',
        'even_week' => 'setEvenWeek',
        'odd_week' => 'setOddWeek',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'productivity_target' => 'setProductivityTarget',
        'should_write_hours' => 'setShouldWriteHours',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'employee' => 'getEmployee',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'hourly_sales_tariff' => 'getHourlySalesTariff',
        'hourly_cost_tariff' => 'getHourlyCostTariff',
        'even_week' => 'getEvenWeek',
        'odd_week' => 'getOddWeek',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'productivity_target' => 'getProductivityTarget',
        'should_write_hours' => 'getShouldWriteHours',
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
        $this->container['employee'] = isset($data['employee']) ? $data['employee'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['hourly_sales_tariff'] = isset($data['hourly_sales_tariff']) ? $data['hourly_sales_tariff'] : null;
        $this->container['hourly_cost_tariff'] = isset($data['hourly_cost_tariff']) ? $data['hourly_cost_tariff'] : null;
        $this->container['even_week'] = isset($data['even_week']) ? $data['even_week'] : null;
        $this->container['odd_week'] = isset($data['odd_week']) ? $data['odd_week'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['productivity_target'] = isset($data['productivity_target']) ? $data['productivity_target'] : null;
        $this->container['should_write_hours'] = isset($data['should_write_hours']) ? $data['should_write_hours'] : null;
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
     * @param string $id employee_id, See /hrm/employee
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets hourly_sales_tariff
     *
     * @return float
     */
    public function getHourlySalesTariff()
    {
        return $this->container['hourly_sales_tariff'];
    }

    /**
     * Sets hourly_sales_tariff
     *
     * @param float $hourly_sales_tariff hourly_sales_tariff
     *
     * @return $this
     */
    public function setHourlySalesTariff($hourly_sales_tariff)
    {
        $this->container['hourly_sales_tariff'] = $hourly_sales_tariff;

        return $this;
    }

    /**
     * Gets hourly_cost_tariff
     *
     * @return float
     */
    public function getHourlyCostTariff()
    {
        return $this->container['hourly_cost_tariff'];
    }

    /**
     * Sets hourly_cost_tariff
     *
     * @param float $hourly_cost_tariff hourly_cost_tariff
     *
     * @return $this
     */
    public function setHourlyCostTariff($hourly_cost_tariff)
    {
        $this->container['hourly_cost_tariff'] = $hourly_cost_tariff;

        return $this;
    }

    /**
     * Gets even_week
     *
     * @return \Paqtcom\Simplicate\Model\TimetableWeek
     */
    public function getEvenWeek()
    {
        return $this->container['even_week'];
    }

    /**
     * Sets even_week
     *
     * @param \Paqtcom\Simplicate\Model\TimetableWeek $even_week even_week
     *
     * @return $this
     */
    public function setEvenWeek($even_week)
    {
        $this->container['even_week'] = $even_week;

        return $this;
    }

    /**
     * Gets odd_week
     *
     * @return \Paqtcom\Simplicate\Model\TimetableWeek
     */
    public function getOddWeek()
    {
        return $this->container['odd_week'];
    }

    /**
     * Sets odd_week
     *
     * @param \Paqtcom\Simplicate\Model\TimetableWeek $odd_week odd_week
     *
     * @return $this
     */
    public function setOddWeek($odd_week)
    {
        $this->container['odd_week'] = $odd_week;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string $start_date start_date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param string $end_date end_date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets productivity_target
     *
     * @return int
     */
    public function getProductivityTarget()
    {
        return $this->container['productivity_target'];
    }

    /**
     * Sets productivity_target
     *
     * @param int $productivity_target productivity_target
     *
     * @return $this
     */
    public function setProductivityTarget($productivity_target)
    {
        $this->container['productivity_target'] = $productivity_target;

        return $this;
    }

    /**
     * Gets should_write_hours
     *
     * @return bool
     */
    public function getShouldWriteHours()
    {
        return $this->container['should_write_hours'];
    }

    /**
     * Sets should_write_hours
     *
     * @param bool $should_write_hours should_write_hours
     *
     * @return $this
     */
    public function setShouldWriteHours($should_write_hours)
    {
        $this->container['should_write_hours'] = $should_write_hours;

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
