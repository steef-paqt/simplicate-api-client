<?php

/**
 * ProjectServiceCostType
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
 * ProjectServiceCostType Class Doc Comment
 *
 * @category Class
 * @package  Paqtcom\Simplicate
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectServiceCostType implements ModelInterface, ArrayAccess, \Stringable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $swaggerModelName = 'ProjectServiceCostType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'budgeted_amount' => 'float',
        'tariff' => 'float',
        'purchase_margin' => 'float',
        'purchase_tariff' => 'float',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'budgeted_amount' => 'float',
        'tariff' => 'float',
        'purchase_margin' => 'float',
        'purchase_tariff' => 'float',
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
        'budgeted_amount' => 'budgeted_amount',
        'tariff' => 'tariff',
        'purchase_margin' => 'purchase_margin',
        'purchase_tariff' => 'purchase_tariff',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'budgeted_amount' => 'setBudgetedAmount',
        'tariff' => 'setTariff',
        'purchase_margin' => 'setPurchaseMargin',
        'purchase_tariff' => 'setPurchaseTariff',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'budgeted_amount' => 'getBudgetedAmount',
        'tariff' => 'getTariff',
        'purchase_margin' => 'getPurchaseMargin',
        'purchase_tariff' => 'getPurchaseTariff',
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
        $this->container['budgeted_amount'] = $data['budgeted_amount'] ?? null;
        $this->container['tariff'] = $data['tariff'] ?? null;
        $this->container['purchase_margin'] = $data['purchase_margin'] ?? null;
        $this->container['purchase_tariff'] = $data['purchase_tariff'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        return [];
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
     * Gets budgeted_amount
     *
     * @return float
     */
    public function getBudgetedAmount()
    {
        return $this->container['budgeted_amount'];
    }

    /**
     * Sets budgeted_amount
     *
     * @param float $budgeted_amount budgeted_amount
     *
     * @return $this
     */
    public function setBudgetedAmount($budgeted_amount)
    {
        $this->container['budgeted_amount'] = $budgeted_amount;

        return $this;
    }

    /**
     * Gets tariff
     *
     * @return float
     */
    public function getTariff()
    {
        return $this->container['tariff'];
    }

    /**
     * Sets tariff
     *
     * @param float $tariff tariff
     *
     * @return $this
     */
    public function setTariff($tariff)
    {
        $this->container['tariff'] = $tariff;

        return $this;
    }

    /**
     * Gets purchase_margin
     *
     * @return float
     */
    public function getPurchaseMargin()
    {
        return $this->container['purchase_margin'];
    }

    /**
     * Sets purchase_margin
     *
     * @param float $purchase_margin purchase_margin
     *
     * @return $this
     */
    public function setPurchaseMargin($purchase_margin)
    {
        $this->container['purchase_margin'] = $purchase_margin;

        return $this;
    }

    /**
     * Gets purchase_tariff
     *
     * @return float
     */
    public function getPurchaseTariff()
    {
        return $this->container['purchase_tariff'];
    }

    /**
     * Sets purchase_tariff
     *
     * @param float $purchase_tariff purchase_tariff
     *
     * @return $this
     */
    public function setPurchaseTariff($purchase_tariff)
    {
        $this->container['purchase_tariff'] = $purchase_tariff;

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
        return $this->container[$offset] ?? null;
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
     */
    public function __toString(): string
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return (string) json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return (string) json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
