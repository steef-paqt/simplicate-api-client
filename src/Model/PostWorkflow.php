<?php

/**
 * PostWorkflow
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
 * PostWorkflow Class Doc Comment
 *
 * @category Class
 * @package  Paqtcom\Simplicate
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PostWorkflow implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $swaggerModelName = 'PostWorkflow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'defaultworkflow_id' => 'string',
        'created_by' => '\Paqtcom\Simplicate\Model\CreatedBy',
        'linked_to' => '\Paqtcom\Simplicate\Model\LinkedTo[]',
        'attachments' => '\Paqtcom\Simplicate\Model\PostDocument[]',
        'comments' => '\Paqtcom\Simplicate\Model\Comment[]',
        'destination_employee_id' => 'string',
        'transfer_to_employee_id' => 'string',
        'transfer_to_message' => 'string',
        'title' => 'string',
        'description' => 'string',
        'deadline_date' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'defaultworkflow_id' => null,
        'created_by' => null,
        'linked_to' => null,
        'attachments' => null,
        'comments' => null,
        'destination_employee_id' => null,
        'transfer_to_employee_id' => null,
        'transfer_to_message' => null,
        'title' => null,
        'description' => null,
        'deadline_date' => null,
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
        'defaultworkflow_id' => 'defaultworkflow_id',
        'created_by' => 'created_by',
        'linked_to' => 'linked_to',
        'attachments' => 'attachments',
        'comments' => 'comments',
        'destination_employee_id' => 'destination_employee_id',
        'transfer_to_employee_id' => 'transfer_to_employee_id',
        'transfer_to_message' => 'transfer_to_message',
        'title' => 'title',
        'description' => 'description',
        'deadline_date' => 'deadline_date',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'defaultworkflow_id' => 'setDefaultworkflowId',
        'created_by' => 'setCreatedBy',
        'linked_to' => 'setLinkedTo',
        'attachments' => 'setAttachments',
        'comments' => 'setComments',
        'destination_employee_id' => 'setDestinationEmployeeId',
        'transfer_to_employee_id' => 'setTransferToEmployeeId',
        'transfer_to_message' => 'setTransferToMessage',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'deadline_date' => 'setDeadlineDate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'defaultworkflow_id' => 'getDefaultworkflowId',
        'created_by' => 'getCreatedBy',
        'linked_to' => 'getLinkedTo',
        'attachments' => 'getAttachments',
        'comments' => 'getComments',
        'destination_employee_id' => 'getDestinationEmployeeId',
        'transfer_to_employee_id' => 'getTransferToEmployeeId',
        'transfer_to_message' => 'getTransferToMessage',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'deadline_date' => 'getDeadlineDate',
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
        $this->container['defaultworkflow_id'] = isset($data['defaultworkflow_id']) ? $data['defaultworkflow_id'] : null;
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['linked_to'] = isset($data['linked_to']) ? $data['linked_to'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['destination_employee_id'] = isset($data['destination_employee_id']) ? $data['destination_employee_id'] : null;
        $this->container['transfer_to_employee_id'] = isset($data['transfer_to_employee_id']) ? $data['transfer_to_employee_id'] : null;
        $this->container['transfer_to_message'] = isset($data['transfer_to_message']) ? $data['transfer_to_message'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['deadline_date'] = isset($data['deadline_date']) ? $data['deadline_date'] : null;
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
     * Gets defaultworkflow_id
     *
     * @return string
     */
    public function getDefaultworkflowId()
    {
        return $this->container['defaultworkflow_id'];
    }

    /**
     * Sets defaultworkflow_id
     *
     * @param string $defaultworkflow_id defaultworkflow_id
     *
     * @return $this
     */
    public function setDefaultworkflowId($defaultworkflow_id)
    {
        $this->container['defaultworkflow_id'] = $defaultworkflow_id;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return \Paqtcom\Simplicate\Model\CreatedBy
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param \Paqtcom\Simplicate\Model\CreatedBy $created_by created_by
     *
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets linked_to
     *
     * @return \Paqtcom\Simplicate\Model\LinkedTo[]
     */
    public function getLinkedTo()
    {
        return $this->container['linked_to'];
    }

    /**
     * Sets linked_to
     *
     * @param \Paqtcom\Simplicate\Model\LinkedTo[] $linked_to linked_to
     *
     * @return $this
     */
    public function setLinkedTo($linked_to)
    {
        $this->container['linked_to'] = $linked_to;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \Paqtcom\Simplicate\Model\PostDocument[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \Paqtcom\Simplicate\Model\PostDocument[] $attachments attachments
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return \Paqtcom\Simplicate\Model\Comment[]
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param \Paqtcom\Simplicate\Model\Comment[] $comments comments
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets destination_employee_id
     *
     * @return string
     */
    public function getDestinationEmployeeId()
    {
        return $this->container['destination_employee_id'];
    }

    /**
     * Sets destination_employee_id
     *
     * @param string $destination_employee_id destination_employee_id
     *
     * @return $this
     */
    public function setDestinationEmployeeId($destination_employee_id)
    {
        $this->container['destination_employee_id'] = $destination_employee_id;

        return $this;
    }

    /**
     * Gets transfer_to_employee_id
     *
     * @return string
     */
    public function getTransferToEmployeeId()
    {
        return $this->container['transfer_to_employee_id'];
    }

    /**
     * Sets transfer_to_employee_id
     *
     * @param string $transfer_to_employee_id transfer_to_employee_id
     *
     * @return $this
     */
    public function setTransferToEmployeeId($transfer_to_employee_id)
    {
        $this->container['transfer_to_employee_id'] = $transfer_to_employee_id;

        return $this;
    }

    /**
     * Gets transfer_to_message
     *
     * @return string
     */
    public function getTransferToMessage()
    {
        return $this->container['transfer_to_message'];
    }

    /**
     * Sets transfer_to_message
     *
     * @param string $transfer_to_message transfer_to_message
     *
     * @return $this
     */
    public function setTransferToMessage($transfer_to_message)
    {
        $this->container['transfer_to_message'] = $transfer_to_message;

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
     * Gets deadline_date
     *
     * @return string
     */
    public function getDeadlineDate()
    {
        return $this->container['deadline_date'];
    }

    /**
     * Sets deadline_date
     *
     * @param string $deadline_date deadline_date
     *
     * @return $this
     */
    public function setDeadlineDate($deadline_date)
    {
        $this->container['deadline_date'] = $deadline_date;

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
