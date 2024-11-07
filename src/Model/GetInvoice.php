<?php

/**
 * GetInvoice
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
 * GetInvoice Class Doc Comment
 *
 * @category Class
 * @package  Paqtcom\Simplicate
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetInvoice implements ModelInterface, ArrayAccess, \Stringable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $swaggerModelName = 'GetInvoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'id' => 'string',
        'contact_id' => 'string',
        'payment_term' => \Paqtcom\Simplicate\Model\PaymentTerm::class,
        'invoice_lines' => '\Paqtcom\Simplicate\Model\GetInvoiceLine[]',
        'invoice_number' => 'string',
        'status' => 'string',
        'total_excluding_vat' => 'float',
        'total_vat' => 'float',
        'total_including_vat' => 'float',
        'total_outstanding' => 'float',
        'organization' => \Paqtcom\Simplicate\Model\GetOrganizationSimple::class,
        'person' => \Paqtcom\Simplicate\Model\GetPersonSimple::class,
        'my_organization_profile' => \Paqtcom\Simplicate\Model\GetMyOrganizationProfileSimple::class,
        'subscription_cycle' => \Paqtcom\Simplicate\Model\SubscriptionCycle::class,
        'project' => \Paqtcom\Simplicate\Model\GetProjectSimple::class,
        'projects' => '\Paqtcom\Simplicate\Model\GetProjectSimple[]',
        'sending_method' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'simplicate_url' => 'string',
        'reminder' => \Paqtcom\Simplicate\Model\GetInvoiceReminder::class,
        'composition_type' => 'string',
        'my_organization_profile_id' => 'string',
        'organization_id' => 'string',
        'person_id' => 'string',
        'date' => 'string',
        'subject' => 'string',
        'reference' => 'string',
        'project_id' => 'string',
        'comments' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'id' => null,
        'contact_id' => null,
        'payment_term' => null,
        'invoice_lines' => null,
        'invoice_number' => null,
        'status' => null,
        'total_excluding_vat' => 'float',
        'total_vat' => 'float',
        'total_including_vat' => 'float',
        'total_outstanding' => 'float',
        'organization' => null,
        'person' => null,
        'my_organization_profile' => null,
        'subscription_cycle' => null,
        'project' => null,
        'projects' => null,
        'sending_method' => null,
        'created_at' => null,
        'updated_at' => null,
        'simplicate_url' => null,
        'reminder' => null,
        'composition_type' => null,
        'my_organization_profile_id' => null,
        'organization_id' => null,
        'person_id' => null,
        'date' => null,
        'subject' => null,
        'reference' => null,
        'project_id' => null,
        'comments' => null,
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
        'contact_id' => 'contact_id',
        'payment_term' => 'payment_term',
        'invoice_lines' => 'invoice_lines',
        'invoice_number' => 'invoice_number',
        'status' => 'status',
        'total_excluding_vat' => 'total_excluding_vat',
        'total_vat' => 'total_vat',
        'total_including_vat' => 'total_including_vat',
        'total_outstanding' => 'total_outstanding',
        'organization' => 'organization',
        'person' => 'person',
        'my_organization_profile' => 'my_organization_profile',
        'subscription_cycle' => 'subscription_cycle',
        'project' => 'project',
        'projects' => 'projects',
        'sending_method' => 'sending_method',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'simplicate_url' => 'simplicate_url',
        'reminder' => 'reminder',
        'composition_type' => 'composition_type',
        'my_organization_profile_id' => 'my_organization_profile_id',
        'organization_id' => 'organization_id',
        'person_id' => 'person_id',
        'date' => 'date',
        'subject' => 'subject',
        'reference' => 'reference',
        'project_id' => 'project_id',
        'comments' => 'comments',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'id' => 'setId',
        'contact_id' => 'setContactId',
        'payment_term' => 'setPaymentTerm',
        'invoice_lines' => 'setInvoiceLines',
        'invoice_number' => 'setInvoiceNumber',
        'status' => 'setStatus',
        'total_excluding_vat' => 'setTotalExcludingVat',
        'total_vat' => 'setTotalVat',
        'total_including_vat' => 'setTotalIncludingVat',
        'total_outstanding' => 'setTotalOutstanding',
        'organization' => 'setOrganization',
        'person' => 'setPerson',
        'my_organization_profile' => 'setMyOrganizationProfile',
        'subscription_cycle' => 'setSubscriptionCycle',
        'project' => 'setProject',
        'projects' => 'setProjects',
        'sending_method' => 'setSendingMethod',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'simplicate_url' => 'setSimplicateUrl',
        'reminder' => 'setReminder',
        'composition_type' => 'setCompositionType',
        'my_organization_profile_id' => 'setMyOrganizationProfileId',
        'organization_id' => 'setOrganizationId',
        'person_id' => 'setPersonId',
        'date' => 'setDate',
        'subject' => 'setSubject',
        'reference' => 'setReference',
        'project_id' => 'setProjectId',
        'comments' => 'setComments',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'id' => 'getId',
        'contact_id' => 'getContactId',
        'payment_term' => 'getPaymentTerm',
        'invoice_lines' => 'getInvoiceLines',
        'invoice_number' => 'getInvoiceNumber',
        'status' => 'getStatus',
        'total_excluding_vat' => 'getTotalExcludingVat',
        'total_vat' => 'getTotalVat',
        'total_including_vat' => 'getTotalIncludingVat',
        'total_outstanding' => 'getTotalOutstanding',
        'organization' => 'getOrganization',
        'person' => 'getPerson',
        'my_organization_profile' => 'getMyOrganizationProfile',
        'subscription_cycle' => 'getSubscriptionCycle',
        'project' => 'getProject',
        'projects' => 'getProjects',
        'sending_method' => 'getSendingMethod',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'simplicate_url' => 'getSimplicateUrl',
        'reminder' => 'getReminder',
        'composition_type' => 'getCompositionType',
        'my_organization_profile_id' => 'getMyOrganizationProfileId',
        'organization_id' => 'getOrganizationId',
        'person_id' => 'getPersonId',
        'date' => 'getDate',
        'subject' => 'getSubject',
        'reference' => 'getReference',
        'project_id' => 'getProjectId',
        'comments' => 'getComments',
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

    public const STATUS_CONCEPT = 'Concept';
    public const STATUS_SENT = 'Sent';
    public const STATUS_OVERDUE = 'Overdue';
    public const STATUS_PAID = 'Paid';
    public const SENDING_METHOD_POST = 'post';
    public const SENDING_METHOD_EMAIL = 'email';
    public const COMPOSITION_TYPE_LINES = 'lines';
    public const COMPOSITION_TYPE_SERVICE = 'service';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CONCEPT,
            self::STATUS_SENT,
            self::STATUS_OVERDUE,
            self::STATUS_PAID,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSendingMethodAllowableValues()
    {
        return [
            self::SENDING_METHOD_POST,
            self::SENDING_METHOD_EMAIL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCompositionTypeAllowableValues()
    {
        return [
            self::COMPOSITION_TYPE_LINES,
            self::COMPOSITION_TYPE_SERVICE,
        ];
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
        $this->container['contact_id'] = $data['contact_id'] ?? null;
        $this->container['payment_term'] = $data['payment_term'] ?? null;
        $this->container['invoice_lines'] = $data['invoice_lines'] ?? null;
        $this->container['invoice_number'] = $data['invoice_number'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['total_excluding_vat'] = $data['total_excluding_vat'] ?? null;
        $this->container['total_vat'] = $data['total_vat'] ?? null;
        $this->container['total_including_vat'] = $data['total_including_vat'] ?? null;
        $this->container['total_outstanding'] = $data['total_outstanding'] ?? null;
        $this->container['organization'] = $data['organization'] ?? null;
        $this->container['person'] = $data['person'] ?? null;
        $this->container['my_organization_profile'] = $data['my_organization_profile'] ?? null;
        $this->container['subscription_cycle'] = $data['subscription_cycle'] ?? null;
        $this->container['project'] = $data['project'] ?? null;
        $this->container['projects'] = $data['projects'] ?? null;
        $this->container['sending_method'] = $data['sending_method'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['simplicate_url'] = $data['simplicate_url'] ?? null;
        $this->container['reminder'] = $data['reminder'] ?? null;
        $this->container['composition_type'] = $data['composition_type'] ?? null;
        $this->container['my_organization_profile_id'] = $data['my_organization_profile_id'] ?? null;
        $this->container['organization_id'] = $data['organization_id'] ?? null;
        $this->container['person_id'] = $data['person_id'] ?? null;
        $this->container['date'] = $data['date'] ?? null;
        $this->container['subject'] = $data['subject'] ?? null;
        $this->container['reference'] = $data['reference'] ?? null;
        $this->container['project_id'] = $data['project_id'] ?? null;
        $this->container['comments'] = $data['comments'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSendingMethodAllowableValues();
        if (!is_null($this->container['sending_method']) && !in_array($this->container['sending_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sending_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCompositionTypeAllowableValues();
        if (!is_null($this->container['composition_type']) && !in_array($this->container['composition_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'composition_type', must be one of '%s'",
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
     * Gets payment_term
     *
     * @return \Paqtcom\Simplicate\Model\PaymentTerm
     */
    public function getPaymentTerm()
    {
        return $this->container['payment_term'];
    }

    /**
     * Sets payment_term
     *
     * @param \Paqtcom\Simplicate\Model\PaymentTerm $payment_term payment_term
     *
     * @return $this
     */
    public function setPaymentTerm($payment_term)
    {
        $this->container['payment_term'] = $payment_term;

        return $this;
    }

    /**
     * Gets invoice_lines
     *
     * @return \Paqtcom\Simplicate\Model\GetInvoiceLine[]
     */
    public function getInvoiceLines()
    {
        return $this->container['invoice_lines'];
    }

    /**
     * Sets invoice_lines
     *
     * @param \Paqtcom\Simplicate\Model\GetInvoiceLine[] $invoice_lines invoice_lines
     *
     * @return $this
     */
    public function setInvoiceLines($invoice_lines)
    {
        $this->container['invoice_lines'] = $invoice_lines;

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
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets total_excluding_vat
     *
     * @return float
     */
    public function getTotalExcludingVat()
    {
        return $this->container['total_excluding_vat'];
    }

    /**
     * Sets total_excluding_vat
     *
     * @param float $total_excluding_vat total_excluding_vat
     *
     * @return $this
     */
    public function setTotalExcludingVat($total_excluding_vat)
    {
        $this->container['total_excluding_vat'] = $total_excluding_vat;

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
     * Gets total_including_vat
     *
     * @return float
     */
    public function getTotalIncludingVat()
    {
        return $this->container['total_including_vat'];
    }

    /**
     * Sets total_including_vat
     *
     * @param float $total_including_vat total_including_vat
     *
     * @return $this
     */
    public function setTotalIncludingVat($total_including_vat)
    {
        $this->container['total_including_vat'] = $total_including_vat;

        return $this;
    }

    /**
     * Gets total_outstanding
     *
     * @return float
     */
    public function getTotalOutstanding()
    {
        return $this->container['total_outstanding'];
    }

    /**
     * Sets total_outstanding
     *
     * @param float $total_outstanding total_outstanding
     *
     * @return $this
     */
    public function setTotalOutstanding($total_outstanding)
    {
        $this->container['total_outstanding'] = $total_outstanding;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return \Paqtcom\Simplicate\Model\GetOrganizationSimple
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param \Paqtcom\Simplicate\Model\GetOrganizationSimple $organization organization
     *
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets person
     *
     * @return \Paqtcom\Simplicate\Model\GetPersonSimple
     */
    public function getPerson()
    {
        return $this->container['person'];
    }

    /**
     * Sets person
     *
     * @param \Paqtcom\Simplicate\Model\GetPersonSimple $person person
     *
     * @return $this
     */
    public function setPerson($person)
    {
        $this->container['person'] = $person;

        return $this;
    }

    /**
     * Gets my_organization_profile
     *
     * @return \Paqtcom\Simplicate\Model\GetMyOrganizationProfileSimple
     */
    public function getMyOrganizationProfile()
    {
        return $this->container['my_organization_profile'];
    }

    /**
     * Sets my_organization_profile
     *
     * @param \Paqtcom\Simplicate\Model\GetMyOrganizationProfileSimple $my_organization_profile my_organization_profile
     *
     * @return $this
     */
    public function setMyOrganizationProfile($my_organization_profile)
    {
        $this->container['my_organization_profile'] = $my_organization_profile;

        return $this;
    }

    /**
     * Gets subscription_cycle
     *
     * @return \Paqtcom\Simplicate\Model\SubscriptionCycle
     */
    public function getSubscriptionCycle()
    {
        return $this->container['subscription_cycle'];
    }

    /**
     * Sets subscription_cycle
     *
     * @param \Paqtcom\Simplicate\Model\SubscriptionCycle $subscription_cycle subscription_cycle
     *
     * @return $this
     */
    public function setSubscriptionCycle($subscription_cycle)
    {
        $this->container['subscription_cycle'] = $subscription_cycle;

        return $this;
    }

    /**
     * Gets project
     *
     * @return \Paqtcom\Simplicate\Model\GetProjectSimple
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \Paqtcom\Simplicate\Model\GetProjectSimple $project project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets projects
     *
     * @return \Paqtcom\Simplicate\Model\GetProjectSimple[]
     */
    public function getProjects()
    {
        return $this->container['projects'];
    }

    /**
     * Sets projects
     *
     * @param \Paqtcom\Simplicate\Model\GetProjectSimple[] $projects projects
     *
     * @return $this
     */
    public function setProjects($projects)
    {
        $this->container['projects'] = $projects;

        return $this;
    }

    /**
     * Gets sending_method
     *
     * @return string
     */
    public function getSendingMethod()
    {
        return $this->container['sending_method'];
    }

    /**
     * Sets sending_method
     *
     * @param string $sending_method sending_method
     *
     * @return $this
     */
    public function setSendingMethod($sending_method)
    {
        $allowedValues = $this->getSendingMethodAllowableValues();
        if (!is_null($sending_method) && !in_array($sending_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sending_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sending_method'] = $sending_method;

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
     * Gets simplicate_url
     *
     * @return string
     */
    public function getSimplicateUrl()
    {
        return $this->container['simplicate_url'];
    }

    /**
     * Sets simplicate_url
     *
     * @param string $simplicate_url simplicate_url
     *
     * @return $this
     */
    public function setSimplicateUrl($simplicate_url)
    {
        $this->container['simplicate_url'] = $simplicate_url;

        return $this;
    }

    /**
     * Gets reminder
     *
     * @return \Paqtcom\Simplicate\Model\GetInvoiceReminder
     */
    public function getReminder()
    {
        return $this->container['reminder'];
    }

    /**
     * Sets reminder
     *
     * @param \Paqtcom\Simplicate\Model\GetInvoiceReminder $reminder reminder
     *
     * @return $this
     */
    public function setReminder($reminder)
    {
        $this->container['reminder'] = $reminder;

        return $this;
    }

    /**
     * Gets composition_type
     *
     * @return string
     */
    public function getCompositionType()
    {
        return $this->container['composition_type'];
    }

    /**
     * Sets composition_type
     *
     * @param string $composition_type composition_type
     *
     * @return $this
     */
    public function setCompositionType($composition_type)
    {
        $allowedValues = $this->getCompositionTypeAllowableValues();
        if (!is_null($composition_type) && !in_array($composition_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'composition_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['composition_type'] = $composition_type;

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
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets project_id
     *
     * @return string
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param string $project_id project_id
     *
     * @return $this
     */
    public function setProjectId($project_id)
    {
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string $comments comments
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

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
