<?php

/**
 * GetHoursSimple
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
 * GetHoursSimple Class Doc Comment
 *
 * @category Class
 * @package  Paqtcom\Simplicate
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetHoursSimple implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetHoursSimple';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'hours' => 'float',
        'duration_in_minutes' => 'int',
        'start_date' => 'string',
        'end_date' => 'string',
        'is_time_defined' => 'bool',
        'is_recurring' => 'bool',
        'recurrence' => '\Paqtcom\Simplicate\Model\Recurrence',
        'is_external' => 'bool',
        'billable' => 'bool',
        'note' => 'string',
        'address' => '\Paqtcom\Simplicate\Model\Address',
        'assignment_id' => 'string',
        'should_sync_to_cronofy' => 'bool',
        'source' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'hours' => 'float',
        'duration_in_minutes' => null,
        'start_date' => null,
        'end_date' => null,
        'is_time_defined' => null,
        'is_recurring' => null,
        'recurrence' => null,
        'is_external' => null,
        'billable' => null,
        'note' => null,
        'address' => null,
        'assignment_id' => null,
        'should_sync_to_cronofy' => null,
        'source' => null,
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
        'hours' => 'hours',
        'duration_in_minutes' => 'duration_in_minutes',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'is_time_defined' => 'is_time_defined',
        'is_recurring' => 'is_recurring',
        'recurrence' => 'recurrence',
        'is_external' => 'is_external',
        'billable' => 'billable',
        'note' => 'note',
        'address' => 'address',
        'assignment_id' => 'assignment_id',
        'should_sync_to_cronofy' => 'should_sync_to_cronofy',
        'source' => 'source',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'hours' => 'setHours',
        'duration_in_minutes' => 'setDurationInMinutes',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'is_time_defined' => 'setIsTimeDefined',
        'is_recurring' => 'setIsRecurring',
        'recurrence' => 'setRecurrence',
        'is_external' => 'setIsExternal',
        'billable' => 'setBillable',
        'note' => 'setNote',
        'address' => 'setAddress',
        'assignment_id' => 'setAssignmentId',
        'should_sync_to_cronofy' => 'setShouldSyncToCronofy',
        'source' => 'setSource',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'hours' => 'getHours',
        'duration_in_minutes' => 'getDurationInMinutes',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'is_time_defined' => 'getIsTimeDefined',
        'is_recurring' => 'getIsRecurring',
        'recurrence' => 'getRecurrence',
        'is_external' => 'getIsExternal',
        'billable' => 'getBillable',
        'note' => 'getNote',
        'address' => 'getAddress',
        'assignment_id' => 'getAssignmentId',
        'should_sync_to_cronofy' => 'getShouldSyncToCronofy',
        'source' => 'getSource',
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

    public const SOURCE_SCHEDULE = 'schedule';
    public const SOURCE_TIMER = 'timer';
    public const SOURCE_TIMESHEET = 'timesheet';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceAllowableValues()
    {
        return [
            self::SOURCE_SCHEDULE,
            self::SOURCE_TIMER,
            self::SOURCE_TIMESHEET,
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
        $this->container['hours'] = isset($data['hours']) ? $data['hours'] : null;
        $this->container['duration_in_minutes'] = isset($data['duration_in_minutes']) ? $data['duration_in_minutes'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['is_time_defined'] = isset($data['is_time_defined']) ? $data['is_time_defined'] : null;
        $this->container['is_recurring'] = isset($data['is_recurring']) ? $data['is_recurring'] : null;
        $this->container['recurrence'] = isset($data['recurrence']) ? $data['recurrence'] : null;
        $this->container['is_external'] = isset($data['is_external']) ? $data['is_external'] : null;
        $this->container['billable'] = isset($data['billable']) ? $data['billable'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['assignment_id'] = isset($data['assignment_id']) ? $data['assignment_id'] : null;
        $this->container['should_sync_to_cronofy'] = isset($data['should_sync_to_cronofy']) ? $data['should_sync_to_cronofy'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($this->container['source']) && !in_array($this->container['source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'source', must be one of '%s'",
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
     * Gets hours
     *
     * @return float
     */
    public function getHours()
    {
        return $this->container['hours'];
    }

    /**
     * Sets hours
     *
     * @param float $hours hours
     *
     * @return $this
     */
    public function setHours($hours)
    {
        $this->container['hours'] = $hours;

        return $this;
    }

    /**
     * Gets duration_in_minutes
     *
     * @return int
     */
    public function getDurationInMinutes()
    {
        return $this->container['duration_in_minutes'];
    }

    /**
     * Sets duration_in_minutes
     *
     * @param int $duration_in_minutes duration_in_minutes
     *
     * @return $this
     */
    public function setDurationInMinutes($duration_in_minutes)
    {
        $this->container['duration_in_minutes'] = $duration_in_minutes;

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
     * Gets recurrence
     *
     * @return \Paqtcom\Simplicate\Model\Recurrence
     */
    public function getRecurrence()
    {
        return $this->container['recurrence'];
    }

    /**
     * Sets recurrence
     *
     * @param \Paqtcom\Simplicate\Model\Recurrence $recurrence recurrence
     *
     * @return $this
     */
    public function setRecurrence($recurrence)
    {
        $this->container['recurrence'] = $recurrence;

        return $this;
    }

    /**
     * Gets is_external
     *
     * @return bool
     */
    public function getIsExternal()
    {
        return $this->container['is_external'];
    }

    /**
     * Sets is_external
     *
     * @param bool $is_external is_external
     *
     * @return $this
     */
    public function setIsExternal($is_external)
    {
        $this->container['is_external'] = $is_external;

        return $this;
    }

    /**
     * Gets billable
     *
     * @return bool
     */
    public function getBillable()
    {
        return $this->container['billable'];
    }

    /**
     * Sets billable
     *
     * @param bool $billable billable
     *
     * @return $this
     */
    public function setBillable($billable)
    {
        $this->container['billable'] = $billable;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Paqtcom\Simplicate\Model\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Paqtcom\Simplicate\Model\Address $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets assignment_id
     *
     * @return string
     */
    public function getAssignmentId()
    {
        return $this->container['assignment_id'];
    }

    /**
     * Sets assignment_id
     *
     * @param string $assignment_id assignment_id
     *
     * @return $this
     */
    public function setAssignmentId($assignment_id)
    {
        $this->container['assignment_id'] = $assignment_id;

        return $this;
    }

    /**
     * Gets should_sync_to_cronofy
     *
     * @return bool
     */
    public function getShouldSyncToCronofy()
    {
        return $this->container['should_sync_to_cronofy'];
    }

    /**
     * Sets should_sync_to_cronofy
     *
     * @param bool $should_sync_to_cronofy should_sync_to_cronofy
     *
     * @return $this
     */
    public function setShouldSyncToCronofy($should_sync_to_cronofy)
    {
        $this->container['should_sync_to_cronofy'] = $should_sync_to_cronofy;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($source) && !in_array($source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'source', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['source'] = $source;

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
