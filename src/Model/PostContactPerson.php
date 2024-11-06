<?php
/**
 * PostContactPerson
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
 * PostContactPerson Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PostContactPerson implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PostContactPerson';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'organization_id' => 'string',
        'person_id' => 'string',
        'is_active' => 'bool',
        'work_function' => 'string',
        'work_email' => 'string',
        'work_phone' => 'string',
        'work_mobile' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'organization_id' => null,
        'person_id' => null,
        'is_active' => null,
        'work_function' => null,
        'work_email' => null,
        'work_phone' => null,
        'work_mobile' => null
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
        'organization_id' => 'organization_id',
        'person_id' => 'person_id',
        'is_active' => 'is_active',
        'work_function' => 'work_function',
        'work_email' => 'work_email',
        'work_phone' => 'work_phone',
        'work_mobile' => 'work_mobile'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'organization_id' => 'setOrganizationId',
        'person_id' => 'setPersonId',
        'is_active' => 'setIsActive',
        'work_function' => 'setWorkFunction',
        'work_email' => 'setWorkEmail',
        'work_phone' => 'setWorkPhone',
        'work_mobile' => 'setWorkMobile'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'organization_id' => 'getOrganizationId',
        'person_id' => 'getPersonId',
        'is_active' => 'getIsActive',
        'work_function' => 'getWorkFunction',
        'work_email' => 'getWorkEmail',
        'work_phone' => 'getWorkPhone',
        'work_mobile' => 'getWorkMobile'
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
        $this->container['organization_id'] = isset($data['organization_id']) ? $data['organization_id'] : null;
        $this->container['person_id'] = isset($data['person_id']) ? $data['person_id'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['work_function'] = isset($data['work_function']) ? $data['work_function'] : null;
        $this->container['work_email'] = isset($data['work_email']) ? $data['work_email'] : null;
        $this->container['work_phone'] = isset($data['work_phone']) ? $data['work_phone'] : null;
        $this->container['work_mobile'] = isset($data['work_mobile']) ? $data['work_mobile'] : null;
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
     * @param string $organization_id See /crm/organization
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
     * @param string $person_id See /crm/person
     *
     * @return $this
     */
    public function setPersonId($person_id)
    {
        $this->container['person_id'] = $person_id;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active is_active
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets work_function
     *
     * @return string
     */
    public function getWorkFunction()
    {
        return $this->container['work_function'];
    }

    /**
     * Sets work_function
     *
     * @param string $work_function work_function
     *
     * @return $this
     */
    public function setWorkFunction($work_function)
    {
        $this->container['work_function'] = $work_function;

        return $this;
    }

    /**
     * Gets work_email
     *
     * @return string
     */
    public function getWorkEmail()
    {
        return $this->container['work_email'];
    }

    /**
     * Sets work_email
     *
     * @param string $work_email work_email
     *
     * @return $this
     */
    public function setWorkEmail($work_email)
    {
        $this->container['work_email'] = $work_email;

        return $this;
    }

    /**
     * Gets work_phone
     *
     * @return string
     */
    public function getWorkPhone()
    {
        return $this->container['work_phone'];
    }

    /**
     * Sets work_phone
     *
     * @param string $work_phone work_phone
     *
     * @return $this
     */
    public function setWorkPhone($work_phone)
    {
        $this->container['work_phone'] = $work_phone;

        return $this;
    }

    /**
     * Gets work_mobile
     *
     * @return string
     */
    public function getWorkMobile()
    {
        return $this->container['work_mobile'];
    }

    /**
     * Sets work_mobile
     *
     * @param string $work_mobile work_mobile
     *
     * @return $this
     */
    public function setWorkMobile($work_mobile)
    {
        $this->container['work_mobile'] = $work_mobile;

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


