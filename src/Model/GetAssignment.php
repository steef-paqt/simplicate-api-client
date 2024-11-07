<?php

/**
 * GetAssignment
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
 * GetAssignment Class Doc Comment
 *
 * @category Class
 * @package  Paqtcom\Simplicate
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetAssignment implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $swaggerModelName = 'GetAssignment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'id' => 'string',
        'start_date' => 'string',
        'end_date' => 'string',
        'hours_total' => 'float',
        'hours' => 'float',
        'hours_type' => 'string',
        'spread' => 'int[]',
        'status' => '\Paqtcom\Simplicate\Model\GetAssignmentStatus',
        'project' => '\Paqtcom\Simplicate\Model\GetProjectSimple',
        'projectservice' => '\Paqtcom\Simplicate\Model\GetProjectServiceSimple',
        'projecthourstype' => '\Paqtcom\Simplicate\Model\GetProjectServiceHoursType',
        'employees' => '\Paqtcom\Simplicate\Model\GetEmployeeSimple[]',
        'spent_amount' => 'string',
        'is_planned' => 'bool',
        'name' => 'string',
        'use_spread' => 'bool',
        'description' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'id' => null,
        'start_date' => null,
        'end_date' => null,
        'hours_total' => 'float',
        'hours' => 'float',
        'hours_type' => null,
        'spread' => null,
        'status' => null,
        'project' => null,
        'projectservice' => null,
        'projecthourstype' => null,
        'employees' => null,
        'spent_amount' => null,
        'is_planned' => null,
        'name' => null,
        'use_spread' => null,
        'description' => null,
        'created_at' => null,
        'updated_at' => null,
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
        'id' => 'id',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'hours_total' => 'hours_total',
        'hours' => 'hours',
        'hours_type' => 'hours_type',
        'spread' => 'spread',
        'status' => 'status',
        'project' => 'project',
        'projectservice' => 'projectservice',
        'projecthourstype' => 'projecthourstype',
        'employees' => 'employees',
        'spent_amount' => 'spent_amount',
        'is_planned' => 'is_planned',
        'name' => 'name',
        'use_spread' => 'use_spread',
        'description' => 'description',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'id' => 'setId',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'hours_total' => 'setHoursTotal',
        'hours' => 'setHours',
        'hours_type' => 'setHoursType',
        'spread' => 'setSpread',
        'status' => 'setStatus',
        'project' => 'setProject',
        'projectservice' => 'setProjectservice',
        'projecthourstype' => 'setProjecthourstype',
        'employees' => 'setEmployees',
        'spent_amount' => 'setSpentAmount',
        'is_planned' => 'setIsPlanned',
        'name' => 'setName',
        'use_spread' => 'setUseSpread',
        'description' => 'setDescription',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'id' => 'getId',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'hours_total' => 'getHoursTotal',
        'hours' => 'getHours',
        'hours_type' => 'getHoursType',
        'spread' => 'getSpread',
        'status' => 'getStatus',
        'project' => 'getProject',
        'projectservice' => 'getProjectservice',
        'projecthourstype' => 'getProjecthourstype',
        'employees' => 'getEmployees',
        'spent_amount' => 'getSpentAmount',
        'is_planned' => 'getIsPlanned',
        'name' => 'getName',
        'use_spread' => 'getUseSpread',
        'description' => 'getDescription',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : 'assignment:abc';
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : '2032-01-01';
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : '2032-12-31';
        $this->container['hours_total'] = isset($data['hours_total']) ? $data['hours_total'] : null;
        $this->container['hours'] = isset($data['hours']) ? $data['hours'] : null;
        $this->container['hours_type'] = isset($data['hours_type']) ? $data['hours_type'] : 'total';
        $this->container['spread'] = isset($data['spread']) ? $data['spread'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['projectservice'] = isset($data['projectservice']) ? $data['projectservice'] : null;
        $this->container['projecthourstype'] = isset($data['projecthourstype']) ? $data['projecthourstype'] : null;
        $this->container['employees'] = isset($data['employees']) ? $data['employees'] : null;
        $this->container['spent_amount'] = isset($data['spent_amount']) ? $data['spent_amount'] : null;
        $this->container['is_planned'] = isset($data['is_planned']) ? $data['is_planned'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : 'Website Design Assignment';
        $this->container['use_spread'] = isset($data['use_spread']) ? $data['use_spread'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
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
     * Gets hours_total
     *
     * @return float
     */
    public function getHoursTotal()
    {
        return $this->container['hours_total'];
    }

    /**
     * Sets hours_total
     *
     * @param float $hours_total hours_total
     *
     * @return $this
     */
    public function setHoursTotal($hours_total)
    {
        $this->container['hours_total'] = $hours_total;

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
        $this->container['hours_type'] = $hours_type;

        return $this;
    }

    /**
     * Gets spread
     *
     * @return int[]
     */
    public function getSpread()
    {
        return $this->container['spread'];
    }

    /**
     * Sets spread
     *
     * @param int[] $spread spread
     *
     * @return $this
     */
    public function setSpread($spread)
    {
        $this->container['spread'] = $spread;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Paqtcom\Simplicate\Model\GetAssignmentStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Paqtcom\Simplicate\Model\GetAssignmentStatus $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets project
     *
     * @return \Paqtcom\Simplicate\Model\GetProjectSimple
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \Paqtcom\Simplicate\Model\GetProjectSimple $project project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets projectservice
     *
     * @return \Paqtcom\Simplicate\Model\GetProjectServiceSimple
     */
    public function getProjectservice()
    {
        return $this->container['projectservice'];
    }

    /**
     * Sets projectservice
     *
     * @param \Paqtcom\Simplicate\Model\GetProjectServiceSimple $projectservice projectservice
     *
     * @return $this
     */
    public function setProjectservice($projectservice)
    {
        $this->container['projectservice'] = $projectservice;

        return $this;
    }

    /**
     * Gets projecthourstype
     *
     * @return \Paqtcom\Simplicate\Model\GetProjectServiceHoursType
     */
    public function getProjecthourstype()
    {
        return $this->container['projecthourstype'];
    }

    /**
     * Sets projecthourstype
     *
     * @param \Paqtcom\Simplicate\Model\GetProjectServiceHoursType $projecthourstype projecthourstype
     *
     * @return $this
     */
    public function setProjecthourstype($projecthourstype)
    {
        $this->container['projecthourstype'] = $projecthourstype;

        return $this;
    }

    /**
     * Gets employees
     *
     * @return \Paqtcom\Simplicate\Model\GetEmployeeSimple[]
     */
    public function getEmployees()
    {
        return $this->container['employees'];
    }

    /**
     * Sets employees
     *
     * @param \Paqtcom\Simplicate\Model\GetEmployeeSimple[] $employees employees
     *
     * @return $this
     */
    public function setEmployees($employees)
    {
        $this->container['employees'] = $employees;

        return $this;
    }

    /**
     * Gets spent_amount
     *
     * @return string
     */
    public function getSpentAmount()
    {
        return $this->container['spent_amount'];
    }

    /**
     * Sets spent_amount
     *
     * @param string $spent_amount spent_amount
     *
     * @return $this
     */
    public function setSpentAmount($spent_amount)
    {
        $this->container['spent_amount'] = $spent_amount;

        return $this;
    }

    /**
     * Gets is_planned
     *
     * @return bool
     */
    public function getIsPlanned()
    {
        return $this->container['is_planned'];
    }

    /**
     * Sets is_planned
     *
     * @param bool $is_planned is_planned
     *
     * @return $this
     */
    public function setIsPlanned($is_planned)
    {
        $this->container['is_planned'] = $is_planned;

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
     * Gets use_spread
     *
     * @return bool
     */
    public function getUseSpread()
    {
        return $this->container['use_spread'];
    }

    /**
     * Sets use_spread
     *
     * @param bool $use_spread use_spread
     *
     * @return $this
     */
    public function setUseSpread($use_spread)
    {
        $this->container['use_spread'] = $use_spread;

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
