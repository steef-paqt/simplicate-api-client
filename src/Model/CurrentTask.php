<?php

/**
 * CurrentTask
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
 * CurrentTask Class Doc Comment
 *
 * @category Class
 * @package  Paqtcom\Simplicate
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CurrentTask implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $swaggerModelName = 'CurrentTask';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'id' => 'string',
        'description' => 'string',
        'can_change_destination' => 'bool',
        'will_send_email' => 'bool',
        'is_return_to_sender' => 'bool',
        'average_hours_cost' => 'float',
        'can_be_transferred' => 'bool',
        'employees' => '\Paqtcom\Simplicate\Model\CurrentTaskEmployee[]',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'id' => null,
        'description' => null,
        'can_change_destination' => null,
        'will_send_email' => null,
        'is_return_to_sender' => null,
        'average_hours_cost' => 'float',
        'can_be_transferred' => null,
        'employees' => null,
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
        'description' => 'description',
        'can_change_destination' => 'can_change_destination',
        'will_send_email' => 'will_send_email',
        'is_return_to_sender' => 'is_return_to_sender',
        'average_hours_cost' => 'average_hours_cost',
        'can_be_transferred' => 'can_be_transferred',
        'employees' => 'employees',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'id' => 'setId',
        'description' => 'setDescription',
        'can_change_destination' => 'setCanChangeDestination',
        'will_send_email' => 'setWillSendEmail',
        'is_return_to_sender' => 'setIsReturnToSender',
        'average_hours_cost' => 'setAverageHoursCost',
        'can_be_transferred' => 'setCanBeTransferred',
        'employees' => 'setEmployees',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'id' => 'getId',
        'description' => 'getDescription',
        'can_change_destination' => 'getCanChangeDestination',
        'will_send_email' => 'getWillSendEmail',
        'is_return_to_sender' => 'getIsReturnToSender',
        'average_hours_cost' => 'getAverageHoursCost',
        'can_be_transferred' => 'getCanBeTransferred',
        'employees' => 'getEmployees',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['can_change_destination'] = isset($data['can_change_destination']) ? $data['can_change_destination'] : null;
        $this->container['will_send_email'] = isset($data['will_send_email']) ? $data['will_send_email'] : null;
        $this->container['is_return_to_sender'] = isset($data['is_return_to_sender']) ? $data['is_return_to_sender'] : null;
        $this->container['average_hours_cost'] = isset($data['average_hours_cost']) ? $data['average_hours_cost'] : null;
        $this->container['can_be_transferred'] = isset($data['can_be_transferred']) ? $data['can_be_transferred'] : null;
        $this->container['employees'] = isset($data['employees']) ? $data['employees'] : null;
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
     * Gets can_change_destination
     *
     * @return bool
     */
    public function getCanChangeDestination()
    {
        return $this->container['can_change_destination'];
    }

    /**
     * Sets can_change_destination
     *
     * @param bool $can_change_destination can_change_destination
     *
     * @return $this
     */
    public function setCanChangeDestination($can_change_destination)
    {
        $this->container['can_change_destination'] = $can_change_destination;

        return $this;
    }

    /**
     * Gets will_send_email
     *
     * @return bool
     */
    public function getWillSendEmail()
    {
        return $this->container['will_send_email'];
    }

    /**
     * Sets will_send_email
     *
     * @param bool $will_send_email will_send_email
     *
     * @return $this
     */
    public function setWillSendEmail($will_send_email)
    {
        $this->container['will_send_email'] = $will_send_email;

        return $this;
    }

    /**
     * Gets is_return_to_sender
     *
     * @return bool
     */
    public function getIsReturnToSender()
    {
        return $this->container['is_return_to_sender'];
    }

    /**
     * Sets is_return_to_sender
     *
     * @param bool $is_return_to_sender is_return_to_sender
     *
     * @return $this
     */
    public function setIsReturnToSender($is_return_to_sender)
    {
        $this->container['is_return_to_sender'] = $is_return_to_sender;

        return $this;
    }

    /**
     * Gets average_hours_cost
     *
     * @return float
     */
    public function getAverageHoursCost()
    {
        return $this->container['average_hours_cost'];
    }

    /**
     * Sets average_hours_cost
     *
     * @param float $average_hours_cost average_hours_cost
     *
     * @return $this
     */
    public function setAverageHoursCost($average_hours_cost)
    {
        $this->container['average_hours_cost'] = $average_hours_cost;

        return $this;
    }

    /**
     * Gets can_be_transferred
     *
     * @return bool
     */
    public function getCanBeTransferred()
    {
        return $this->container['can_be_transferred'];
    }

    /**
     * Sets can_be_transferred
     *
     * @param bool $can_be_transferred can_be_transferred
     *
     * @return $this
     */
    public function setCanBeTransferred($can_be_transferred)
    {
        $this->container['can_be_transferred'] = $can_be_transferred;

        return $this;
    }

    /**
     * Gets employees
     *
     * @return \Paqtcom\Simplicate\Model\CurrentTaskEmployee[]
     */
    public function getEmployees()
    {
        return $this->container['employees'];
    }

    /**
     * Sets employees
     *
     * @param \Paqtcom\Simplicate\Model\CurrentTaskEmployee[] $employees employees
     *
     * @return $this
     */
    public function setEmployees($employees)
    {
        $this->container['employees'] = $employees;

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
