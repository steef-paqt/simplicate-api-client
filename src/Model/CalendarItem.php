<?php
/**
 * CalendarItem
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
 * CalendarItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CalendarItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CalendarItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'employee' => '\Swagger\Client\Model\GetEmployeeSimple',
        'hours' => 'string',
        'start_date' => 'string',
        'end_date' => 'string',
        'description' => 'string',
        'summary' => 'string',
        'location' => 'string',
        'deleted' => 'bool',
        'status' => 'string',
        'is_recurring' => 'bool',
        'is_read_only' => 'bool',
        'is_time_defined' => 'bool',
        'organizer_email' => 'string',
        'private' => 'bool',
        'obfuscate' => 'bool',
        'hours_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'employee' => null,
        'hours' => null,
        'start_date' => null,
        'end_date' => null,
        'description' => null,
        'summary' => null,
        'location' => null,
        'deleted' => null,
        'status' => null,
        'is_recurring' => null,
        'is_read_only' => null,
        'is_time_defined' => null,
        'organizer_email' => null,
        'private' => null,
        'obfuscate' => null,
        'hours_id' => null
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
        'hours' => 'hours',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'description' => 'description',
        'summary' => 'summary',
        'location' => 'location',
        'deleted' => 'deleted',
        'status' => 'status',
        'is_recurring' => 'is_recurring',
        'is_read_only' => 'is_read_only',
        'is_time_defined' => 'is_time_defined',
        'organizer_email' => 'organizer_email',
        'private' => 'private',
        'obfuscate' => 'obfuscate',
        'hours_id' => 'hours_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'employee' => 'setEmployee',
        'hours' => 'setHours',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'description' => 'setDescription',
        'summary' => 'setSummary',
        'location' => 'setLocation',
        'deleted' => 'setDeleted',
        'status' => 'setStatus',
        'is_recurring' => 'setIsRecurring',
        'is_read_only' => 'setIsReadOnly',
        'is_time_defined' => 'setIsTimeDefined',
        'organizer_email' => 'setOrganizerEmail',
        'private' => 'setPrivate',
        'obfuscate' => 'setObfuscate',
        'hours_id' => 'setHoursId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'employee' => 'getEmployee',
        'hours' => 'getHours',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'description' => 'getDescription',
        'summary' => 'getSummary',
        'location' => 'getLocation',
        'deleted' => 'getDeleted',
        'status' => 'getStatus',
        'is_recurring' => 'getIsRecurring',
        'is_read_only' => 'getIsReadOnly',
        'is_time_defined' => 'getIsTimeDefined',
        'organizer_email' => 'getOrganizerEmail',
        'private' => 'getPrivate',
        'obfuscate' => 'getObfuscate',
        'hours_id' => 'getHoursId'
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
        $this->container['hours'] = isset($data['hours']) ? $data['hours'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['is_recurring'] = isset($data['is_recurring']) ? $data['is_recurring'] : null;
        $this->container['is_read_only'] = isset($data['is_read_only']) ? $data['is_read_only'] : null;
        $this->container['is_time_defined'] = isset($data['is_time_defined']) ? $data['is_time_defined'] : null;
        $this->container['organizer_email'] = isset($data['organizer_email']) ? $data['organizer_email'] : null;
        $this->container['private'] = isset($data['private']) ? $data['private'] : null;
        $this->container['obfuscate'] = isset($data['obfuscate']) ? $data['obfuscate'] : null;
        $this->container['hours_id'] = isset($data['hours_id']) ? $data['hours_id'] : null;
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
     * Gets employee
     *
     * @return \Swagger\Client\Model\GetEmployeeSimple
     */
    public function getEmployee()
    {
        return $this->container['employee'];
    }

    /**
     * Sets employee
     *
     * @param \Swagger\Client\Model\GetEmployeeSimple $employee employee
     *
     * @return $this
     */
    public function setEmployee($employee)
    {
        $this->container['employee'] = $employee;

        return $this;
    }

    /**
     * Gets hours
     *
     * @return string
     */
    public function getHours()
    {
        return $this->container['hours'];
    }

    /**
     * Sets hours
     *
     * @param string $hours hours
     *
     * @return $this
     */
    public function setHours($hours)
    {
        $this->container['hours'] = $hours;

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
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param string $summary summary
     *
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool $deleted deleted
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets is_recurring
     *
     * @return bool
     */
    public function getIsRecurring()
    {
        return $this->container['is_recurring'];
    }

    /**
     * Sets is_recurring
     *
     * @param bool $is_recurring is_recurring
     *
     * @return $this
     */
    public function setIsRecurring($is_recurring)
    {
        $this->container['is_recurring'] = $is_recurring;

        return $this;
    }

    /**
     * Gets is_read_only
     *
     * @return bool
     */
    public function getIsReadOnly()
    {
        return $this->container['is_read_only'];
    }

    /**
     * Sets is_read_only
     *
     * @param bool $is_read_only is_read_only
     *
     * @return $this
     */
    public function setIsReadOnly($is_read_only)
    {
        $this->container['is_read_only'] = $is_read_only;

        return $this;
    }

    /**
     * Gets is_time_defined
     *
     * @return bool
     */
    public function getIsTimeDefined()
    {
        return $this->container['is_time_defined'];
    }

    /**
     * Sets is_time_defined
     *
     * @param bool $is_time_defined is_time_defined
     *
     * @return $this
     */
    public function setIsTimeDefined($is_time_defined)
    {
        $this->container['is_time_defined'] = $is_time_defined;

        return $this;
    }

    /**
     * Gets organizer_email
     *
     * @return string
     */
    public function getOrganizerEmail()
    {
        return $this->container['organizer_email'];
    }

    /**
     * Sets organizer_email
     *
     * @param string $organizer_email organizer_email
     *
     * @return $this
     */
    public function setOrganizerEmail($organizer_email)
    {
        $this->container['organizer_email'] = $organizer_email;

        return $this;
    }

    /**
     * Gets private
     *
     * @return bool
     */
    public function getPrivate()
    {
        return $this->container['private'];
    }

    /**
     * Sets private
     *
     * @param bool $private private
     *
     * @return $this
     */
    public function setPrivate($private)
    {
        $this->container['private'] = $private;

        return $this;
    }

    /**
     * Gets obfuscate
     *
     * @return bool
     */
    public function getObfuscate()
    {
        return $this->container['obfuscate'];
    }

    /**
     * Sets obfuscate
     *
     * @param bool $obfuscate obfuscate
     *
     * @return $this
     */
    public function setObfuscate($obfuscate)
    {
        $this->container['obfuscate'] = $obfuscate;

        return $this;
    }

    /**
     * Gets hours_id
     *
     * @return string
     */
    public function getHoursId()
    {
        return $this->container['hours_id'];
    }

    /**
     * Sets hours_id
     *
     * @param string $hours_id hours_id
     *
     * @return $this
     */
    public function setHoursId($hours_id)
    {
        $this->container['hours_id'] = $hours_id;

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


