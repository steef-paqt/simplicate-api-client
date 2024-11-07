<?php

/**
 * PostDuplicateSales
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
 * PostDuplicateSales Class Doc Comment
 *
 * @category Class
 * @package  Paqtcom\Simplicate
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PostDuplicateSales implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PostDuplicateSales';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_new_subject' => 'bool',
        'subject' => 'string',
        'is_new_responsible_employee' => 'bool',
        'responsible_employee_id' => 'string',
        'is_new_organization_or_person' => 'bool',
        'organization_id' => 'string',
        'person_id' => 'string',
        'start_date' => 'string',
        'end_date' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_new_subject' => null,
        'subject' => null,
        'is_new_responsible_employee' => null,
        'responsible_employee_id' => null,
        'is_new_organization_or_person' => null,
        'organization_id' => null,
        'person_id' => null,
        'start_date' => null,
        'end_date' => null,
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
        'is_new_subject' => 'is_new_subject',
        'subject' => 'subject',
        'is_new_responsible_employee' => 'is_new_responsible_employee',
        'responsible_employee_id' => 'responsible_employee_id',
        'is_new_organization_or_person' => 'is_new_organization_or_person',
        'organization_id' => 'organization_id',
        'person_id' => 'person_id',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_new_subject' => 'setIsNewSubject',
        'subject' => 'setSubject',
        'is_new_responsible_employee' => 'setIsNewResponsibleEmployee',
        'responsible_employee_id' => 'setResponsibleEmployeeId',
        'is_new_organization_or_person' => 'setIsNewOrganizationOrPerson',
        'organization_id' => 'setOrganizationId',
        'person_id' => 'setPersonId',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_new_subject' => 'getIsNewSubject',
        'subject' => 'getSubject',
        'is_new_responsible_employee' => 'getIsNewResponsibleEmployee',
        'responsible_employee_id' => 'getResponsibleEmployeeId',
        'is_new_organization_or_person' => 'getIsNewOrganizationOrPerson',
        'organization_id' => 'getOrganizationId',
        'person_id' => 'getPersonId',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
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
        $this->container['is_new_subject'] = isset($data['is_new_subject']) ? $data['is_new_subject'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['is_new_responsible_employee'] = isset($data['is_new_responsible_employee']) ? $data['is_new_responsible_employee'] : null;
        $this->container['responsible_employee_id'] = isset($data['responsible_employee_id']) ? $data['responsible_employee_id'] : null;
        $this->container['is_new_organization_or_person'] = isset($data['is_new_organization_or_person']) ? $data['is_new_organization_or_person'] : null;
        $this->container['organization_id'] = isset($data['organization_id']) ? $data['organization_id'] : null;
        $this->container['person_id'] = isset($data['person_id']) ? $data['person_id'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
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
     * Gets is_new_subject
     *
     * @return bool
     */
    public function getIsNewSubject()
    {
        return $this->container['is_new_subject'];
    }

    /**
     * Sets is_new_subject
     *
     * @param bool $is_new_subject is_new_subject
     *
     * @return $this
     */
    public function setIsNewSubject($is_new_subject)
    {
        $this->container['is_new_subject'] = $is_new_subject;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets is_new_responsible_employee
     *
     * @return bool
     */
    public function getIsNewResponsibleEmployee()
    {
        return $this->container['is_new_responsible_employee'];
    }

    /**
     * Sets is_new_responsible_employee
     *
     * @param bool $is_new_responsible_employee is_new_responsible_employee
     *
     * @return $this
     */
    public function setIsNewResponsibleEmployee($is_new_responsible_employee)
    {
        $this->container['is_new_responsible_employee'] = $is_new_responsible_employee;

        return $this;
    }

    /**
     * Gets responsible_employee_id
     *
     * @return string
     */
    public function getResponsibleEmployeeId()
    {
        return $this->container['responsible_employee_id'];
    }

    /**
     * Sets responsible_employee_id
     *
     * @param string $responsible_employee_id responsible_employee_id
     *
     * @return $this
     */
    public function setResponsibleEmployeeId($responsible_employee_id)
    {
        $this->container['responsible_employee_id'] = $responsible_employee_id;

        return $this;
    }

    /**
     * Gets is_new_organization_or_person
     *
     * @return bool
     */
    public function getIsNewOrganizationOrPerson()
    {
        return $this->container['is_new_organization_or_person'];
    }

    /**
     * Sets is_new_organization_or_person
     *
     * @param bool $is_new_organization_or_person is_new_organization_or_person
     *
     * @return $this
     */
    public function setIsNewOrganizationOrPerson($is_new_organization_or_person)
    {
        $this->container['is_new_organization_or_person'] = $is_new_organization_or_person;

        return $this;
    }

    /**
     * Gets organization_id
     *
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->container['organization_id'];
    }

    /**
     * Sets organization_id
     *
     * @param string $organization_id organization_id
     *
     * @return $this
     */
    public function setOrganizationId($organization_id)
    {
        $this->container['organization_id'] = $organization_id;

        return $this;
    }

    /**
     * Gets person_id
     *
     * @return string
     */
    public function getPersonId()
    {
        return $this->container['person_id'];
    }

    /**
     * Sets person_id
     *
     * @param string $person_id person_id
     *
     * @return $this
     */
    public function setPersonId($person_id)
    {
        $this->container['person_id'] = $person_id;

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
