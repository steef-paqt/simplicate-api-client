<?php

/**
 * GetProposition
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
 * GetProposition Class Doc Comment
 *
 * @category Class
 * @package  Paqtcom\Simplicate
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetProposition implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $swaggerModelName = 'GetProposition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'id' => 'string',
        'total_hours' => 'float',
        'total_mileage' => 'float',
        'total_fixed' => 'float',
        'total_terms' => 'float',
        'total_purchase' => 'float',
        'total_advance_deposit' => 'float',
        'total_future' => 'float',
        'simplicate_url' => 'string',
        'project' => '\Paqtcom\Simplicate\Model\GetProjectSimple',
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
        'total_hours' => 'float',
        'total_mileage' => 'float',
        'total_fixed' => 'float',
        'total_terms' => 'float',
        'total_purchase' => 'float',
        'total_advance_deposit' => 'float',
        'total_future' => 'float',
        'simplicate_url' => null,
        'project' => null,
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
        'total_hours' => 'total_hours',
        'total_mileage' => 'total_mileage',
        'total_fixed' => 'total_fixed',
        'total_terms' => 'total_terms',
        'total_purchase' => 'total_purchase',
        'total_advance_deposit' => 'total_advance_deposit',
        'total_future' => 'total_future',
        'simplicate_url' => 'simplicate_url',
        'project' => 'project',
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
        'total_hours' => 'setTotalHours',
        'total_mileage' => 'setTotalMileage',
        'total_fixed' => 'setTotalFixed',
        'total_terms' => 'setTotalTerms',
        'total_purchase' => 'setTotalPurchase',
        'total_advance_deposit' => 'setTotalAdvanceDeposit',
        'total_future' => 'setTotalFuture',
        'simplicate_url' => 'setSimplicateUrl',
        'project' => 'setProject',
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
        'total_hours' => 'getTotalHours',
        'total_mileage' => 'getTotalMileage',
        'total_fixed' => 'getTotalFixed',
        'total_terms' => 'getTotalTerms',
        'total_purchase' => 'getTotalPurchase',
        'total_advance_deposit' => 'getTotalAdvanceDeposit',
        'total_future' => 'getTotalFuture',
        'simplicate_url' => 'getSimplicateUrl',
        'project' => 'getProject',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['total_hours'] = isset($data['total_hours']) ? $data['total_hours'] : null;
        $this->container['total_mileage'] = isset($data['total_mileage']) ? $data['total_mileage'] : null;
        $this->container['total_fixed'] = isset($data['total_fixed']) ? $data['total_fixed'] : null;
        $this->container['total_terms'] = isset($data['total_terms']) ? $data['total_terms'] : null;
        $this->container['total_purchase'] = isset($data['total_purchase']) ? $data['total_purchase'] : null;
        $this->container['total_advance_deposit'] = isset($data['total_advance_deposit']) ? $data['total_advance_deposit'] : null;
        $this->container['total_future'] = isset($data['total_future']) ? $data['total_future'] : null;
        $this->container['simplicate_url'] = isset($data['simplicate_url']) ? $data['simplicate_url'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
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
     * Gets total_hours
     *
     * @return float
     */
    public function getTotalHours()
    {
        return $this->container['total_hours'];
    }

    /**
     * Sets total_hours
     *
     * @param float $total_hours total_hours
     *
     * @return $this
     */
    public function setTotalHours($total_hours)
    {
        $this->container['total_hours'] = $total_hours;

        return $this;
    }

    /**
     * Gets total_mileage
     *
     * @return float
     */
    public function getTotalMileage()
    {
        return $this->container['total_mileage'];
    }

    /**
     * Sets total_mileage
     *
     * @param float $total_mileage total_mileage
     *
     * @return $this
     */
    public function setTotalMileage($total_mileage)
    {
        $this->container['total_mileage'] = $total_mileage;

        return $this;
    }

    /**
     * Gets total_fixed
     *
     * @return float
     */
    public function getTotalFixed()
    {
        return $this->container['total_fixed'];
    }

    /**
     * Sets total_fixed
     *
     * @param float $total_fixed total_fixed
     *
     * @return $this
     */
    public function setTotalFixed($total_fixed)
    {
        $this->container['total_fixed'] = $total_fixed;

        return $this;
    }

    /**
     * Gets total_terms
     *
     * @return float
     */
    public function getTotalTerms()
    {
        return $this->container['total_terms'];
    }

    /**
     * Sets total_terms
     *
     * @param float $total_terms total_terms
     *
     * @return $this
     */
    public function setTotalTerms($total_terms)
    {
        $this->container['total_terms'] = $total_terms;

        return $this;
    }

    /**
     * Gets total_purchase
     *
     * @return float
     */
    public function getTotalPurchase()
    {
        return $this->container['total_purchase'];
    }

    /**
     * Sets total_purchase
     *
     * @param float $total_purchase total_purchase
     *
     * @return $this
     */
    public function setTotalPurchase($total_purchase)
    {
        $this->container['total_purchase'] = $total_purchase;

        return $this;
    }

    /**
     * Gets total_advance_deposit
     *
     * @return float
     */
    public function getTotalAdvanceDeposit()
    {
        return $this->container['total_advance_deposit'];
    }

    /**
     * Sets total_advance_deposit
     *
     * @param float $total_advance_deposit total_advance_deposit
     *
     * @return $this
     */
    public function setTotalAdvanceDeposit($total_advance_deposit)
    {
        $this->container['total_advance_deposit'] = $total_advance_deposit;

        return $this;
    }

    /**
     * Gets total_future
     *
     * @return float
     */
    public function getTotalFuture()
    {
        return $this->container['total_future'];
    }

    /**
     * Sets total_future
     *
     * @param float $total_future total_future
     *
     * @return $this
     */
    public function setTotalFuture($total_future)
    {
        $this->container['total_future'] = $total_future;

        return $this;
    }

    /**
     * Gets simplicate_url
     *
     * @return string
     */
    public function getSimplicateUrl()
    {
        return $this->container['simplicate_url'];
    }

    /**
     * Sets simplicate_url
     *
     * @param string $simplicate_url simplicate_url
     *
     * @return $this
     */
    public function setSimplicateUrl($simplicate_url)
    {
        $this->container['simplicate_url'] = $simplicate_url;

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
