<?php

/**
 * SalesProgressHistory
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
 * SalesProgressHistory Class Doc Comment
 *
 * @category Class
 * @package  Paqtcom\Simplicate
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesProgressHistory implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $swaggerModelName = 'SalesProgressHistory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'id' => 'string',
        'sales' => 'object',
        'sales_id' => 'string',
        'from_sales_progress' => '\Paqtcom\Simplicate\Model\SalesProgress',
        'from_sales_progress_id' => 'string',
        'to_sales_progress' => '\Paqtcom\Simplicate\Model\SalesProgress',
        'to_sales_progress_id' => 'string',
        'date' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'id' => null,
        'sales' => null,
        'sales_id' => null,
        'from_sales_progress' => null,
        'from_sales_progress_id' => null,
        'to_sales_progress' => null,
        'to_sales_progress_id' => null,
        'date' => null,
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
        'sales' => 'sales',
        'sales_id' => 'sales_id',
        'from_sales_progress' => 'from_sales_progress',
        'from_sales_progress_id' => 'from_sales_progress_id',
        'to_sales_progress' => 'to_sales_progress',
        'to_sales_progress_id' => 'to_sales_progress_id',
        'date' => 'date',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'id' => 'setId',
        'sales' => 'setSales',
        'sales_id' => 'setSalesId',
        'from_sales_progress' => 'setFromSalesProgress',
        'from_sales_progress_id' => 'setFromSalesProgressId',
        'to_sales_progress' => 'setToSalesProgress',
        'to_sales_progress_id' => 'setToSalesProgressId',
        'date' => 'setDate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'id' => 'getId',
        'sales' => 'getSales',
        'sales_id' => 'getSalesId',
        'from_sales_progress' => 'getFromSalesProgress',
        'from_sales_progress_id' => 'getFromSalesProgressId',
        'to_sales_progress' => 'getToSalesProgress',
        'to_sales_progress_id' => 'getToSalesProgressId',
        'date' => 'getDate',
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
        $this->container['sales'] = isset($data['sales']) ? $data['sales'] : null;
        $this->container['sales_id'] = isset($data['sales_id']) ? $data['sales_id'] : null;
        $this->container['from_sales_progress'] = isset($data['from_sales_progress']) ? $data['from_sales_progress'] : null;
        $this->container['from_sales_progress_id'] = isset($data['from_sales_progress_id']) ? $data['from_sales_progress_id'] : null;
        $this->container['to_sales_progress'] = isset($data['to_sales_progress']) ? $data['to_sales_progress'] : null;
        $this->container['to_sales_progress_id'] = isset($data['to_sales_progress_id']) ? $data['to_sales_progress_id'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
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
     * Gets sales
     *
     * @return object
     */
    public function getSales()
    {
        return $this->container['sales'];
    }

    /**
     * Sets sales
     *
     * @param object $sales sales
     *
     * @return $this
     */
    public function setSales($sales)
    {
        $this->container['sales'] = $sales;

        return $this;
    }

    /**
     * Gets sales_id
     *
     * @return string
     */
    public function getSalesId()
    {
        return $this->container['sales_id'];
    }

    /**
     * Sets sales_id
     *
     * @param string $sales_id sales_id
     *
     * @return $this
     */
    public function setSalesId($sales_id)
    {
        $this->container['sales_id'] = $sales_id;

        return $this;
    }

    /**
     * Gets from_sales_progress
     *
     * @return \Paqtcom\Simplicate\Model\SalesProgress
     */
    public function getFromSalesProgress()
    {
        return $this->container['from_sales_progress'];
    }

    /**
     * Sets from_sales_progress
     *
     * @param \Paqtcom\Simplicate\Model\SalesProgress $from_sales_progress from_sales_progress
     *
     * @return $this
     */
    public function setFromSalesProgress($from_sales_progress)
    {
        $this->container['from_sales_progress'] = $from_sales_progress;

        return $this;
    }

    /**
     * Gets from_sales_progress_id
     *
     * @return string
     */
    public function getFromSalesProgressId()
    {
        return $this->container['from_sales_progress_id'];
    }

    /**
     * Sets from_sales_progress_id
     *
     * @param string $from_sales_progress_id from_sales_progress_id
     *
     * @return $this
     */
    public function setFromSalesProgressId($from_sales_progress_id)
    {
        $this->container['from_sales_progress_id'] = $from_sales_progress_id;

        return $this;
    }

    /**
     * Gets to_sales_progress
     *
     * @return \Paqtcom\Simplicate\Model\SalesProgress
     */
    public function getToSalesProgress()
    {
        return $this->container['to_sales_progress'];
    }

    /**
     * Sets to_sales_progress
     *
     * @param \Paqtcom\Simplicate\Model\SalesProgress $to_sales_progress to_sales_progress
     *
     * @return $this
     */
    public function setToSalesProgress($to_sales_progress)
    {
        $this->container['to_sales_progress'] = $to_sales_progress;

        return $this;
    }

    /**
     * Gets to_sales_progress_id
     *
     * @return string
     */
    public function getToSalesProgressId()
    {
        return $this->container['to_sales_progress_id'];
    }

    /**
     * Sets to_sales_progress_id
     *
     * @param string $to_sales_progress_id to_sales_progress_id
     *
     * @return $this
     */
    public function setToSalesProgressId($to_sales_progress_id)
    {
        $this->container['to_sales_progress_id'] = $to_sales_progress_id;

        return $this;
    }

    /**
     * Gets date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

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
