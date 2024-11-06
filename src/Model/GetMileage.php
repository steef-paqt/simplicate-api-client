<?php
/**
 * GetMileage
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

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * GetMileage Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetMileage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetMileage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'employee' => '\Swagger\Client\Model\GetEmployeeSimple',
        'project' => '\Swagger\Client\Model\GetProjectSimple',
        'type' => '\Swagger\Client\Model\GetHoursType',
        'approvalstatus' => '\Swagger\Client\Model\GetApprovalStatus',
        'invoice_status' => 'string',
        'invoice_id' => 'string',
        'invoiceline_id' => 'string',
        'tariff' => 'float',
        'vatclass' => '\Swagger\Client\Model\VatClass',
        'created_at' => 'string',
        'updated_at' => 'string',
        'mileage' => 'float',
        'related_hours_id' => 'string',
        'source' => 'string',
        'note' => 'string',
        'start_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'employee' => null,
        'project' => null,
        'type' => null,
        'approvalstatus' => null,
        'invoice_status' => null,
        'invoice_id' => null,
        'invoiceline_id' => null,
        'tariff' => 'float',
        'vatclass' => null,
        'created_at' => null,
        'updated_at' => null,
        'mileage' => 'float',
        'related_hours_id' => null,
        'source' => null,
        'note' => null,
        'start_date' => null
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
        'employee' => 'employee',
        'project' => 'project',
        'type' => 'type',
        'approvalstatus' => 'approvalstatus',
        'invoice_status' => 'invoice_status',
        'invoice_id' => 'invoice_id',
        'invoiceline_id' => 'invoiceline_id',
        'tariff' => 'tariff',
        'vatclass' => 'vatclass',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'mileage' => 'mileage',
        'related_hours_id' => 'related_hours_id',
        'source' => 'source',
        'note' => 'note',
        'start_date' => 'start_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'employee' => 'setEmployee',
        'project' => 'setProject',
        'type' => 'setType',
        'approvalstatus' => 'setApprovalstatus',
        'invoice_status' => 'setInvoiceStatus',
        'invoice_id' => 'setInvoiceId',
        'invoiceline_id' => 'setInvoicelineId',
        'tariff' => 'setTariff',
        'vatclass' => 'setVatclass',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'mileage' => 'setMileage',
        'related_hours_id' => 'setRelatedHoursId',
        'source' => 'setSource',
        'note' => 'setNote',
        'start_date' => 'setStartDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'employee' => 'getEmployee',
        'project' => 'getProject',
        'type' => 'getType',
        'approvalstatus' => 'getApprovalstatus',
        'invoice_status' => 'getInvoiceStatus',
        'invoice_id' => 'getInvoiceId',
        'invoiceline_id' => 'getInvoicelineId',
        'tariff' => 'getTariff',
        'vatclass' => 'getVatclass',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'mileage' => 'getMileage',
        'related_hours_id' => 'getRelatedHoursId',
        'source' => 'getSource',
        'note' => 'getNote',
        'start_date' => 'getStartDate'
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

    const INVOICE_STATUS_FLUSHED = 'flushed';
    const INVOICE_STATUS_INVOICED = 'invoiced';
    const INVOICE_STATUS_INDIRECTLY = 'indirectly';
    const SOURCE_SCHEDULE = 'schedule';
    const SOURCE_TIMER = 'timer';
    const SOURCE_TIMESHEET = 'timesheet';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInvoiceStatusAllowableValues()
    {
        return [
            self::INVOICE_STATUS_FLUSHED,
            self::INVOICE_STATUS_INVOICED,
            self::INVOICE_STATUS_INDIRECTLY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceAllowableValues()
    {
        return [
            self::SOURCE_SCHEDULE,
            self::SOURCE_TIMER,
            self::SOURCE_TIMESHEET,
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
        $this->container['employee'] = isset($data['employee']) ? $data['employee'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['approvalstatus'] = isset($data['approvalstatus']) ? $data['approvalstatus'] : null;
        $this->container['invoice_status'] = isset($data['invoice_status']) ? $data['invoice_status'] : null;
        $this->container['invoice_id'] = isset($data['invoice_id']) ? $data['invoice_id'] : null;
        $this->container['invoiceline_id'] = isset($data['invoiceline_id']) ? $data['invoiceline_id'] : null;
        $this->container['tariff'] = isset($data['tariff']) ? $data['tariff'] : null;
        $this->container['vatclass'] = isset($data['vatclass']) ? $data['vatclass'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['mileage'] = isset($data['mileage']) ? $data['mileage'] : null;
        $this->container['related_hours_id'] = isset($data['related_hours_id']) ? $data['related_hours_id'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getInvoiceStatusAllowableValues();
        if (!is_null($this->container['invoice_status']) && !in_array($this->container['invoice_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'invoice_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($this->container['source']) && !in_array($this->container['source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'source', must be one of '%s'",
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
     * Gets employee
     *
     * @return \Swagger\Client\Model\GetEmployeeSimple
     */
    public function getEmployee()
    {
        return $this->container['employee'];
    }

    /**
     * Sets employee
     *
     * @param \Swagger\Client\Model\GetEmployeeSimple $employee employee
     *
     * @return $this
     */
    public function setEmployee($employee)
    {
        $this->container['employee'] = $employee;

        return $this;
    }

    /**
     * Gets project
     *
     * @return \Swagger\Client\Model\GetProjectSimple
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \Swagger\Client\Model\GetProjectSimple $project project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Swagger\Client\Model\GetHoursType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Swagger\Client\Model\GetHoursType $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets approvalstatus
     *
     * @return \Swagger\Client\Model\GetApprovalStatus
     */
    public function getApprovalstatus()
    {
        return $this->container['approvalstatus'];
    }

    /**
     * Sets approvalstatus
     *
     * @param \Swagger\Client\Model\GetApprovalStatus $approvalstatus approvalstatus
     *
     * @return $this
     */
    public function setApprovalstatus($approvalstatus)
    {
        $this->container['approvalstatus'] = $approvalstatus;

        return $this;
    }

    /**
     * Gets invoice_status
     *
     * @return string
     */
    public function getInvoiceStatus()
    {
        return $this->container['invoice_status'];
    }

    /**
     * Sets invoice_status
     *
     * @param string $invoice_status invoice_status
     *
     * @return $this
     */
    public function setInvoiceStatus($invoice_status)
    {
        $allowedValues = $this->getInvoiceStatusAllowableValues();
        if (!is_null($invoice_status) && !in_array($invoice_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'invoice_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['invoice_status'] = $invoice_status;

        return $this;
    }

    /**
     * Gets invoice_id
     *
     * @return string
     */
    public function getInvoiceId()
    {
        return $this->container['invoice_id'];
    }

    /**
     * Sets invoice_id
     *
     * @param string $invoice_id See /invoices/invoice
     *
     * @return $this
     */
    public function setInvoiceId($invoice_id)
    {
        $this->container['invoice_id'] = $invoice_id;

        return $this;
    }

    /**
     * Gets invoiceline_id
     *
     * @return string
     */
    public function getInvoicelineId()
    {
        return $this->container['invoiceline_id'];
    }

    /**
     * Sets invoiceline_id
     *
     * @param string $invoiceline_id See /invoices/invoice
     *
     * @return $this
     */
    public function setInvoicelineId($invoiceline_id)
    {
        $this->container['invoiceline_id'] = $invoiceline_id;

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
     * Gets vatclass
     *
     * @return \Swagger\Client\Model\VatClass
     */
    public function getVatclass()
    {
        return $this->container['vatclass'];
    }

    /**
     * Sets vatclass
     *
     * @param \Swagger\Client\Model\VatClass $vatclass vatclass
     *
     * @return $this
     */
    public function setVatclass($vatclass)
    {
        $this->container['vatclass'] = $vatclass;

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
     * Gets mileage
     *
     * @return float
     */
    public function getMileage()
    {
        return $this->container['mileage'];
    }

    /**
     * Sets mileage
     *
     * @param float $mileage mileage
     *
     * @return $this
     */
    public function setMileage($mileage)
    {
        $this->container['mileage'] = $mileage;

        return $this;
    }

    /**
     * Gets related_hours_id
     *
     * @return string
     */
    public function getRelatedHoursId()
    {
        return $this->container['related_hours_id'];
    }

    /**
     * Sets related_hours_id
     *
     * @param string $related_hours_id related_hours_id
     *
     * @return $this
     */
    public function setRelatedHoursId($related_hours_id)
    {
        $this->container['related_hours_id'] = $related_hours_id;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($source) && !in_array($source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'source', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['source'] = $source;

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


