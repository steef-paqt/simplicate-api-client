<?php

/**
 * GetDefaultService
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
 * GetDefaultService Class Doc Comment
 *
 * @category Class
 * @package  Paqtcom\Simplicate
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetDefaultService implements ModelInterface, ArrayAccess, \Stringable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $swaggerModelName = 'GetDefaultService';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'id' => 'string',
        'vat_class' => \Paqtcom\Simplicate\Model\VatClass::class,
        'revenue_group' => \Paqtcom\Simplicate\Model\RevenueGroup::class,
        'created_at' => 'string',
        'updated_at' => 'string',
        'modified' => 'string',
        'my_organization_profile_id' => 'string',
        'name' => 'string',
        'price_editable' => 'bool',
        'price' => 'float',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'id' => null,
        'vat_class' => null,
        'revenue_group' => null,
        'created_at' => null,
        'updated_at' => null,
        'modified' => null,
        'my_organization_profile_id' => null,
        'name' => null,
        'price_editable' => null,
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
        'vat_class' => 'vat_class',
        'revenue_group' => 'revenue_group',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'modified' => 'modified',
        'my_organization_profile_id' => 'my_organization_profile_id',
        'name' => 'name',
        'price_editable' => 'price_editable',
        'price' => 'price',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'id' => 'setId',
        'vat_class' => 'setVatClass',
        'revenue_group' => 'setRevenueGroup',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'modified' => 'setModified',
        'my_organization_profile_id' => 'setMyOrganizationProfileId',
        'name' => 'setName',
        'price_editable' => 'setPriceEditable',
        'price' => 'setPrice',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'id' => 'getId',
        'vat_class' => 'getVatClass',
        'revenue_group' => 'getRevenueGroup',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'modified' => 'getModified',
        'my_organization_profile_id' => 'getMyOrganizationProfileId',
        'name' => 'getName',
        'price_editable' => 'getPriceEditable',
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['vat_class'] = $data['vat_class'] ?? null;
        $this->container['revenue_group'] = $data['revenue_group'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['modified'] = $data['modified'] ?? null;
        $this->container['my_organization_profile_id'] = $data['my_organization_profile_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['price_editable'] = $data['price_editable'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
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
     * Gets modified
     *
     * @return string
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     *
     * @param string $modified modified
     *
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets my_organization_profile_id
     *
     * @return string
     */
    public function getMyOrganizationProfileId()
    {
        return $this->container['my_organization_profile_id'];
    }

    /**
     * Sets my_organization_profile_id
     *
     * @param string $my_organization_profile_id my_organization_profile_id
     *
     * @return $this
     */
    public function setMyOrganizationProfileId($my_organization_profile_id)
    {
        $this->container['my_organization_profile_id'] = $my_organization_profile_id;

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
     * Gets price_editable
     *
     * @return bool
     */
    public function getPriceEditable()
    {
        return $this->container['price_editable'];
    }

    /**
     * Sets price_editable
     *
     * @param bool $price_editable price_editable
     *
     * @return $this
     */
    public function setPriceEditable($price_editable)
    {
        $this->container['price_editable'] = $price_editable;

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
