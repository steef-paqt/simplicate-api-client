<?php
/**
 * PostMessage
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
 * PostMessage Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PostMessage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PostMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'messagetype_id' => 'string',
        'linked_to' => '\Swagger\Client\Model\PostMessageLinkedTo',
        'created_by_id' => 'string',
        'title' => 'string',
        'content_fields' => '\Swagger\Client\Model\ContentField[]',
        'content' => 'string',
        'display_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'messagetype_id' => null,
        'linked_to' => null,
        'created_by_id' => null,
        'title' => null,
        'content_fields' => null,
        'content' => null,
        'display_date' => null
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
        'messagetype_id' => 'messagetype_id',
        'linked_to' => 'linked_to',
        'created_by_id' => 'created_by_id',
        'title' => 'title',
        'content_fields' => 'content_fields',
        'content' => 'content',
        'display_date' => 'display_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'messagetype_id' => 'setMessagetypeId',
        'linked_to' => 'setLinkedTo',
        'created_by_id' => 'setCreatedById',
        'title' => 'setTitle',
        'content_fields' => 'setContentFields',
        'content' => 'setContent',
        'display_date' => 'setDisplayDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'messagetype_id' => 'getMessagetypeId',
        'linked_to' => 'getLinkedTo',
        'created_by_id' => 'getCreatedById',
        'title' => 'getTitle',
        'content_fields' => 'getContentFields',
        'content' => 'getContent',
        'display_date' => 'getDisplayDate'
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
        $this->container['messagetype_id'] = isset($data['messagetype_id']) ? $data['messagetype_id'] : null;
        $this->container['linked_to'] = isset($data['linked_to']) ? $data['linked_to'] : null;
        $this->container['created_by_id'] = isset($data['created_by_id']) ? $data['created_by_id'] : 'employee:abc123';
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['content_fields'] = isset($data['content_fields']) ? $data['content_fields'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['display_date'] = isset($data['display_date']) ? $data['display_date'] : null;
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
     * Gets messagetype_id
     *
     * @return string
     */
    public function getMessagetypeId()
    {
        return $this->container['messagetype_id'];
    }

    /**
     * Sets messagetype_id
     *
     * @param string $messagetype_id messagetype_id
     *
     * @return $this
     */
    public function setMessagetypeId($messagetype_id)
    {
        $this->container['messagetype_id'] = $messagetype_id;

        return $this;
    }

    /**
     * Gets linked_to
     *
     * @return \Swagger\Client\Model\PostMessageLinkedTo
     */
    public function getLinkedTo()
    {
        return $this->container['linked_to'];
    }

    /**
     * Sets linked_to
     *
     * @param \Swagger\Client\Model\PostMessageLinkedTo $linked_to linked_to
     *
     * @return $this
     */
    public function setLinkedTo($linked_to)
    {
        $this->container['linked_to'] = $linked_to;

        return $this;
    }

    /**
     * Gets created_by_id
     *
     * @return string
     */
    public function getCreatedById()
    {
        return $this->container['created_by_id'];
    }

    /**
     * Sets created_by_id
     *
     * @param string $created_by_id employee_id as seen in /crm/employee
     *
     * @return $this
     */
    public function setCreatedById($created_by_id)
    {
        $this->container['created_by_id'] = $created_by_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets content_fields
     *
     * @return \Swagger\Client\Model\ContentField[]
     */
    public function getContentFields()
    {
        return $this->container['content_fields'];
    }

    /**
     * Sets content_fields
     *
     * @param \Swagger\Client\Model\ContentField[] $content_fields content_fields
     *
     * @return $this
     */
    public function setContentFields($content_fields)
    {
        $this->container['content_fields'] = $content_fields;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets display_date
     *
     * @return string
     */
    public function getDisplayDate()
    {
        return $this->container['display_date'];
    }

    /**
     * Sets display_date
     *
     * @param string $display_date display_date
     *
     * @return $this
     */
    public function setDisplayDate($display_date)
    {
        $this->container['display_date'] = $display_date;

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


