<?php

/**
 * Organization
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
 * Organization Class Doc Comment
 *
 * @category Class
 * @package  Paqtcom\Simplicate
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Organization implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $swaggerModelName = 'Organization';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'name' => 'string',
        'coc_code' => 'string',
        'vat_number' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'url' => 'string',
        'note' => 'string',
        'linkedin_url' => 'string',
        'has_different_postal_address' => 'bool',
        'industry' => '\Paqtcom\Simplicate\Model\Industry',
        'organizationsize' => '\Paqtcom\Simplicate\Model\OrganizationSize',
        'invoice_receiver' => 'string',
        'allow_autocollect' => 'bool',
        'bank_account' => 'string',
        'bank_bic' => 'string',
        'relation_number' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'name' => null,
        'coc_code' => null,
        'vat_number' => null,
        'email' => null,
        'phone' => null,
        'url' => null,
        'note' => null,
        'linkedin_url' => null,
        'has_different_postal_address' => null,
        'industry' => null,
        'organizationsize' => null,
        'invoice_receiver' => null,
        'allow_autocollect' => null,
        'bank_account' => null,
        'bank_bic' => null,
        'relation_number' => null,
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
        'name' => 'name',
        'coc_code' => 'coc_code',
        'vat_number' => 'vat_number',
        'email' => 'email',
        'phone' => 'phone',
        'url' => 'url',
        'note' => 'note',
        'linkedin_url' => 'linkedin_url',
        'has_different_postal_address' => 'has_different_postal_address',
        'industry' => 'industry',
        'organizationsize' => 'organizationsize',
        'invoice_receiver' => 'invoice_receiver',
        'allow_autocollect' => 'allow_autocollect',
        'bank_account' => 'bank_account',
        'bank_bic' => 'bank_bic',
        'relation_number' => 'relation_number',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'name' => 'setName',
        'coc_code' => 'setCocCode',
        'vat_number' => 'setVatNumber',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'url' => 'setUrl',
        'note' => 'setNote',
        'linkedin_url' => 'setLinkedinUrl',
        'has_different_postal_address' => 'setHasDifferentPostalAddress',
        'industry' => 'setIndustry',
        'organizationsize' => 'setOrganizationsize',
        'invoice_receiver' => 'setInvoiceReceiver',
        'allow_autocollect' => 'setAllowAutocollect',
        'bank_account' => 'setBankAccount',
        'bank_bic' => 'setBankBic',
        'relation_number' => 'setRelationNumber',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'name' => 'getName',
        'coc_code' => 'getCocCode',
        'vat_number' => 'getVatNumber',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'url' => 'getUrl',
        'note' => 'getNote',
        'linkedin_url' => 'getLinkedinUrl',
        'has_different_postal_address' => 'getHasDifferentPostalAddress',
        'industry' => 'getIndustry',
        'organizationsize' => 'getOrganizationsize',
        'invoice_receiver' => 'getInvoiceReceiver',
        'allow_autocollect' => 'getAllowAutocollect',
        'bank_account' => 'getBankAccount',
        'bank_bic' => 'getBankBic',
        'relation_number' => 'getRelationNumber',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['coc_code'] = isset($data['coc_code']) ? $data['coc_code'] : null;
        $this->container['vat_number'] = isset($data['vat_number']) ? $data['vat_number'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['linkedin_url'] = isset($data['linkedin_url']) ? $data['linkedin_url'] : null;
        $this->container['has_different_postal_address'] = isset($data['has_different_postal_address']) ? $data['has_different_postal_address'] : null;
        $this->container['industry'] = isset($data['industry']) ? $data['industry'] : null;
        $this->container['organizationsize'] = isset($data['organizationsize']) ? $data['organizationsize'] : null;
        $this->container['invoice_receiver'] = isset($data['invoice_receiver']) ? $data['invoice_receiver'] : null;
        $this->container['allow_autocollect'] = isset($data['allow_autocollect']) ? $data['allow_autocollect'] : null;
        $this->container['bank_account'] = isset($data['bank_account']) ? $data['bank_account'] : null;
        $this->container['bank_bic'] = isset($data['bank_bic']) ? $data['bank_bic'] : null;
        $this->container['relation_number'] = isset($data['relation_number']) ? $data['relation_number'] : null;
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
     * Gets coc_code
     *
     * @return string
     */
    public function getCocCode()
    {
        return $this->container['coc_code'];
    }

    /**
     * Sets coc_code
     *
     * @param string $coc_code coc_code
     *
     * @return $this
     */
    public function setCocCode($coc_code)
    {
        $this->container['coc_code'] = $coc_code;

        return $this;
    }

    /**
     * Gets vat_number
     *
     * @return string
     */
    public function getVatNumber()
    {
        return $this->container['vat_number'];
    }

    /**
     * Sets vat_number
     *
     * @param string $vat_number vat_number
     *
     * @return $this
     */
    public function setVatNumber($vat_number)
    {
        $this->container['vat_number'] = $vat_number;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets linkedin_url
     *
     * @return string
     */
    public function getLinkedinUrl()
    {
        return $this->container['linkedin_url'];
    }

    /**
     * Sets linkedin_url
     *
     * @param string $linkedin_url linkedin_url
     *
     * @return $this
     */
    public function setLinkedinUrl($linkedin_url)
    {
        $this->container['linkedin_url'] = $linkedin_url;

        return $this;
    }

    /**
     * Gets has_different_postal_address
     *
     * @return bool
     */
    public function getHasDifferentPostalAddress()
    {
        return $this->container['has_different_postal_address'];
    }

    /**
     * Sets has_different_postal_address
     *
     * @param bool $has_different_postal_address has_different_postal_address
     *
     * @return $this
     */
    public function setHasDifferentPostalAddress($has_different_postal_address)
    {
        $this->container['has_different_postal_address'] = $has_different_postal_address;

        return $this;
    }

    /**
     * Gets industry
     *
     * @return \Paqtcom\Simplicate\Model\Industry
     */
    public function getIndustry()
    {
        return $this->container['industry'];
    }

    /**
     * Sets industry
     *
     * @param \Paqtcom\Simplicate\Model\Industry $industry industry
     *
     * @return $this
     */
    public function setIndustry($industry)
    {
        $this->container['industry'] = $industry;

        return $this;
    }

    /**
     * Gets organizationsize
     *
     * @return \Paqtcom\Simplicate\Model\OrganizationSize
     */
    public function getOrganizationsize()
    {
        return $this->container['organizationsize'];
    }

    /**
     * Sets organizationsize
     *
     * @param \Paqtcom\Simplicate\Model\OrganizationSize $organizationsize organizationsize
     *
     * @return $this
     */
    public function setOrganizationsize($organizationsize)
    {
        $this->container['organizationsize'] = $organizationsize;

        return $this;
    }

    /**
     * Gets invoice_receiver
     *
     * @return string
     */
    public function getInvoiceReceiver()
    {
        return $this->container['invoice_receiver'];
    }

    /**
     * Sets invoice_receiver
     *
     * @param string $invoice_receiver invoice_receiver
     *
     * @return $this
     */
    public function setInvoiceReceiver($invoice_receiver)
    {
        $this->container['invoice_receiver'] = $invoice_receiver;

        return $this;
    }

    /**
     * Gets allow_autocollect
     *
     * @return bool
     */
    public function getAllowAutocollect()
    {
        return $this->container['allow_autocollect'];
    }

    /**
     * Sets allow_autocollect
     *
     * @param bool $allow_autocollect allow_autocollect
     *
     * @return $this
     */
    public function setAllowAutocollect($allow_autocollect)
    {
        $this->container['allow_autocollect'] = $allow_autocollect;

        return $this;
    }

    /**
     * Gets bank_account
     *
     * @return string
     */
    public function getBankAccount()
    {
        return $this->container['bank_account'];
    }

    /**
     * Sets bank_account
     *
     * @param string $bank_account bank_account
     *
     * @return $this
     */
    public function setBankAccount($bank_account)
    {
        $this->container['bank_account'] = $bank_account;

        return $this;
    }

    /**
     * Gets bank_bic
     *
     * @return string
     */
    public function getBankBic()
    {
        return $this->container['bank_bic'];
    }

    /**
     * Sets bank_bic
     *
     * @param string $bank_bic bank_bic
     *
     * @return $this
     */
    public function setBankBic($bank_bic)
    {
        $this->container['bank_bic'] = $bank_bic;

        return $this;
    }

    /**
     * Gets relation_number
     *
     * @return string
     */
    public function getRelationNumber()
    {
        return $this->container['relation_number'];
    }

    /**
     * Sets relation_number
     *
     * @param string $relation_number relation_number
     *
     * @return $this
     */
    public function setRelationNumber($relation_number)
    {
        $this->container['relation_number'] = $relation_number;

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
