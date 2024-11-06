<?php
/**
 * PostSales
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
 * PostSales Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PostSales implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PostSales';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'responsible_employee_id' => 'string',
        'progress_id' => 'string',
        'source_id' => 'string',
        'status_id' => 'string',
        'teams' => '\Swagger\Client\Model\PostTeam[]',
        'separate_invoice_recipient' => '\Swagger\Client\Model\PostSeparateInvoiceRecipient',
        'custom_fields' => '\Swagger\Client\Model\PostCustomFieldValue[]',
        'my_organization_profile_id' => 'string',
        'organization_id' => 'string',
        'person_id' => 'string',
        'contact_id' => 'string',
        'reason' => '\Swagger\Client\Model\SalesReason',
        'contact' => '\Swagger\Client\Model\ContactPerson',
        'subject' => 'string',
        'start_date' => 'string',
        'expected_closing_date' => 'string',
        'expected_revenue' => 'float',
        'note' => 'string',
        'chance_to_score' => 'int',
        'lost_to_competitor' => '\Swagger\Client\Model\LostToCompetitor'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'responsible_employee_id' => null,
        'progress_id' => null,
        'source_id' => null,
        'status_id' => null,
        'teams' => null,
        'separate_invoice_recipient' => null,
        'custom_fields' => null,
        'my_organization_profile_id' => null,
        'organization_id' => null,
        'person_id' => null,
        'contact_id' => null,
        'reason' => null,
        'contact' => null,
        'subject' => null,
        'start_date' => null,
        'expected_closing_date' => null,
        'expected_revenue' => 'float',
        'note' => null,
        'chance_to_score' => null,
        'lost_to_competitor' => null
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
        'responsible_employee_id' => 'responsible_employee_id',
        'progress_id' => 'progress_id',
        'source_id' => 'source_id',
        'status_id' => 'status_id',
        'teams' => 'teams',
        'separate_invoice_recipient' => 'separate_invoice_recipient',
        'custom_fields' => 'custom_fields',
        'my_organization_profile_id' => 'my_organization_profile_id',
        'organization_id' => 'organization_id',
        'person_id' => 'person_id',
        'contact_id' => 'contact_id',
        'reason' => 'reason',
        'contact' => 'contact',
        'subject' => 'subject',
        'start_date' => 'start_date',
        'expected_closing_date' => 'expected_closing_date',
        'expected_revenue' => 'expected_revenue',
        'note' => 'note',
        'chance_to_score' => 'chance_to_score',
        'lost_to_competitor' => 'lost_to_competitor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'responsible_employee_id' => 'setResponsibleEmployeeId',
        'progress_id' => 'setProgressId',
        'source_id' => 'setSourceId',
        'status_id' => 'setStatusId',
        'teams' => 'setTeams',
        'separate_invoice_recipient' => 'setSeparateInvoiceRecipient',
        'custom_fields' => 'setCustomFields',
        'my_organization_profile_id' => 'setMyOrganizationProfileId',
        'organization_id' => 'setOrganizationId',
        'person_id' => 'setPersonId',
        'contact_id' => 'setContactId',
        'reason' => 'setReason',
        'contact' => 'setContact',
        'subject' => 'setSubject',
        'start_date' => 'setStartDate',
        'expected_closing_date' => 'setExpectedClosingDate',
        'expected_revenue' => 'setExpectedRevenue',
        'note' => 'setNote',
        'chance_to_score' => 'setChanceToScore',
        'lost_to_competitor' => 'setLostToCompetitor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'responsible_employee_id' => 'getResponsibleEmployeeId',
        'progress_id' => 'getProgressId',
        'source_id' => 'getSourceId',
        'status_id' => 'getStatusId',
        'teams' => 'getTeams',
        'separate_invoice_recipient' => 'getSeparateInvoiceRecipient',
        'custom_fields' => 'getCustomFields',
        'my_organization_profile_id' => 'getMyOrganizationProfileId',
        'organization_id' => 'getOrganizationId',
        'person_id' => 'getPersonId',
        'contact_id' => 'getContactId',
        'reason' => 'getReason',
        'contact' => 'getContact',
        'subject' => 'getSubject',
        'start_date' => 'getStartDate',
        'expected_closing_date' => 'getExpectedClosingDate',
        'expected_revenue' => 'getExpectedRevenue',
        'note' => 'getNote',
        'chance_to_score' => 'getChanceToScore',
        'lost_to_competitor' => 'getLostToCompetitor'
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
        $this->container['responsible_employee_id'] = isset($data['responsible_employee_id']) ? $data['responsible_employee_id'] : null;
        $this->container['progress_id'] = isset($data['progress_id']) ? $data['progress_id'] : null;
        $this->container['source_id'] = isset($data['source_id']) ? $data['source_id'] : null;
        $this->container['status_id'] = isset($data['status_id']) ? $data['status_id'] : null;
        $this->container['teams'] = isset($data['teams']) ? $data['teams'] : null;
        $this->container['separate_invoice_recipient'] = isset($data['separate_invoice_recipient']) ? $data['separate_invoice_recipient'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['my_organization_profile_id'] = isset($data['my_organization_profile_id']) ? $data['my_organization_profile_id'] : null;
        $this->container['organization_id'] = isset($data['organization_id']) ? $data['organization_id'] : null;
        $this->container['person_id'] = isset($data['person_id']) ? $data['person_id'] : null;
        $this->container['contact_id'] = isset($data['contact_id']) ? $data['contact_id'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['expected_closing_date'] = isset($data['expected_closing_date']) ? $data['expected_closing_date'] : null;
        $this->container['expected_revenue'] = isset($data['expected_revenue']) ? $data['expected_revenue'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['chance_to_score'] = isset($data['chance_to_score']) ? $data['chance_to_score'] : null;
        $this->container['lost_to_competitor'] = isset($data['lost_to_competitor']) ? $data['lost_to_competitor'] : null;
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
     * Gets responsible_employee_id
     *
     * @return string
     */
    public function getResponsibleEmployeeId()
    {
        return $this->container['responsible_employee_id'];
    }

    /**
     * Sets responsible_employee_id
     *
     * @param string $responsible_employee_id responsible_employee_id
     *
     * @return $this
     */
    public function setResponsibleEmployeeId($responsible_employee_id)
    {
        $this->container['responsible_employee_id'] = $responsible_employee_id;

        return $this;
    }

    /**
     * Gets progress_id
     *
     * @return string
     */
    public function getProgressId()
    {
        return $this->container['progress_id'];
    }

    /**
     * Sets progress_id
     *
     * @param string $progress_id progress_id
     *
     * @return $this
     */
    public function setProgressId($progress_id)
    {
        $this->container['progress_id'] = $progress_id;

        return $this;
    }

    /**
     * Gets source_id
     *
     * @return string
     */
    public function getSourceId()
    {
        return $this->container['source_id'];
    }

    /**
     * Sets source_id
     *
     * @param string $source_id source_id
     *
     * @return $this
     */
    public function setSourceId($source_id)
    {
        $this->container['source_id'] = $source_id;

        return $this;
    }

    /**
     * Gets status_id
     *
     * @return string
     */
    public function getStatusId()
    {
        return $this->container['status_id'];
    }

    /**
     * Sets status_id
     *
     * @param string $status_id status_id
     *
     * @return $this
     */
    public function setStatusId($status_id)
    {
        $this->container['status_id'] = $status_id;

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
     * Gets reason
     *
     * @return \Swagger\Client\Model\SalesReason
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param \Swagger\Client\Model\SalesReason $reason reason
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return \Swagger\Client\Model\ContactPerson
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \Swagger\Client\Model\ContactPerson $contact contact
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

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
     * Gets expected_closing_date
     *
     * @return string
     */
    public function getExpectedClosingDate()
    {
        return $this->container['expected_closing_date'];
    }

    /**
     * Sets expected_closing_date
     *
     * @param string $expected_closing_date expected_closing_date
     *
     * @return $this
     */
    public function setExpectedClosingDate($expected_closing_date)
    {
        $this->container['expected_closing_date'] = $expected_closing_date;

        return $this;
    }

    /**
     * Gets expected_revenue
     *
     * @return float
     */
    public function getExpectedRevenue()
    {
        return $this->container['expected_revenue'];
    }

    /**
     * Sets expected_revenue
     *
     * @param float $expected_revenue expected_revenue
     *
     * @return $this
     */
    public function setExpectedRevenue($expected_revenue)
    {
        $this->container['expected_revenue'] = $expected_revenue;

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
     * Gets chance_to_score
     *
     * @return int
     */
    public function getChanceToScore()
    {
        return $this->container['chance_to_score'];
    }

    /**
     * Sets chance_to_score
     *
     * @param int $chance_to_score chance_to_score
     *
     * @return $this
     */
    public function setChanceToScore($chance_to_score)
    {
        $this->container['chance_to_score'] = $chance_to_score;

        return $this;
    }

    /**
     * Gets lost_to_competitor
     *
     * @return \Swagger\Client\Model\LostToCompetitor
     */
    public function getLostToCompetitor()
    {
        return $this->container['lost_to_competitor'];
    }

    /**
     * Sets lost_to_competitor
     *
     * @param \Swagger\Client\Model\LostToCompetitor $lost_to_competitor lost_to_competitor
     *
     * @return $this
     */
    public function setLostToCompetitor($lost_to_competitor)
    {
        $this->container['lost_to_competitor'] = $lost_to_competitor;

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


