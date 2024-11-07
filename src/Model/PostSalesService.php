<?php

/**
 * PostSalesService
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
 * PostSalesService Class Doc Comment
 *
 * @category Class
 * @package  Paqtcom\Simplicate
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PostSalesService implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PostSalesService';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'revenue_group_id' => 'string',
        'sales_id' => 'string',
        'default_service_id' => 'string',
        'name' => 'string',
        'invoice_method' => 'string',
        'amount' => 'float',
        'price' => 'float',
        'show_itemtype' => 'int',
        'total' => 'string',
        'position' => 'int',
        'subscription_cycle' => 'string',
        'explanation' => 'string',
        'track_hours' => 'bool',
        'track_cost' => 'bool',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'revenue_group_id' => null,
        'sales_id' => null,
        'default_service_id' => null,
        'name' => null,
        'invoice_method' => null,
        'amount' => 'float',
        'price' => 'float',
        'show_itemtype' => null,
        'total' => null,
        'position' => null,
        'subscription_cycle' => null,
        'explanation' => null,
        'track_hours' => null,
        'track_cost' => null,
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
        'revenue_group_id' => 'revenue_group_id',
        'sales_id' => 'sales_id',
        'default_service_id' => 'default_service_id',
        'name' => 'name',
        'invoice_method' => 'invoice_method',
        'amount' => 'amount',
        'price' => 'price',
        'show_itemtype' => 'show_itemtype',
        'total' => 'total',
        'position' => 'position',
        'subscription_cycle' => 'subscription_cycle',
        'explanation' => 'explanation',
        'track_hours' => 'track_hours',
        'track_cost' => 'track_cost',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'revenue_group_id' => 'setRevenueGroupId',
        'sales_id' => 'setSalesId',
        'default_service_id' => 'setDefaultServiceId',
        'name' => 'setName',
        'invoice_method' => 'setInvoiceMethod',
        'amount' => 'setAmount',
        'price' => 'setPrice',
        'show_itemtype' => 'setShowItemtype',
        'total' => 'setTotal',
        'position' => 'setPosition',
        'subscription_cycle' => 'setSubscriptionCycle',
        'explanation' => 'setExplanation',
        'track_hours' => 'setTrackHours',
        'track_cost' => 'setTrackCost',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'revenue_group_id' => 'getRevenueGroupId',
        'sales_id' => 'getSalesId',
        'default_service_id' => 'getDefaultServiceId',
        'name' => 'getName',
        'invoice_method' => 'getInvoiceMethod',
        'amount' => 'getAmount',
        'price' => 'getPrice',
        'show_itemtype' => 'getShowItemtype',
        'total' => 'getTotal',
        'position' => 'getPosition',
        'subscription_cycle' => 'getSubscriptionCycle',
        'explanation' => 'getExplanation',
        'track_hours' => 'getTrackHours',
        'track_cost' => 'getTrackCost',
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

    public const INVOICE_METHOD_FIXED_FEE = 'FixedFee';
    public const SUBSCRIPTION_CYCLE_MONTH = 'Month';
    public const SUBSCRIPTION_CYCLE_QUARTER = 'Quarter';
    public const SUBSCRIPTION_CYCLE_HALF_A_YEAR = 'Half_a_year';
    public const SUBSCRIPTION_CYCLE_YEAR = 'Year';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInvoiceMethodAllowableValues()
    {
        return [
            self::INVOICE_METHOD_FIXED_FEE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubscriptionCycleAllowableValues()
    {
        return [
            self::SUBSCRIPTION_CYCLE_MONTH,
            self::SUBSCRIPTION_CYCLE_QUARTER,
            self::SUBSCRIPTION_CYCLE_HALF_A_YEAR,
            self::SUBSCRIPTION_CYCLE_YEAR,
        ];
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
        $this->container['revenue_group_id'] = isset($data['revenue_group_id']) ? $data['revenue_group_id'] : null;
        $this->container['sales_id'] = isset($data['sales_id']) ? $data['sales_id'] : null;
        $this->container['default_service_id'] = isset($data['default_service_id']) ? $data['default_service_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['invoice_method'] = isset($data['invoice_method']) ? $data['invoice_method'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['show_itemtype'] = isset($data['show_itemtype']) ? $data['show_itemtype'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['subscription_cycle'] = isset($data['subscription_cycle']) ? $data['subscription_cycle'] : null;
        $this->container['explanation'] = isset($data['explanation']) ? $data['explanation'] : null;
        $this->container['track_hours'] = isset($data['track_hours']) ? $data['track_hours'] : null;
        $this->container['track_cost'] = isset($data['track_cost']) ? $data['track_cost'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getInvoiceMethodAllowableValues();
        if (!is_null($this->container['invoice_method']) && !in_array($this->container['invoice_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'invoice_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSubscriptionCycleAllowableValues();
        if (!is_null($this->container['subscription_cycle']) && !in_array($this->container['subscription_cycle'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'subscription_cycle', must be one of '%s'",
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
     * Gets revenue_group_id
     *
     * @return string
     */
    public function getRevenueGroupId()
    {
        return $this->container['revenue_group_id'];
    }

    /**
     * Sets revenue_group_id
     *
     * @param string $revenue_group_id See /sales/revenuegroup
     *
     * @return $this
     */
    public function setRevenueGroupId($revenue_group_id)
    {
        $this->container['revenue_group_id'] = $revenue_group_id;

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
     * Gets invoice_method
     *
     * @return string
     */
    public function getInvoiceMethod()
    {
        return $this->container['invoice_method'];
    }

    /**
     * Sets invoice_method
     *
     * @param string $invoice_method invoice_method
     *
     * @return $this
     */
    public function setInvoiceMethod($invoice_method)
    {
        $allowedValues = $this->getInvoiceMethodAllowableValues();
        if (!is_null($invoice_method) && !in_array($invoice_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'invoice_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['invoice_method'] = $invoice_method;

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
     * Gets show_itemtype
     *
     * @return int
     */
    public function getShowItemtype()
    {
        return $this->container['show_itemtype'];
    }

    /**
     * Sets show_itemtype
     *
     * @param int $show_itemtype show_itemtype
     *
     * @return $this
     */
    public function setShowItemtype($show_itemtype)
    {
        $this->container['show_itemtype'] = $show_itemtype;

        return $this;
    }

    /**
     * Gets total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param string $total total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int $position position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets subscription_cycle
     *
     * @return string
     */
    public function getSubscriptionCycle()
    {
        return $this->container['subscription_cycle'];
    }

    /**
     * Sets subscription_cycle
     *
     * @param string $subscription_cycle subscription_cycle
     *
     * @return $this
     */
    public function setSubscriptionCycle($subscription_cycle)
    {
        $allowedValues = $this->getSubscriptionCycleAllowableValues();
        if (!is_null($subscription_cycle) && !in_array($subscription_cycle, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'subscription_cycle', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['subscription_cycle'] = $subscription_cycle;

        return $this;
    }

    /**
     * Gets explanation
     *
     * @return string
     */
    public function getExplanation()
    {
        return $this->container['explanation'];
    }

    /**
     * Sets explanation
     *
     * @param string $explanation explanation
     *
     * @return $this
     */
    public function setExplanation($explanation)
    {
        $this->container['explanation'] = $explanation;

        return $this;
    }

    /**
     * Gets track_hours
     *
     * @return bool
     */
    public function getTrackHours()
    {
        return $this->container['track_hours'];
    }

    /**
     * Sets track_hours
     *
     * @param bool $track_hours track_hours
     *
     * @return $this
     */
    public function setTrackHours($track_hours)
    {
        $this->container['track_hours'] = $track_hours;

        return $this;
    }

    /**
     * Gets track_cost
     *
     * @return bool
     */
    public function getTrackCost()
    {
        return $this->container['track_cost'];
    }

    /**
     * Sets track_cost
     *
     * @param bool $track_cost track_cost
     *
     * @return $this
     */
    public function setTrackCost($track_cost)
    {
        $this->container['track_cost'] = $track_cost;

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
