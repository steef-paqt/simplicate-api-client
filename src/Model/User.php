<?php

/**
 * User
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
 * User Class Doc Comment
 *
 * @category Class
 * @package  Paqtcom\Simplicate
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class User implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $swaggerModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'username' => 'string',
        'email' => 'string',
        'gender' => 'string',
        'initials' => 'string',
        'first_name' => 'string',
        'family_name_prefix' => 'string',
        'family_name' => 'string',
        'birthdate' => 'string',
        'is_authy_enabled' => 'bool',
        'is_employee' => 'bool',
        'is_light_user' => 'bool',
        'employee_id' => 'string',
        'person_id' => 'string',
        'is_blocked' => 'bool',
        'is_lock_nav' => 'bool',
        'key_identifier' => 'string',
        'timezone' => '\Paqtcom\Simplicate\Model\Timezone',
        'country' => '\Paqtcom\Simplicate\Model\Country',
        'hours_view_mode' => 'string',
        'is_account_owner' => 'bool',
        'has_external_agenda_integration' => 'bool',
        'rights' => '\Paqtcom\Simplicate\Model\Right[]',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'username' => null,
        'email' => null,
        'gender' => null,
        'initials' => null,
        'first_name' => null,
        'family_name_prefix' => null,
        'family_name' => null,
        'birthdate' => null,
        'is_authy_enabled' => null,
        'is_employee' => null,
        'is_light_user' => null,
        'employee_id' => null,
        'person_id' => null,
        'is_blocked' => null,
        'is_lock_nav' => null,
        'key_identifier' => null,
        'timezone' => null,
        'country' => null,
        'hours_view_mode' => null,
        'is_account_owner' => null,
        'has_external_agenda_integration' => null,
        'rights' => null,
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
        'username' => 'username',
        'email' => 'email',
        'gender' => 'gender',
        'initials' => 'initials',
        'first_name' => 'first_name',
        'family_name_prefix' => 'family_name_prefix',
        'family_name' => 'family_name',
        'birthdate' => 'birthdate',
        'is_authy_enabled' => 'is_authy_enabled',
        'is_employee' => 'is_employee',
        'is_light_user' => 'is_light_user',
        'employee_id' => 'employee_id',
        'person_id' => 'person_id',
        'is_blocked' => 'is_blocked',
        'is_lock_nav' => 'is_lock_nav',
        'key_identifier' => 'key_identifier',
        'timezone' => 'timezone',
        'country' => 'country',
        'hours_view_mode' => 'hours_view_mode',
        'is_account_owner' => 'is_account_owner',
        'has_external_agenda_integration' => 'has_external_agenda_integration',
        'rights' => 'rights',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'username' => 'setUsername',
        'email' => 'setEmail',
        'gender' => 'setGender',
        'initials' => 'setInitials',
        'first_name' => 'setFirstName',
        'family_name_prefix' => 'setFamilyNamePrefix',
        'family_name' => 'setFamilyName',
        'birthdate' => 'setBirthdate',
        'is_authy_enabled' => 'setIsAuthyEnabled',
        'is_employee' => 'setIsEmployee',
        'is_light_user' => 'setIsLightUser',
        'employee_id' => 'setEmployeeId',
        'person_id' => 'setPersonId',
        'is_blocked' => 'setIsBlocked',
        'is_lock_nav' => 'setIsLockNav',
        'key_identifier' => 'setKeyIdentifier',
        'timezone' => 'setTimezone',
        'country' => 'setCountry',
        'hours_view_mode' => 'setHoursViewMode',
        'is_account_owner' => 'setIsAccountOwner',
        'has_external_agenda_integration' => 'setHasExternalAgendaIntegration',
        'rights' => 'setRights',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'username' => 'getUsername',
        'email' => 'getEmail',
        'gender' => 'getGender',
        'initials' => 'getInitials',
        'first_name' => 'getFirstName',
        'family_name_prefix' => 'getFamilyNamePrefix',
        'family_name' => 'getFamilyName',
        'birthdate' => 'getBirthdate',
        'is_authy_enabled' => 'getIsAuthyEnabled',
        'is_employee' => 'getIsEmployee',
        'is_light_user' => 'getIsLightUser',
        'employee_id' => 'getEmployeeId',
        'person_id' => 'getPersonId',
        'is_blocked' => 'getIsBlocked',
        'is_lock_nav' => 'getIsLockNav',
        'key_identifier' => 'getKeyIdentifier',
        'timezone' => 'getTimezone',
        'country' => 'getCountry',
        'hours_view_mode' => 'getHoursViewMode',
        'is_account_owner' => 'getIsAccountOwner',
        'has_external_agenda_integration' => 'getHasExternalAgendaIntegration',
        'rights' => 'getRights',
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

    public const HOURS_VIEW_MODE_AGENDA = 'agenda';
    public const HOURS_VIEW_MODE_GRID = 'grid';
    public const HOURS_VIEW_MODE_BOTH = 'both';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHoursViewModeAllowableValues()
    {
        return [
            self::HOURS_VIEW_MODE_AGENDA,
            self::HOURS_VIEW_MODE_GRID,
            self::HOURS_VIEW_MODE_BOTH,
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
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['initials'] = isset($data['initials']) ? $data['initials'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['family_name_prefix'] = isset($data['family_name_prefix']) ? $data['family_name_prefix'] : null;
        $this->container['family_name'] = isset($data['family_name']) ? $data['family_name'] : null;
        $this->container['birthdate'] = isset($data['birthdate']) ? $data['birthdate'] : null;
        $this->container['is_authy_enabled'] = isset($data['is_authy_enabled']) ? $data['is_authy_enabled'] : null;
        $this->container['is_employee'] = isset($data['is_employee']) ? $data['is_employee'] : null;
        $this->container['is_light_user'] = isset($data['is_light_user']) ? $data['is_light_user'] : null;
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['person_id'] = isset($data['person_id']) ? $data['person_id'] : null;
        $this->container['is_blocked'] = isset($data['is_blocked']) ? $data['is_blocked'] : null;
        $this->container['is_lock_nav'] = isset($data['is_lock_nav']) ? $data['is_lock_nav'] : null;
        $this->container['key_identifier'] = isset($data['key_identifier']) ? $data['key_identifier'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['hours_view_mode'] = isset($data['hours_view_mode']) ? $data['hours_view_mode'] : null;
        $this->container['is_account_owner'] = isset($data['is_account_owner']) ? $data['is_account_owner'] : null;
        $this->container['has_external_agenda_integration'] = isset($data['has_external_agenda_integration']) ? $data['has_external_agenda_integration'] : null;
        $this->container['rights'] = isset($data['rights']) ? $data['rights'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getHoursViewModeAllowableValues();
        if (!is_null($this->container['hours_view_mode']) && !in_array($this->container['hours_view_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'hours_view_mode', must be one of '%s'",
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
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

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
     * Gets birthdate
     *
     * @return string
     */
    public function getBirthdate()
    {
        return $this->container['birthdate'];
    }

    /**
     * Sets birthdate
     *
     * @param string $birthdate birthdate
     *
     * @return $this
     */
    public function setBirthdate($birthdate)
    {
        $this->container['birthdate'] = $birthdate;

        return $this;
    }

    /**
     * Gets is_authy_enabled
     *
     * @return bool
     */
    public function getIsAuthyEnabled()
    {
        return $this->container['is_authy_enabled'];
    }

    /**
     * Sets is_authy_enabled
     *
     * @param bool $is_authy_enabled is_authy_enabled
     *
     * @return $this
     */
    public function setIsAuthyEnabled($is_authy_enabled)
    {
        $this->container['is_authy_enabled'] = $is_authy_enabled;

        return $this;
    }

    /**
     * Gets is_employee
     *
     * @return bool
     */
    public function getIsEmployee()
    {
        return $this->container['is_employee'];
    }

    /**
     * Sets is_employee
     *
     * @param bool $is_employee is_employee
     *
     * @return $this
     */
    public function setIsEmployee($is_employee)
    {
        $this->container['is_employee'] = $is_employee;

        return $this;
    }

    /**
     * Gets is_light_user
     *
     * @return bool
     */
    public function getIsLightUser()
    {
        return $this->container['is_light_user'];
    }

    /**
     * Sets is_light_user
     *
     * @param bool $is_light_user is_light_user
     *
     * @return $this
     */
    public function setIsLightUser($is_light_user)
    {
        $this->container['is_light_user'] = $is_light_user;

        return $this;
    }

    /**
     * Gets employee_id
     *
     * @return string
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param string $employee_id employee_id
     *
     * @return $this
     */
    public function setEmployeeId($employee_id)
    {
        $this->container['employee_id'] = $employee_id;

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
     * Gets is_blocked
     *
     * @return bool
     */
    public function getIsBlocked()
    {
        return $this->container['is_blocked'];
    }

    /**
     * Sets is_blocked
     *
     * @param bool $is_blocked is_blocked
     *
     * @return $this
     */
    public function setIsBlocked($is_blocked)
    {
        $this->container['is_blocked'] = $is_blocked;

        return $this;
    }

    /**
     * Gets is_lock_nav
     *
     * @return bool
     */
    public function getIsLockNav()
    {
        return $this->container['is_lock_nav'];
    }

    /**
     * Sets is_lock_nav
     *
     * @param bool $is_lock_nav is_lock_nav
     *
     * @return $this
     */
    public function setIsLockNav($is_lock_nav)
    {
        $this->container['is_lock_nav'] = $is_lock_nav;

        return $this;
    }

    /**
     * Gets key_identifier
     *
     * @return string
     */
    public function getKeyIdentifier()
    {
        return $this->container['key_identifier'];
    }

    /**
     * Sets key_identifier
     *
     * @param string $key_identifier key_identifier
     *
     * @return $this
     */
    public function setKeyIdentifier($key_identifier)
    {
        $this->container['key_identifier'] = $key_identifier;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return \Paqtcom\Simplicate\Model\Timezone
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param \Paqtcom\Simplicate\Model\Timezone $timezone timezone
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \Paqtcom\Simplicate\Model\Country
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \Paqtcom\Simplicate\Model\Country $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets hours_view_mode
     *
     * @return string
     */
    public function getHoursViewMode()
    {
        return $this->container['hours_view_mode'];
    }

    /**
     * Sets hours_view_mode
     *
     * @param string $hours_view_mode hours_view_mode
     *
     * @return $this
     */
    public function setHoursViewMode($hours_view_mode)
    {
        $allowedValues = $this->getHoursViewModeAllowableValues();
        if (!is_null($hours_view_mode) && !in_array($hours_view_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'hours_view_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['hours_view_mode'] = $hours_view_mode;

        return $this;
    }

    /**
     * Gets is_account_owner
     *
     * @return bool
     */
    public function getIsAccountOwner()
    {
        return $this->container['is_account_owner'];
    }

    /**
     * Sets is_account_owner
     *
     * @param bool $is_account_owner is_account_owner
     *
     * @return $this
     */
    public function setIsAccountOwner($is_account_owner)
    {
        $this->container['is_account_owner'] = $is_account_owner;

        return $this;
    }

    /**
     * Gets has_external_agenda_integration
     *
     * @return bool
     */
    public function getHasExternalAgendaIntegration()
    {
        return $this->container['has_external_agenda_integration'];
    }

    /**
     * Sets has_external_agenda_integration
     *
     * @param bool $has_external_agenda_integration has_external_agenda_integration
     *
     * @return $this
     */
    public function setHasExternalAgendaIntegration($has_external_agenda_integration)
    {
        $this->container['has_external_agenda_integration'] = $has_external_agenda_integration;

        return $this;
    }

    /**
     * Gets rights
     *
     * @return \Paqtcom\Simplicate\Model\Right[]
     */
    public function getRights()
    {
        return $this->container['rights'];
    }

    /**
     * Sets rights
     *
     * @param \Paqtcom\Simplicate\Model\Right[] $rights rights
     *
     * @return $this
     */
    public function setRights($rights)
    {
        $this->container['rights'] = $rights;

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
