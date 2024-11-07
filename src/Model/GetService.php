<?php

/**
 * GetService
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

use ArrayAccess;
use Swagger\Client\ObjectSerializer;

/**
 * GetService Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetService implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetService';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'start_date' => 'string',
        'end_date' => 'string',
        'subscription_cycle' => 'string',
        'budget' => 'float',
        'default_service_id' => 'string',
        'name' => 'string',
        'explanation' => 'string',
        'invoice_method' => 'string',
        'amount' => 'float',
        'price' => 'float',
        'track_hours' => 'bool',
        'track_cost' => 'bool',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'start_date' => null,
        'end_date' => null,
        'subscription_cycle' => null,
        'budget' => 'float',
        'default_service_id' => null,
        'name' => null,
        'explanation' => null,
        'invoice_method' => null,
        'amount' => 'float',
        'price' => 'float',
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
        'id' => 'id',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'subscription_cycle' => 'subscription_cycle',
        'budget' => 'budget',
        'default_service_id' => 'default_service_id',
        'name' => 'name',
        'explanation' => 'explanation',
        'invoice_method' => 'invoice_method',
        'amount' => 'amount',
        'price' => 'price',
        'track_hours' => 'track_hours',
        'track_cost' => 'track_cost',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'subscription_cycle' => 'setSubscriptionCycle',
        'budget' => 'setBudget',
        'default_service_id' => 'setDefaultServiceId',
        'name' => 'setName',
        'explanation' => 'setExplanation',
        'invoice_method' => 'setInvoiceMethod',
        'amount' => 'setAmount',
        'price' => 'setPrice',
        'track_hours' => 'setTrackHours',
        'track_cost' => 'setTrackCost',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'subscription_cycle' => 'getSubscriptionCycle',
        'budget' => 'getBudget',
        'default_service_id' => 'getDefaultServiceId',
        'name' => 'getName',
        'explanation' => 'getExplanation',
        'invoice_method' => 'getInvoiceMethod',
        'amount' => 'getAmount',
        'price' => 'getPrice',
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

    public const SUBSCRIPTION_CYCLE_MONTH = 'Month';
    public const SUBSCRIPTION_CYCLE_QUARTER = 'Quarter';
    public const SUBSCRIPTION_CYCLE_HALF_A_YEAR = 'Half_a_year';
    public const SUBSCRIPTION_CYCLE_YEAR = 'Year';
    public const INVOICE_METHOD_HOURS = 'Hours';
    public const INVOICE_METHOD_FIXED_FEE = 'FixedFee';
    public const INVOICE_METHOD_SUBSCRIPTION = 'Subscription';

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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInvoiceMethodAllowableValues()
    {
        return [
            self::INVOICE_METHOD_HOURS,
            self::INVOICE_METHOD_FIXED_FEE,
            self::INVOICE_METHOD_SUBSCRIPTION,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['subscription_cycle'] = isset($data['subscription_cycle']) ? $data['subscription_cycle'] : null;
        $this->container['budget'] = isset($data['budget']) ? $data['budget'] : null;
        $this->container['default_service_id'] = isset($data['default_service_id']) ? $data['default_service_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['explanation'] = isset($data['explanation']) ? $data['explanation'] : null;
        $this->container['invoice_method'] = isset($data['invoice_method']) ? $data['invoice_method'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
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

        $allowedValues = $this->getSubscriptionCycleAllowableValues();
        if (!is_null($this->container['subscription_cycle']) && !in_array($this->container['subscription_cycle'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'subscription_cycle', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getInvoiceMethodAllowableValues();
        if (!is_null($this->container['invoice_method']) && !in_array($this->container['invoice_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'invoice_method', must be one of '%s'",
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
     * Gets budget
     *
     * @return float
     */
    public function getBudget()
    {
        return $this->container['budget'];
    }

    /**
     * Sets budget
     *
     * @param float $budget budget
     *
     * @return $this
     */
    public function setBudget($budget)
    {
        $this->container['budget'] = $budget;

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
