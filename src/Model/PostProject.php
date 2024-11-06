<?php
/**
 * PostProject
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
 * PostProject Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PostProject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PostProject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'project_manager_id' => 'string',
        'project_status_id' => 'string',
        'separate_invoice_recipient' => '\Swagger\Client\Model\PostSeparateInvoiceRecipient',
        'divergent_payment_term_id' => 'string',
        'teams' => '\Swagger\Client\Model\PostTeam[]',
        'custom_fields' => '\Swagger\Client\Model\PostCustomFieldValue[]',
        'my_organization_profile_id' => 'string',
        'person_id' => 'string',
        'organization_id' => 'string',
        'contact_id' => 'string',
        'name' => 'string',
        'billable' => 'bool',
        'can_register_mileage' => 'bool',
        'project_number' => 'string',
        'note' => 'string',
        'start_date' => 'string',
        'end_date' => 'string',
        'invoice_reference' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'project_manager_id' => null,
        'project_status_id' => null,
        'separate_invoice_recipient' => null,
        'divergent_payment_term_id' => null,
        'teams' => null,
        'custom_fields' => null,
        'my_organization_profile_id' => null,
        'person_id' => null,
        'organization_id' => null,
        'contact_id' => null,
        'name' => null,
        'billable' => null,
        'can_register_mileage' => null,
        'project_number' => null,
        'note' => null,
        'start_date' => null,
        'end_date' => null,
        'invoice_reference' => null
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
        'project_manager_id' => 'project_manager_id',
        'project_status_id' => 'project_status_id',
        'separate_invoice_recipient' => 'separate_invoice_recipient',
        'divergent_payment_term_id' => 'divergent_payment_term_id',
        'teams' => 'teams',
        'custom_fields' => 'custom_fields',
        'my_organization_profile_id' => 'my_organization_profile_id',
        'person_id' => 'person_id',
        'organization_id' => 'organization_id',
        'contact_id' => 'contact_id',
        'name' => 'name',
        'billable' => 'billable',
        'can_register_mileage' => 'can_register_mileage',
        'project_number' => 'project_number',
        'note' => 'note',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'invoice_reference' => 'invoice_reference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'project_manager_id' => 'setProjectManagerId',
        'project_status_id' => 'setProjectStatusId',
        'separate_invoice_recipient' => 'setSeparateInvoiceRecipient',
        'divergent_payment_term_id' => 'setDivergentPaymentTermId',
        'teams' => 'setTeams',
        'custom_fields' => 'setCustomFields',
        'my_organization_profile_id' => 'setMyOrganizationProfileId',
        'person_id' => 'setPersonId',
        'organization_id' => 'setOrganizationId',
        'contact_id' => 'setContactId',
        'name' => 'setName',
        'billable' => 'setBillable',
        'can_register_mileage' => 'setCanRegisterMileage',
        'project_number' => 'setProjectNumber',
        'note' => 'setNote',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'invoice_reference' => 'setInvoiceReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'project_manager_id' => 'getProjectManagerId',
        'project_status_id' => 'getProjectStatusId',
        'separate_invoice_recipient' => 'getSeparateInvoiceRecipient',
        'divergent_payment_term_id' => 'getDivergentPaymentTermId',
        'teams' => 'getTeams',
        'custom_fields' => 'getCustomFields',
        'my_organization_profile_id' => 'getMyOrganizationProfileId',
        'person_id' => 'getPersonId',
        'organization_id' => 'getOrganizationId',
        'contact_id' => 'getContactId',
        'name' => 'getName',
        'billable' => 'getBillable',
        'can_register_mileage' => 'getCanRegisterMileage',
        'project_number' => 'getProjectNumber',
        'note' => 'getNote',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'invoice_reference' => 'getInvoiceReference'
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
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['project_manager_id'] = isset($data['project_manager_id']) ? $data['project_manager_id'] : null;
        $this->container['project_status_id'] = isset($data['project_status_id']) ? $data['project_status_id'] : null;
        $this->container['separate_invoice_recipient'] = isset($data['separate_invoice_recipient']) ? $data['separate_invoice_recipient'] : null;
        $this->container['divergent_payment_term_id'] = isset($data['divergent_payment_term_id']) ? $data['divergent_payment_term_id'] : null;
        $this->container['teams'] = isset($data['teams']) ? $data['teams'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['my_organization_profile_id'] = isset($data['my_organization_profile_id']) ? $data['my_organization_profile_id'] : null;
        $this->container['person_id'] = isset($data['person_id']) ? $data['person_id'] : null;
        $this->container['organization_id'] = isset($data['organization_id']) ? $data['organization_id'] : null;
        $this->container['contact_id'] = isset($data['contact_id']) ? $data['contact_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['billable'] = isset($data['billable']) ? $data['billable'] : null;
        $this->container['can_register_mileage'] = isset($data['can_register_mileage']) ? $data['can_register_mileage'] : null;
        $this->container['project_number'] = isset($data['project_number']) ? $data['project_number'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['invoice_reference'] = isset($data['invoice_reference']) ? $data['invoice_reference'] : null;
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
     * Gets project_manager_id
     *
     * @return string
     */
    public function getProjectManagerId()
    {
        return $this->container['project_manager_id'];
    }

    /**
     * Sets project_manager_id
     *
     * @param string $project_manager_id 'id' found in 'hrm/employee'
     *
     * @return $this
     */
    public function setProjectManagerId($project_manager_id)
    {
        $this->container['project_manager_id'] = $project_manager_id;

        return $this;
    }

    /**
     * Gets project_status_id
     *
     * @return string
     */
    public function getProjectStatusId()
    {
        return $this->container['project_status_id'];
    }

    /**
     * Sets project_status_id
     *
     * @param string $project_status_id 'id' found in 'projects/projectstatus'
     *
     * @return $this
     */
    public function setProjectStatusId($project_status_id)
    {
        $this->container['project_status_id'] = $project_status_id;

        return $this;
    }

    /**
     * Gets separate_invoice_recipient
     *
     * @return \Swagger\Client\Model\PostSeparateInvoiceRecipient
     */
    public function getSeparateInvoiceRecipient()
    {
        return $this->container['separate_invoice_recipient'];
    }

    /**
     * Sets separate_invoice_recipient
     *
     * @param \Swagger\Client\Model\PostSeparateInvoiceRecipient $separate_invoice_recipient separate_invoice_recipient
     *
     * @return $this
     */
    public function setSeparateInvoiceRecipient($separate_invoice_recipient)
    {
        $this->container['separate_invoice_recipient'] = $separate_invoice_recipient;

        return $this;
    }

    /**
     * Gets divergent_payment_term_id
     *
     * @return string
     */
    public function getDivergentPaymentTermId()
    {
        return $this->container['divergent_payment_term_id'];
    }

    /**
     * Sets divergent_payment_term_id
     *
     * @param string $divergent_payment_term_id See /invoices/paymentterm. If you want to unset, please provide string value 'null'
     *
     * @return $this
     */
    public function setDivergentPaymentTermId($divergent_payment_term_id)
    {
        $this->container['divergent_payment_term_id'] = $divergent_payment_term_id;

        return $this;
    }

    /**
     * Gets teams
     *
     * @return \Swagger\Client\Model\PostTeam[]
     */
    public function getTeams()
    {
        return $this->container['teams'];
    }

    /**
     * Sets teams
     *
     * @param \Swagger\Client\Model\PostTeam[] $teams See /hrm/team
     *
     * @return $this
     */
    public function setTeams($teams)
    {
        $this->container['teams'] = $teams;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return \Swagger\Client\Model\PostCustomFieldValue[]
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param \Swagger\Client\Model\PostCustomFieldValue[] $custom_fields custom_fields
     *
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

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
     * Gets person_id
     *
     * @return string
     */
    public function getPersonId()
    {
        return $this->container['person_id'];
    }

    /**
     * Sets person_id
     *
     * @param string $person_id person_id
     *
     * @return $this
     */
    public function setPersonId($person_id)
    {
        $this->container['person_id'] = $person_id;

        return $this;
    }

    /**
     * Gets organization_id
     *
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->container['organization_id'];
    }

    /**
     * Sets organization_id
     *
     * @param string $organization_id organization_id
     *
     * @return $this
     */
    public function setOrganizationId($organization_id)
    {
        $this->container['organization_id'] = $organization_id;

        return $this;
    }

    /**
     * Gets contact_id
     *
     * @return string
     */
    public function getContactId()
    {
        return $this->container['contact_id'];
    }

    /**
     * Sets contact_id
     *
     * @param string $contact_id contact_id
     *
     * @return $this
     */
    public function setContactId($contact_id)
    {
        $this->container['contact_id'] = $contact_id;

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
     * Gets billable
     *
     * @return bool
     */
    public function getBillable()
    {
        return $this->container['billable'];
    }

    /**
     * Sets billable
     *
     * @param bool $billable billable
     *
     * @return $this
     */
    public function setBillable($billable)
    {
        $this->container['billable'] = $billable;

        return $this;
    }

    /**
     * Gets can_register_mileage
     *
     * @return bool
     */
    public function getCanRegisterMileage()
    {
        return $this->container['can_register_mileage'];
    }

    /**
     * Sets can_register_mileage
     *
     * @param bool $can_register_mileage can_register_mileage
     *
     * @return $this
     */
    public function setCanRegisterMileage($can_register_mileage)
    {
        $this->container['can_register_mileage'] = $can_register_mileage;

        return $this;
    }

    /**
     * Gets project_number
     *
     * @return string
     */
    public function getProjectNumber()
    {
        return $this->container['project_number'];
    }

    /**
     * Sets project_number
     *
     * @param string $project_number project_number
     *
     * @return $this
     */
    public function setProjectNumber($project_number)
    {
        $this->container['project_number'] = $project_number;

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
     * Gets invoice_reference
     *
     * @return string
     */
    public function getInvoiceReference()
    {
        return $this->container['invoice_reference'];
    }

    /**
     * Sets invoice_reference
     *
     * @param string $invoice_reference invoice_reference
     *
     * @return $this
     */
    public function setInvoiceReference($invoice_reference)
    {
        $this->container['invoice_reference'] = $invoice_reference;

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


