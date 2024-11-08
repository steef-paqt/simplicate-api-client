<?php

/**
 * AssignmentBudget
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
 * AssignmentBudget Class Doc Comment
 *
 * @category Class
 * @package  Paqtcom\Simplicate
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AssignmentBudget implements ModelInterface, ArrayAccess, \Stringable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $swaggerModelName = 'AssignmentBudget';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'assignment_id' => 'string',
        'range_start' => 'string',
        'budget_range_start' => 'string',
        'range_end' => 'string',
        'budget_range_end' => 'string',
        'planned_amount' => 'object',
        'spent_amount' => 'object',
        'hours_type' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'assignment_id' => null,
        'range_start' => null,
        'budget_range_start' => null,
        'range_end' => null,
        'budget_range_end' => null,
        'planned_amount' => null,
        'spent_amount' => null,
        'hours_type' => null,
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
        'assignment_id' => 'assignment_id',
        'range_start' => 'range_start',
        'budget_range_start' => 'budget_range_start',
        'range_end' => 'range_end',
        'budget_range_end' => 'budget_range_end',
        'planned_amount' => 'planned_amount',
        'spent_amount' => 'spent_amount',
        'hours_type' => 'hours_type',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'assignment_id' => 'setAssignmentId',
        'range_start' => 'setRangeStart',
        'budget_range_start' => 'setBudgetRangeStart',
        'range_end' => 'setRangeEnd',
        'budget_range_end' => 'setBudgetRangeEnd',
        'planned_amount' => 'setPlannedAmount',
        'spent_amount' => 'setSpentAmount',
        'hours_type' => 'setHoursType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'assignment_id' => 'getAssignmentId',
        'range_start' => 'getRangeStart',
        'budget_range_start' => 'getBudgetRangeStart',
        'range_end' => 'getRangeEnd',
        'budget_range_end' => 'getBudgetRangeEnd',
        'planned_amount' => 'getPlannedAmount',
        'spent_amount' => 'getSpentAmount',
        'hours_type' => 'getHoursType',
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

    public const HOURS_TYPE_PER_WEEK = 'per_week';
    public const HOURS_TYPE_TOTAL = 'total';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHoursTypeAllowableValues()
    {
        return [
            self::HOURS_TYPE_PER_WEEK,
            self::HOURS_TYPE_TOTAL,
        ];
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
        $this->container['assignment_id'] = $data['assignment_id'] ?? null;
        $this->container['range_start'] = $data['range_start'] ?? '2020-02-03';
        $this->container['budget_range_start'] = $data['budget_range_start'] ?? null;
        $this->container['range_end'] = $data['range_end'] ?? '2020-02-10';
        $this->container['budget_range_end'] = $data['budget_range_end'] ?? null;
        $this->container['planned_amount'] = $data['planned_amount'] ?? null;
        $this->container['spent_amount'] = $data['spent_amount'] ?? null;
        $this->container['hours_type'] = $data['hours_type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getHoursTypeAllowableValues();
        if (!is_null($this->container['hours_type']) && !in_array($this->container['hours_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'hours_type', must be one of '%s'",
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
     * Gets range_start
     *
     * @return string
     */
    public function getRangeStart()
    {
        return $this->container['range_start'];
    }

    /**
     * Sets range_start
     *
     * @param string $range_start range_start
     *
     * @return $this
     */
    public function setRangeStart($range_start)
    {
        $this->container['range_start'] = $range_start;

        return $this;
    }

    /**
     * Gets budget_range_start
     *
     * @return string
     */
    public function getBudgetRangeStart()
    {
        return $this->container['budget_range_start'];
    }

    /**
     * Sets budget_range_start
     *
     * @param string $budget_range_start budget_range_start
     *
     * @return $this
     */
    public function setBudgetRangeStart($budget_range_start)
    {
        $this->container['budget_range_start'] = $budget_range_start;

        return $this;
    }

    /**
     * Gets range_end
     *
     * @return string
     */
    public function getRangeEnd()
    {
        return $this->container['range_end'];
    }

    /**
     * Sets range_end
     *
     * @param string $range_end range_end
     *
     * @return $this
     */
    public function setRangeEnd($range_end)
    {
        $this->container['range_end'] = $range_end;

        return $this;
    }

    /**
     * Gets budget_range_end
     *
     * @return string
     */
    public function getBudgetRangeEnd()
    {
        return $this->container['budget_range_end'];
    }

    /**
     * Sets budget_range_end
     *
     * @param string $budget_range_end budget_range_end
     *
     * @return $this
     */
    public function setBudgetRangeEnd($budget_range_end)
    {
        $this->container['budget_range_end'] = $budget_range_end;

        return $this;
    }

    /**
     * Gets planned_amount
     *
     * @return object
     */
    public function getPlannedAmount()
    {
        return $this->container['planned_amount'];
    }

    /**
     * Sets planned_amount
     *
     * @param object $planned_amount Planned amount for either given week or the rest of the assignment duration. Returns float by default; if 'experimental' header is sent, returns string using ISO 8601 duration format.
     *
     * @return $this
     */
    public function setPlannedAmount($planned_amount)
    {
        $this->container['planned_amount'] = $planned_amount;

        return $this;
    }

    /**
     * Gets spent_amount
     *
     * @return object
     */
    public function getSpentAmount()
    {
        return $this->container['spent_amount'];
    }

    /**
     * Sets spent_amount
     *
     * @param object $spent_amount Spent amount in given range. Returns float by default; if 'experimental' header is sent, returns string using ISO 8601 duration format.
     *
     * @return $this
     */
    public function setSpentAmount($spent_amount)
    {
        $this->container['spent_amount'] = $spent_amount;

        return $this;
    }

    /**
     * Gets hours_type
     *
     * @return string
     */
    public function getHoursType()
    {
        return $this->container['hours_type'];
    }

    /**
     * Sets hours_type
     *
     * @param string $hours_type hours_type
     *
     * @return $this
     */
    public function setHoursType($hours_type)
    {
        $allowedValues = $this->getHoursTypeAllowableValues();
        if (!is_null($hours_type) && !in_array($hours_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'hours_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['hours_type'] = $hours_type;

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
