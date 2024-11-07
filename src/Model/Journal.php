<?php

/**
 * Journal
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
 * Journal Class Doc Comment
 *
 * @category Class
 * @package  Paqtcom\Simplicate
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Journal implements ModelInterface, ArrayAccess, \Stringable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $swaggerModelName = 'Journal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'journalize_date' => 'string',
        'invoice_date' => 'string',
        'invoice_number' => 'string',
        'due_date' => 'string',
        'subject' => 'string',
        'relation_id' => 'string',
        'amount_excl' => 'float',
        'amount_incl' => 'float',
        'autocollect' => 'bool',
        'revenuegroup' => \Paqtcom\Simplicate\Model\RevenueGroup::class,
        'journal_lines' => '\Paqtcom\Simplicate\Model\JournalLine[]',
        'vat' => '\Paqtcom\Simplicate\Model\JournalVat[]',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'journalize_date' => null,
        'invoice_date' => null,
        'invoice_number' => null,
        'due_date' => null,
        'subject' => null,
        'relation_id' => null,
        'amount_excl' => 'float',
        'amount_incl' => 'float',
        'autocollect' => null,
        'revenuegroup' => null,
        'journal_lines' => null,
        'vat' => null,
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
        'journalize_date' => 'journalize_date',
        'invoice_date' => 'invoice_date',
        'invoice_number' => 'invoice_number',
        'due_date' => 'due_date',
        'subject' => 'subject',
        'relation_id' => 'relation_id',
        'amount_excl' => 'amount_excl',
        'amount_incl' => 'amount_incl',
        'autocollect' => 'autocollect',
        'revenuegroup' => 'revenuegroup',
        'journal_lines' => 'journal_lines',
        'vat' => 'vat',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'journalize_date' => 'setJournalizeDate',
        'invoice_date' => 'setInvoiceDate',
        'invoice_number' => 'setInvoiceNumber',
        'due_date' => 'setDueDate',
        'subject' => 'setSubject',
        'relation_id' => 'setRelationId',
        'amount_excl' => 'setAmountExcl',
        'amount_incl' => 'setAmountIncl',
        'autocollect' => 'setAutocollect',
        'revenuegroup' => 'setRevenuegroup',
        'journal_lines' => 'setJournalLines',
        'vat' => 'setVat',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'journalize_date' => 'getJournalizeDate',
        'invoice_date' => 'getInvoiceDate',
        'invoice_number' => 'getInvoiceNumber',
        'due_date' => 'getDueDate',
        'subject' => 'getSubject',
        'relation_id' => 'getRelationId',
        'amount_excl' => 'getAmountExcl',
        'amount_incl' => 'getAmountIncl',
        'autocollect' => 'getAutocollect',
        'revenuegroup' => 'getRevenuegroup',
        'journal_lines' => 'getJournalLines',
        'vat' => 'getVat',
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
        $this->container['journalize_date'] = $data['journalize_date'] ?? null;
        $this->container['invoice_date'] = $data['invoice_date'] ?? null;
        $this->container['invoice_number'] = $data['invoice_number'] ?? null;
        $this->container['due_date'] = $data['due_date'] ?? null;
        $this->container['subject'] = $data['subject'] ?? null;
        $this->container['relation_id'] = $data['relation_id'] ?? null;
        $this->container['amount_excl'] = $data['amount_excl'] ?? null;
        $this->container['amount_incl'] = $data['amount_incl'] ?? null;
        $this->container['autocollect'] = $data['autocollect'] ?? null;
        $this->container['revenuegroup'] = $data['revenuegroup'] ?? null;
        $this->container['journal_lines'] = $data['journal_lines'] ?? null;
        $this->container['vat'] = $data['vat'] ?? null;
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
     * Gets journalize_date
     *
     * @return string
     */
    public function getJournalizeDate()
    {
        return $this->container['journalize_date'];
    }

    /**
     * Sets journalize_date
     *
     * @param string $journalize_date journalize_date
     *
     * @return $this
     */
    public function setJournalizeDate($journalize_date)
    {
        $this->container['journalize_date'] = $journalize_date;

        return $this;
    }

    /**
     * Gets invoice_date
     *
     * @return string
     */
    public function getInvoiceDate()
    {
        return $this->container['invoice_date'];
    }

    /**
     * Sets invoice_date
     *
     * @param string $invoice_date invoice_date
     *
     * @return $this
     */
    public function setInvoiceDate($invoice_date)
    {
        $this->container['invoice_date'] = $invoice_date;

        return $this;
    }

    /**
     * Gets invoice_number
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string $invoice_number invoice_number
     *
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return string
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param string $due_date due_date
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets relation_id
     *
     * @return string
     */
    public function getRelationId()
    {
        return $this->container['relation_id'];
    }

    /**
     * Sets relation_id
     *
     * @param string $relation_id relation_id
     *
     * @return $this
     */
    public function setRelationId($relation_id)
    {
        $this->container['relation_id'] = $relation_id;

        return $this;
    }

    /**
     * Gets amount_excl
     *
     * @return float
     */
    public function getAmountExcl()
    {
        return $this->container['amount_excl'];
    }

    /**
     * Sets amount_excl
     *
     * @param float $amount_excl amount_excl
     *
     * @return $this
     */
    public function setAmountExcl($amount_excl)
    {
        $this->container['amount_excl'] = $amount_excl;

        return $this;
    }

    /**
     * Gets amount_incl
     *
     * @return float
     */
    public function getAmountIncl()
    {
        return $this->container['amount_incl'];
    }

    /**
     * Sets amount_incl
     *
     * @param float $amount_incl amount_incl
     *
     * @return $this
     */
    public function setAmountIncl($amount_incl)
    {
        $this->container['amount_incl'] = $amount_incl;

        return $this;
    }

    /**
     * Gets autocollect
     *
     * @return bool
     */
    public function getAutocollect()
    {
        return $this->container['autocollect'];
    }

    /**
     * Sets autocollect
     *
     * @param bool $autocollect autocollect
     *
     * @return $this
     */
    public function setAutocollect($autocollect)
    {
        $this->container['autocollect'] = $autocollect;

        return $this;
    }

    /**
     * Gets revenuegroup
     *
     * @return \Paqtcom\Simplicate\Model\RevenueGroup
     */
    public function getRevenuegroup()
    {
        return $this->container['revenuegroup'];
    }

    /**
     * Sets revenuegroup
     *
     * @param \Paqtcom\Simplicate\Model\RevenueGroup $revenuegroup revenuegroup
     *
     * @return $this
     */
    public function setRevenuegroup($revenuegroup)
    {
        $this->container['revenuegroup'] = $revenuegroup;

        return $this;
    }

    /**
     * Gets journal_lines
     *
     * @return \Paqtcom\Simplicate\Model\JournalLine[]
     */
    public function getJournalLines()
    {
        return $this->container['journal_lines'];
    }

    /**
     * Sets journal_lines
     *
     * @param \Paqtcom\Simplicate\Model\JournalLine[] $journal_lines journal_lines
     *
     * @return $this
     */
    public function setJournalLines($journal_lines)
    {
        $this->container['journal_lines'] = $journal_lines;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return \Paqtcom\Simplicate\Model\JournalVat[]
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param \Paqtcom\Simplicate\Model\JournalVat[] $vat vat
     *
     * @return $this
     */
    public function setVat($vat)
    {
        $this->container['vat'] = $vat;

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
