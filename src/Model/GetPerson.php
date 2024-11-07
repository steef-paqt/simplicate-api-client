<?php

/**
 * GetPerson
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
 * GetPerson Class Doc Comment
 *
 * @category Class
 * @package  Paqtcom\Simplicate
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetPerson implements ModelInterface, ArrayAccess, \Stringable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $swaggerModelName = 'GetPerson';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'id' => 'string',
        'gender_id' => 'string',
        'use_custom_salutation' => 'bool',
        'custom_salutation' => 'string',
        'interests' => '\Paqtcom\Simplicate\Model\GetInterest[]',
        'simplicate_url' => 'string',
        'address' => '\Paqtcom\Simplicate\Model\GetAddress[]',
        'relation_manager' => \Paqtcom\Simplicate\Model\Employee::class,
        'teams' => '\Paqtcom\Simplicate\Model\GetTeamSimple[]',
        'is_employee' => 'int',
        'linked_as_contact_to_organization' => '\Paqtcom\Simplicate\Model\OrganizationContact[]',
        'custom_fields' => '\Paqtcom\Simplicate\Model\GetCustomField[]',
        'created_at' => 'string',
        'updated_at' => 'string',
        'is_active' => 'bool',
        'relation_type' => \Paqtcom\Simplicate\Model\RelationType::class,
        'gender' => 'string',
        'initials' => 'string',
        'first_name' => 'string',
        'family_name_prefix' => 'string',
        'family_name' => 'string',
        'full_name' => 'string',
        'date_of_birth' => 'string',
        'note' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'website_url' => 'string',
        'twitter_url' => 'string',
        'linkedin_url' => 'string',
        'facebook_url' => 'string',
        'relation_number' => 'string',
        'bank_account' => 'string',
        'bank_bic' => 'string',
        'invoice_receiver' => 'string',
        'mailing_list_email' => 'string',
        'mailing_lists' => '\Paqtcom\Simplicate\Model\PersonMailingList[]',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'id' => null,
        'gender_id' => null,
        'use_custom_salutation' => null,
        'custom_salutation' => null,
        'interests' => null,
        'simplicate_url' => null,
        'address' => null,
        'relation_manager' => null,
        'teams' => null,
        'is_employee' => null,
        'linked_as_contact_to_organization' => null,
        'custom_fields' => null,
        'created_at' => null,
        'updated_at' => null,
        'is_active' => null,
        'relation_type' => null,
        'gender' => null,
        'initials' => null,
        'first_name' => null,
        'family_name_prefix' => null,
        'family_name' => null,
        'full_name' => null,
        'date_of_birth' => null,
        'note' => null,
        'email' => null,
        'phone' => null,
        'website_url' => null,
        'twitter_url' => null,
        'linkedin_url' => null,
        'facebook_url' => null,
        'relation_number' => null,
        'bank_account' => null,
        'bank_bic' => null,
        'invoice_receiver' => null,
        'mailing_list_email' => null,
        'mailing_lists' => null,
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
        'gender_id' => 'gender_id',
        'use_custom_salutation' => 'use_custom_salutation',
        'custom_salutation' => 'custom_salutation',
        'interests' => 'interests',
        'simplicate_url' => 'simplicate_url',
        'address' => 'address',
        'relation_manager' => 'relation_manager',
        'teams' => 'teams',
        'is_employee' => 'is_employee',
        'linked_as_contact_to_organization' => 'linked_as_contact_to_organization',
        'custom_fields' => 'custom_fields',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'is_active' => 'is_active',
        'relation_type' => 'relation_type',
        'gender' => 'gender',
        'initials' => 'initials',
        'first_name' => 'first_name',
        'family_name_prefix' => 'family_name_prefix',
        'family_name' => 'family_name',
        'full_name' => 'full_name',
        'date_of_birth' => 'date_of_birth',
        'note' => 'note',
        'email' => 'email',
        'phone' => 'phone',
        'website_url' => 'website_url',
        'twitter_url' => 'twitter_url',
        'linkedin_url' => 'linkedin_url',
        'facebook_url' => 'facebook_url',
        'relation_number' => 'relation_number',
        'bank_account' => 'bank_account',
        'bank_bic' => 'bank_bic',
        'invoice_receiver' => 'invoice_receiver',
        'mailing_list_email' => 'mailing_list_email',
        'mailing_lists' => 'mailing_lists',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'id' => 'setId',
        'gender_id' => 'setGenderId',
        'use_custom_salutation' => 'setUseCustomSalutation',
        'custom_salutation' => 'setCustomSalutation',
        'interests' => 'setInterests',
        'simplicate_url' => 'setSimplicateUrl',
        'address' => 'setAddress',
        'relation_manager' => 'setRelationManager',
        'teams' => 'setTeams',
        'is_employee' => 'setIsEmployee',
        'linked_as_contact_to_organization' => 'setLinkedAsContactToOrganization',
        'custom_fields' => 'setCustomFields',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'is_active' => 'setIsActive',
        'relation_type' => 'setRelationType',
        'gender' => 'setGender',
        'initials' => 'setInitials',
        'first_name' => 'setFirstName',
        'family_name_prefix' => 'setFamilyNamePrefix',
        'family_name' => 'setFamilyName',
        'full_name' => 'setFullName',
        'date_of_birth' => 'setDateOfBirth',
        'note' => 'setNote',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'website_url' => 'setWebsiteUrl',
        'twitter_url' => 'setTwitterUrl',
        'linkedin_url' => 'setLinkedinUrl',
        'facebook_url' => 'setFacebookUrl',
        'relation_number' => 'setRelationNumber',
        'bank_account' => 'setBankAccount',
        'bank_bic' => 'setBankBic',
        'invoice_receiver' => 'setInvoiceReceiver',
        'mailing_list_email' => 'setMailingListEmail',
        'mailing_lists' => 'setMailingLists',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'id' => 'getId',
        'gender_id' => 'getGenderId',
        'use_custom_salutation' => 'getUseCustomSalutation',
        'custom_salutation' => 'getCustomSalutation',
        'interests' => 'getInterests',
        'simplicate_url' => 'getSimplicateUrl',
        'address' => 'getAddress',
        'relation_manager' => 'getRelationManager',
        'teams' => 'getTeams',
        'is_employee' => 'getIsEmployee',
        'linked_as_contact_to_organization' => 'getLinkedAsContactToOrganization',
        'custom_fields' => 'getCustomFields',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'is_active' => 'getIsActive',
        'relation_type' => 'getRelationType',
        'gender' => 'getGender',
        'initials' => 'getInitials',
        'first_name' => 'getFirstName',
        'family_name_prefix' => 'getFamilyNamePrefix',
        'family_name' => 'getFamilyName',
        'full_name' => 'getFullName',
        'date_of_birth' => 'getDateOfBirth',
        'note' => 'getNote',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'website_url' => 'getWebsiteUrl',
        'twitter_url' => 'getTwitterUrl',
        'linkedin_url' => 'getLinkedinUrl',
        'facebook_url' => 'getFacebookUrl',
        'relation_number' => 'getRelationNumber',
        'bank_account' => 'getBankAccount',
        'bank_bic' => 'getBankBic',
        'invoice_receiver' => 'getInvoiceReceiver',
        'mailing_list_email' => 'getMailingListEmail',
        'mailing_lists' => 'getMailingLists',
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

    public const GENDER_MALE = 'Male';
    public const GENDER_FEMALE = 'Female';
    public const GENDER_UNKNOWN = 'Unknown';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_MALE,
            self::GENDER_FEMALE,
            self::GENDER_UNKNOWN,
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
        $this->container['gender_id'] = $data['gender_id'] ?? null;
        $this->container['use_custom_salutation'] = $data['use_custom_salutation'] ?? null;
        $this->container['custom_salutation'] = $data['custom_salutation'] ?? null;
        $this->container['interests'] = $data['interests'] ?? null;
        $this->container['simplicate_url'] = $data['simplicate_url'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['relation_manager'] = $data['relation_manager'] ?? null;
        $this->container['teams'] = $data['teams'] ?? null;
        $this->container['is_employee'] = $data['is_employee'] ?? null;
        $this->container['linked_as_contact_to_organization'] = $data['linked_as_contact_to_organization'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['is_active'] = $data['is_active'] ?? null;
        $this->container['relation_type'] = $data['relation_type'] ?? null;
        $this->container['gender'] = $data['gender'] ?? null;
        $this->container['initials'] = $data['initials'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['family_name_prefix'] = $data['family_name_prefix'] ?? null;
        $this->container['family_name'] = $data['family_name'] ?? null;
        $this->container['full_name'] = $data['full_name'] ?? null;
        $this->container['date_of_birth'] = $data['date_of_birth'] ?? null;
        $this->container['note'] = $data['note'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['website_url'] = $data['website_url'] ?? null;
        $this->container['twitter_url'] = $data['twitter_url'] ?? null;
        $this->container['linkedin_url'] = $data['linkedin_url'] ?? null;
        $this->container['facebook_url'] = $data['facebook_url'] ?? null;
        $this->container['relation_number'] = $data['relation_number'] ?? null;
        $this->container['bank_account'] = $data['bank_account'] ?? null;
        $this->container['bank_bic'] = $data['bank_bic'] ?? null;
        $this->container['invoice_receiver'] = $data['invoice_receiver'] ?? null;
        $this->container['mailing_list_email'] = $data['mailing_list_email'] ?? null;
        $this->container['mailing_lists'] = $data['mailing_lists'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($this->container['gender']) && !in_array($this->container['gender'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'gender', must be one of '%s'",
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
     * Gets gender_id
     *
     * @return string
     */
    public function getGenderId()
    {
        return $this->container['gender_id'];
    }

    /**
     * Sets gender_id
     *
     * @param string $gender_id gender_id
     *
     * @return $this
     */
    public function setGenderId($gender_id)
    {
        $this->container['gender_id'] = $gender_id;

        return $this;
    }

    /**
     * Gets use_custom_salutation
     *
     * @return bool
     */
    public function getUseCustomSalutation()
    {
        return $this->container['use_custom_salutation'];
    }

    /**
     * Sets use_custom_salutation
     *
     * @param bool $use_custom_salutation use_custom_salutation
     *
     * @return $this
     */
    public function setUseCustomSalutation($use_custom_salutation)
    {
        $this->container['use_custom_salutation'] = $use_custom_salutation;

        return $this;
    }

    /**
     * Gets custom_salutation
     *
     * @return string
     */
    public function getCustomSalutation()
    {
        return $this->container['custom_salutation'];
    }

    /**
     * Sets custom_salutation
     *
     * @param string $custom_salutation custom_salutation
     *
     * @return $this
     */
    public function setCustomSalutation($custom_salutation)
    {
        $this->container['custom_salutation'] = $custom_salutation;

        return $this;
    }

    /**
     * Gets interests
     *
     * @return \Paqtcom\Simplicate\Model\GetInterest[]
     */
    public function getInterests()
    {
        return $this->container['interests'];
    }

    /**
     * Sets interests
     *
     * @param \Paqtcom\Simplicate\Model\GetInterest[] $interests interests
     *
     * @return $this
     */
    public function setInterests($interests)
    {
        $this->container['interests'] = $interests;

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
     * Gets address
     *
     * @return \Paqtcom\Simplicate\Model\GetAddress[]
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Paqtcom\Simplicate\Model\GetAddress[] $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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
     * Gets is_employee
     *
     * @return int
     */
    public function getIsEmployee()
    {
        return $this->container['is_employee'];
    }

    /**
     * Sets is_employee
     *
     * @param int $is_employee is_employee
     *
     * @return $this
     */
    public function setIsEmployee($is_employee)
    {
        $this->container['is_employee'] = $is_employee;

        return $this;
    }

    /**
     * Gets linked_as_contact_to_organization
     *
     * @return \Paqtcom\Simplicate\Model\OrganizationContact[]
     */
    public function getLinkedAsContactToOrganization()
    {
        return $this->container['linked_as_contact_to_organization'];
    }

    /**
     * Sets linked_as_contact_to_organization
     *
     * @param \Paqtcom\Simplicate\Model\OrganizationContact[] $linked_as_contact_to_organization linked_as_contact_to_organization
     *
     * @return $this
     */
    public function setLinkedAsContactToOrganization($linked_as_contact_to_organization)
    {
        $this->container['linked_as_contact_to_organization'] = $linked_as_contact_to_organization;

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
     * Gets gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string $gender gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($gender) && !in_array($gender, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'gender', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets initials
     *
     * @return string
     */
    public function getInitials()
    {
        return $this->container['initials'];
    }

    /**
     * Sets initials
     *
     * @param string $initials initials
     *
     * @return $this
     */
    public function setInitials($initials)
    {
        $this->container['initials'] = $initials;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets family_name_prefix
     *
     * @return string
     */
    public function getFamilyNamePrefix()
    {
        return $this->container['family_name_prefix'];
    }

    /**
     * Sets family_name_prefix
     *
     * @param string $family_name_prefix family_name_prefix
     *
     * @return $this
     */
    public function setFamilyNamePrefix($family_name_prefix)
    {
        $this->container['family_name_prefix'] = $family_name_prefix;

        return $this;
    }

    /**
     * Gets family_name
     *
     * @return string
     */
    public function getFamilyName()
    {
        return $this->container['family_name'];
    }

    /**
     * Sets family_name
     *
     * @param string $family_name family_name
     *
     * @return $this
     */
    public function setFamilyName($family_name)
    {
        $this->container['family_name'] = $family_name;

        return $this;
    }

    /**
     * Gets full_name
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     *
     * @param string $full_name full_name
     *
     * @return $this
     */
    public function setFullName($full_name)
    {
        $this->container['full_name'] = $full_name;

        return $this;
    }

    /**
     * Gets date_of_birth
     *
     * @return string
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param string $date_of_birth date_of_birth
     *
     * @return $this
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->container['date_of_birth'] = $date_of_birth;

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
     * Gets website_url
     *
     * @return string
     */
    public function getWebsiteUrl()
    {
        return $this->container['website_url'];
    }

    /**
     * Sets website_url
     *
     * @param string $website_url website_url
     *
     * @return $this
     */
    public function setWebsiteUrl($website_url)
    {
        $this->container['website_url'] = $website_url;

        return $this;
    }

    /**
     * Gets twitter_url
     *
     * @return string
     */
    public function getTwitterUrl()
    {
        return $this->container['twitter_url'];
    }

    /**
     * Sets twitter_url
     *
     * @param string $twitter_url twitter_url
     *
     * @return $this
     */
    public function setTwitterUrl($twitter_url)
    {
        $this->container['twitter_url'] = $twitter_url;

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
     * Gets facebook_url
     *
     * @return string
     */
    public function getFacebookUrl()
    {
        return $this->container['facebook_url'];
    }

    /**
     * Sets facebook_url
     *
     * @param string $facebook_url facebook_url
     *
     * @return $this
     */
    public function setFacebookUrl($facebook_url)
    {
        $this->container['facebook_url'] = $facebook_url;

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
     * Gets mailing_list_email
     *
     * @return string
     */
    public function getMailingListEmail()
    {
        return $this->container['mailing_list_email'];
    }

    /**
     * Sets mailing_list_email
     *
     * @param string $mailing_list_email mailing_list_email
     *
     * @return $this
     */
    public function setMailingListEmail($mailing_list_email)
    {
        $this->container['mailing_list_email'] = $mailing_list_email;

        return $this;
    }

    /**
     * Gets mailing_lists
     *
     * @return \Paqtcom\Simplicate\Model\PersonMailingList[]
     */
    public function getMailingLists()
    {
        return $this->container['mailing_lists'];
    }

    /**
     * Sets mailing_lists
     *
     * @param \Paqtcom\Simplicate\Model\PersonMailingList[] $mailing_lists mailing_lists
     *
     * @return $this
     */
    public function setMailingLists($mailing_lists)
    {
        $this->container['mailing_lists'] = $mailing_lists;

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
