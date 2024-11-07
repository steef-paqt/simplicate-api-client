<?php

/**
 * GetInvoiceLine
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
 * GetInvoiceLine Class Doc Comment
 *
 * @category Class
 * @package  Paqtcom\Simplicate
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetInvoiceLine implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $swaggerModelName = 'GetInvoiceLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'id' => 'string',
        'revenue_group' => '\Paqtcom\Simplicate\Model\RevenueGroup',
        'default_service_id' => 'string',
        'vat_class' => '\Paqtcom\Simplicate\Model\VatClass',
        'total_vat' => 'float',
        'service_id' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'date' => 'string',
        'description' => 'string',
        'amount' => 'float',
        'price' => 'float',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'id' => null,
        'revenue_group' => null,
        'default_service_id' => null,
        'vat_class' => null,
        'total_vat' => 'float',
        'service_id' => null,
        'created_at' => null,
        'updated_at' => null,
        'date' => null,
        'description' => null,
        'amount' => 'float',
        'price' => 'float',
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
        'revenue_group' => 'revenue_group',
        'default_service_id' => 'default_service_id',
        'vat_class' => 'vat_class',
        'total_vat' => 'total_vat',
        'service_id' => 'service_id',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'date' => 'date',
        'description' => 'description',
        'amount' => 'amount',
        'price' => 'price',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'id' => 'setId',
        'revenue_group' => 'setRevenueGroup',
        'default_service_id' => 'setDefaultServiceId',
        'vat_class' => 'setVatClass',
        'total_vat' => 'setTotalVat',
        'service_id' => 'setServiceId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'date' => 'setDate',
        'description' => 'setDescription',
        'amount' => 'setAmount',
        'price' => 'setPrice',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'id' => 'getId',
        'revenue_group' => 'getRevenueGroup',
        'default_service_id' => 'getDefaultServiceId',
        'vat_class' => 'getVatClass',
        'total_vat' => 'getTotalVat',
        'service_id' => 'getServiceId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'date' => 'getDate',
        'description' => 'getDescription',
        'amount' => 'getAmount',
        'price' => 'getPrice',
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
        $this->container['revenue_group'] = isset($data['revenue_group']) ? $data['revenue_group'] : null;
        $this->container['default_service_id'] = isset($data['default_service_id']) ? $data['default_service_id'] : null;
        $this->container['vat_class'] = isset($data['vat_class']) ? $data['vat_class'] : null;
        $this->container['total_vat'] = isset($data['total_vat']) ? $data['total_vat'] : null;
        $this->container['service_id'] = isset($data['service_id']) ? $data['service_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
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
     * Gets revenue_group
     *
     * @return \Paqtcom\Simplicate\Model\RevenueGroup
     */
    public function getRevenueGroup()
    {
        return $this->container['revenue_group'];
    }

    /**
     * Sets revenue_group
     *
     * @param \Paqtcom\Simplicate\Model\RevenueGroup $revenue_group revenue_group
     *
     * @return $this
     */
    public function setRevenueGroup($revenue_group)
    {
        $this->container['revenue_group'] = $revenue_group;

        return $this;
    }

    /**
     * Gets default_service_id
     *
     * @return string
     */
    public function getDefaultServiceId()
    {
        return $this->container['default_service_id'];
    }

    /**
     * Sets default_service_id
     *
     * @param string $default_service_id default_service_id
     *
     * @return $this
     */
    public function setDefaultServiceId($default_service_id)
    {
        $this->container['default_service_id'] = $default_service_id;

        return $this;
    }

    /**
     * Gets vat_class
     *
     * @return \Paqtcom\Simplicate\Model\VatClass
     */
    public function getVatClass()
    {
        return $this->container['vat_class'];
    }

    /**
     * Sets vat_class
     *
     * @param \Paqtcom\Simplicate\Model\VatClass $vat_class vat_class
     *
     * @return $this
     */
    public function setVatClass($vat_class)
    {
        $this->container['vat_class'] = $vat_class;

        return $this;
    }

    /**
     * Gets total_vat
     *
     * @return float
     */
    public function getTotalVat()
    {
        return $this->container['total_vat'];
    }

    /**
     * Sets total_vat
     *
     * @param float $total_vat total_vat
     *
     * @return $this
     */
    public function setTotalVat($total_vat)
    {
        $this->container['total_vat'] = $total_vat;

        return $this;
    }

    /**
     * Gets service_id
     *
     * @return string
     */
    public function getServiceId()
    {
        return $this->container['service_id'];
    }

    /**
     * Sets service_id
     *
     * @param string $service_id service_id
     *
     * @return $this
     */
    public function setServiceId($service_id)
    {
        $this->container['service_id'] = $service_id;

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
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

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
