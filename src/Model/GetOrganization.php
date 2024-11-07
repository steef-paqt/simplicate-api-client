<?php

/**
 * GetOrganization
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
 * GetOrganization Class Doc Comment
 *
 * @category Class
 * @package  Paqtcom\Simplicate
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetOrganization implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetOrganization';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'visiting_address' => '\Paqtcom\Simplicate\Model\GetAddress',
        'postal_address' => '\Paqtcom\Simplicate\Model\GetAddress',
        'relation_type' => '\Paqtcom\Simplicate\Model\RelationType',
        'relation_manager' => '\Paqtcom\Simplicate\Model\Employee',
        'customer_group' => '\Paqtcom\Simplicate\Model\CustomerGroup',
        'teams' => '\Paqtcom\Simplicate\Model\GetTeamSimple[]',
        'debtor' => '\Paqtcom\Simplicate\Model\GetDebtor',
        'organizationsize' => '\Paqtcom\Simplicate\Model\OrganizationSize',
        'linked_persons_contacts' => '\Paqtcom\Simplicate\Model\ContactPerson[]',
        'interests' => '\Paqtcom\Simplicate\Model\Interest[]',
        'accountancy' => '\Paqtcom\Simplicate\Model\Accountancy',
        'custom_fields' => '\Paqtcom\Simplicate\Model\GetCustomField[]',
        'created_at' => 'string',
        'updated_at' => 'string',
        'simplicate_url' => 'string',
        'sbi_codes' => '\Paqtcom\Simplicate\Model\SbiCode[]',
        'is_active' => 'bool',
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
    protected static $swaggerFormats = [
        'id' => null,
        'visiting_address' => null,
        'postal_address' => null,
        'relation_type' => null,
        'relation_manager' => null,
        'customer_group' => null,
        'teams' => null,
        'debtor' => null,
        'organizationsize' => null,
        'linked_persons_contacts' => null,
        'interests' => null,
        'accountancy' => null,
        'custom_fields' => null,
        'created_at' => null,
        'updated_at' => null,
        'simplicate_url' => null,
        'sbi_codes' => null,
        'is_active' => null,
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
    protected static $attributeMap = [
        'id' => 'id',
        'visiting_address' => 'visiting_address',
        'postal_address' => 'postal_address',
        'relation_type' => 'relation_type',
        'relation_manager' => 'relation_manager',
        'customer_group' => 'customer_group',
        'teams' => 'teams',
        'debtor' => 'debtor',
        'organizationsize' => 'organizationsize',
        'linked_persons_contacts' => 'linked_persons_contacts',
        'interests' => 'interests',
        'accountancy' => 'accountancy',
        'custom_fields' => 'custom_fields',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'simplicate_url' => 'simplicate_url',
        'sbi_codes' => 'sbi_codes',
        'is_active' => 'is_active',
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
    protected static $setters = [
        'id' => 'setId',
        'visiting_address' => 'setVisitingAddress',
        'postal_address' => 'setPostalAddress',
        'relation_type' => 'setRelationType',
        'relation_manager' => 'setRelationManager',
        'customer_group' => 'setCustomerGroup',
        'teams' => 'setTeams',
        'debtor' => 'setDebtor',
        'organizationsize' => 'setOrganizationsize',
        'linked_persons_contacts' => 'setLinkedPersonsContacts',
        'interests' => 'setInterests',
        'accountancy' => 'setAccountancy',
        'custom_fields' => 'setCustomFields',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'simplicate_url' => 'setSimplicateUrl',
        'sbi_codes' => 'setSbiCodes',
        'is_active' => 'setIsActive',
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
    protected static $getters = [
        'id' => 'getId',
        'visiting_address' => 'getVisitingAddress',
        'postal_address' => 'getPostalAddress',
        'relation_type' => 'getRelationType',
        'relation_manager' => 'getRelationManager',
        'customer_group' => 'getCustomerGroup',
        'teams' => 'getTeams',
        'debtor' => 'getDebtor',
        'organizationsize' => 'getOrganizationsize',
        'linked_persons_contacts' => 'getLinkedPersonsContacts',
        'interests' => 'getInterests',
        'accountancy' => 'getAccountancy',
        'custom_fields' => 'getCustomFields',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'simplicate_url' => 'getSimplicateUrl',
        'sbi_codes' => 'getSbiCodes',
        'is_active' => 'getIsActive',
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
        $this->container['visiting_address'] = isset($data['visiting_address']) ? $data['visiting_address'] : null;
        $this->container['postal_address'] = isset($data['postal_address']) ? $data['postal_address'] : null;
        $this->container['relation_type'] = isset($data['relation_type']) ? $data['relation_type'] : null;
        $this->container['relation_manager'] = isset($data['relation_manager']) ? $data['relation_manager'] : null;
        $this->container['customer_group'] = isset($data['customer_group']) ? $data['customer_group'] : null;
        $this->container['teams'] = isset($data['teams']) ? $data['teams'] : null;
        $this->container['debtor'] = isset($data['debtor']) ? $data['debtor'] : null;
        $this->container['organizationsize'] = isset($data['organizationsize']) ? $data['organizationsize'] : null;
        $this->container['linked_persons_contacts'] = isset($data['linked_persons_contacts']) ? $data['linked_persons_contacts'] : null;
        $this->container['interests'] = isset($data['interests']) ? $data['interests'] : null;
        $this->container['accountancy'] = isset($data['accountancy']) ? $data['accountancy'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['simplicate_url'] = isset($data['simplicate_url']) ? $data['simplicate_url'] : null;
        $this->container['sbi_codes'] = isset($data['sbi_codes']) ? $data['sbi_codes'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
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
     * Gets visiting_address
     *
     * @return \Paqtcom\Simplicate\Model\GetAddress
     */
    public function getVisitingAddress()
    {
        return $this->container['visiting_address'];
    }

    /**
     * Sets visiting_address
     *
     * @param \Paqtcom\Simplicate\Model\GetAddress $visiting_address visiting_address
     *
     * @return $this
     */
    public function setVisitingAddress($visiting_address)
    {
        $this->container['visiting_address'] = $visiting_address;

        return $this;
    }

    /**
     * Gets postal_address
     *
     * @return \Paqtcom\Simplicate\Model\GetAddress
     */
    public function getPostalAddress()
    {
        return $this->container['postal_address'];
    }

    /**
     * Sets postal_address
     *
     * @param \Paqtcom\Simplicate\Model\GetAddress $postal_address postal_address
     *
     * @return $this
     */
    public function setPostalAddress($postal_address)
    {
        $this->container['postal_address'] = $postal_address;

        return $this;
    }

    /**
     * Gets relation_type
     *
     * @return \Paqtcom\Simplicate\Model\RelationType
     */
    public function getRelationType()
    {
        return $this->container['relation_type'];
    }

    /**
     * Sets relation_type
     *
     * @param \Paqtcom\Simplicate\Model\RelationType $relation_type relation_type
     *
     * @return $this
     */
    public function setRelationType($relation_type)
    {
        $this->container['relation_type'] = $relation_type;

        return $this;
    }

    /**
     * Gets relation_manager
     *
     * @return \Paqtcom\Simplicate\Model\Employee
     */
    public function getRelationManager()
    {
        return $this->container['relation_manager'];
    }

    /**
     * Sets relation_manager
     *
     * @param \Paqtcom\Simplicate\Model\Employee $relation_manager relation_manager
     *
     * @return $this
     */
    public function setRelationManager($relation_manager)
    {
        $this->container['relation_manager'] = $relation_manager;

        return $this;
    }

    /**
     * Gets customer_group
     *
     * @return \Paqtcom\Simplicate\Model\CustomerGroup
     */
    public function getCustomerGroup()
    {
        return $this->container['customer_group'];
    }

    /**
     * Sets customer_group
     *
     * @param \Paqtcom\Simplicate\Model\CustomerGroup $customer_group customer_group
     *
     * @return $this
     */
    public function setCustomerGroup($customer_group)
    {
        $this->container['customer_group'] = $customer_group;

        return $this;
    }

    /**
     * Gets teams
     *
     * @return \Paqtcom\Simplicate\Model\GetTeamSimple[]
     */
    public function getTeams()
    {
        return $this->container['teams'];
    }

    /**
     * Sets teams
     *
     * @param \Paqtcom\Simplicate\Model\GetTeamSimple[] $teams teams
     *
     * @return $this
     */
    public function setTeams($teams)
    {
        $this->container['teams'] = $teams;

        return $this;
    }

    /**
     * Gets debtor
     *
     * @return \Paqtcom\Simplicate\Model\GetDebtor
     */
    public function getDebtor()
    {
        return $this->container['debtor'];
    }

    /**
     * Sets debtor
     *
     * @param \Paqtcom\Simplicate\Model\GetDebtor $debtor debtor
     *
     * @return $this
     */
    public function setDebtor($debtor)
    {
        $this->container['debtor'] = $debtor;

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
     * Gets linked_persons_contacts
     *
     * @return \Paqtcom\Simplicate\Model\ContactPerson[]
     */
    public function getLinkedPersonsContacts()
    {
        return $this->container['linked_persons_contacts'];
    }

    /**
     * Sets linked_persons_contacts
     *
     * @param \Paqtcom\Simplicate\Model\ContactPerson[] $linked_persons_contacts linked_persons_contacts
     *
     * @return $this
     */
    public function setLinkedPersonsContacts($linked_persons_contacts)
    {
        $this->container['linked_persons_contacts'] = $linked_persons_contacts;

        return $this;
    }

    /**
     * Gets interests
     *
     * @return \Paqtcom\Simplicate\Model\Interest[]
     */
    public function getInterests()
    {
        return $this->container['interests'];
    }

    /**
     * Sets interests
     *
     * @param \Paqtcom\Simplicate\Model\Interest[] $interests interests
     *
     * @return $this
     */
    public function setInterests($interests)
    {
        $this->container['interests'] = $interests;

        return $this;
    }

    /**
     * Gets accountancy
     *
     * @return \Paqtcom\Simplicate\Model\Accountancy
     */
    public function getAccountancy()
    {
        return $this->container['accountancy'];
    }

    /**
     * Sets accountancy
     *
     * @param \Paqtcom\Simplicate\Model\Accountancy $accountancy accountancy
     *
     * @return $this
     */
    public function setAccountancy($accountancy)
    {
        $this->container['accountancy'] = $accountancy;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return \Paqtcom\Simplicate\Model\GetCustomField[]
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param \Paqtcom\Simplicate\Model\GetCustomField[] $custom_fields custom_fields
     *
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

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
     * Gets sbi_codes
     *
     * @return \Paqtcom\Simplicate\Model\SbiCode[]
     */
    public function getSbiCodes()
    {
        return $this->container['sbi_codes'];
    }

    /**
     * Sets sbi_codes
     *
     * @param \Paqtcom\Simplicate\Model\SbiCode[] $sbi_codes sbi_codes
     *
     * @return $this
     */
    public function setSbiCodes($sbi_codes)
    {
        $this->container['sbi_codes'] = $sbi_codes;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active is_active
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

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
