<?php

/**
 * GetDefaultWorkflow
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

use ArrayAccess;
use Swagger\Client\ObjectSerializer;

/**
 * GetDefaultWorkflow Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetDefaultWorkflow implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetDefaultWorkflow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'workflowgroup' => '\Swagger\Client\Model\GetDefaultWorkflowGroup',
        'title' => 'string',
        'description' => 'string',
        'can_have_attachment' => 'bool',
        'is_blocked' => 'bool',
        'is_for_crm' => 'bool',
        'is_for_contact' => 'bool',
        'is_for_sale' => 'bool',
        'is_for_debtor' => 'bool',
        'is_for_project' => 'bool',
        'is_for_subscription' => 'bool',
        'is_for_employee' => 'bool',
        'is_for_invoice' => 'bool',
        'is_for_myorganizationprofile' => 'bool',
        'is_visible_on_all' => 'bool',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'workflowgroup' => null,
        'title' => null,
        'description' => null,
        'can_have_attachment' => null,
        'is_blocked' => null,
        'is_for_crm' => null,
        'is_for_contact' => null,
        'is_for_sale' => null,
        'is_for_debtor' => null,
        'is_for_project' => null,
        'is_for_subscription' => null,
        'is_for_employee' => null,
        'is_for_invoice' => null,
        'is_for_myorganizationprofile' => null,
        'is_visible_on_all' => null,
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
        'workflowgroup' => 'workflowgroup',
        'title' => 'title',
        'description' => 'description',
        'can_have_attachment' => 'can_have_attachment',
        'is_blocked' => 'is_blocked',
        'is_for_crm' => 'is_for_crm',
        'is_for_contact' => 'is_for_contact',
        'is_for_sale' => 'is_for_sale',
        'is_for_debtor' => 'is_for_debtor',
        'is_for_project' => 'is_for_project',
        'is_for_subscription' => 'is_for_subscription',
        'is_for_employee' => 'is_for_employee',
        'is_for_invoice' => 'is_for_invoice',
        'is_for_myorganizationprofile' => 'is_for_myorganizationprofile',
        'is_visible_on_all' => 'is_visible_on_all',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'workflowgroup' => 'setWorkflowgroup',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'can_have_attachment' => 'setCanHaveAttachment',
        'is_blocked' => 'setIsBlocked',
        'is_for_crm' => 'setIsForCrm',
        'is_for_contact' => 'setIsForContact',
        'is_for_sale' => 'setIsForSale',
        'is_for_debtor' => 'setIsForDebtor',
        'is_for_project' => 'setIsForProject',
        'is_for_subscription' => 'setIsForSubscription',
        'is_for_employee' => 'setIsForEmployee',
        'is_for_invoice' => 'setIsForInvoice',
        'is_for_myorganizationprofile' => 'setIsForMyorganizationprofile',
        'is_visible_on_all' => 'setIsVisibleOnAll',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'workflowgroup' => 'getWorkflowgroup',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'can_have_attachment' => 'getCanHaveAttachment',
        'is_blocked' => 'getIsBlocked',
        'is_for_crm' => 'getIsForCrm',
        'is_for_contact' => 'getIsForContact',
        'is_for_sale' => 'getIsForSale',
        'is_for_debtor' => 'getIsForDebtor',
        'is_for_project' => 'getIsForProject',
        'is_for_subscription' => 'getIsForSubscription',
        'is_for_employee' => 'getIsForEmployee',
        'is_for_invoice' => 'getIsForInvoice',
        'is_for_myorganizationprofile' => 'getIsForMyorganizationprofile',
        'is_visible_on_all' => 'getIsVisibleOnAll',
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
        $this->container['workflowgroup'] = isset($data['workflowgroup']) ? $data['workflowgroup'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['can_have_attachment'] = isset($data['can_have_attachment']) ? $data['can_have_attachment'] : null;
        $this->container['is_blocked'] = isset($data['is_blocked']) ? $data['is_blocked'] : null;
        $this->container['is_for_crm'] = isset($data['is_for_crm']) ? $data['is_for_crm'] : null;
        $this->container['is_for_contact'] = isset($data['is_for_contact']) ? $data['is_for_contact'] : null;
        $this->container['is_for_sale'] = isset($data['is_for_sale']) ? $data['is_for_sale'] : null;
        $this->container['is_for_debtor'] = isset($data['is_for_debtor']) ? $data['is_for_debtor'] : null;
        $this->container['is_for_project'] = isset($data['is_for_project']) ? $data['is_for_project'] : null;
        $this->container['is_for_subscription'] = isset($data['is_for_subscription']) ? $data['is_for_subscription'] : null;
        $this->container['is_for_employee'] = isset($data['is_for_employee']) ? $data['is_for_employee'] : null;
        $this->container['is_for_invoice'] = isset($data['is_for_invoice']) ? $data['is_for_invoice'] : null;
        $this->container['is_for_myorganizationprofile'] = isset($data['is_for_myorganizationprofile']) ? $data['is_for_myorganizationprofile'] : null;
        $this->container['is_visible_on_all'] = isset($data['is_visible_on_all']) ? $data['is_visible_on_all'] : null;
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
     * Gets workflowgroup
     *
     * @return \Swagger\Client\Model\GetDefaultWorkflowGroup
     */
    public function getWorkflowgroup()
    {
        return $this->container['workflowgroup'];
    }

    /**
     * Sets workflowgroup
     *
     * @param \Swagger\Client\Model\GetDefaultWorkflowGroup $workflowgroup workflowgroup
     *
     * @return $this
     */
    public function setWorkflowgroup($workflowgroup)
    {
        $this->container['workflowgroup'] = $workflowgroup;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets can_have_attachment
     *
     * @return bool
     */
    public function getCanHaveAttachment()
    {
        return $this->container['can_have_attachment'];
    }

    /**
     * Sets can_have_attachment
     *
     * @param bool $can_have_attachment can_have_attachment
     *
     * @return $this
     */
    public function setCanHaveAttachment($can_have_attachment)
    {
        $this->container['can_have_attachment'] = $can_have_attachment;

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
     * Gets is_for_crm
     *
     * @return bool
     */
    public function getIsForCrm()
    {
        return $this->container['is_for_crm'];
    }

    /**
     * Sets is_for_crm
     *
     * @param bool $is_for_crm is_for_crm
     *
     * @return $this
     */
    public function setIsForCrm($is_for_crm)
    {
        $this->container['is_for_crm'] = $is_for_crm;

        return $this;
    }

    /**
     * Gets is_for_contact
     *
     * @return bool
     */
    public function getIsForContact()
    {
        return $this->container['is_for_contact'];
    }

    /**
     * Sets is_for_contact
     *
     * @param bool $is_for_contact is_for_contact
     *
     * @return $this
     */
    public function setIsForContact($is_for_contact)
    {
        $this->container['is_for_contact'] = $is_for_contact;

        return $this;
    }

    /**
     * Gets is_for_sale
     *
     * @return bool
     */
    public function getIsForSale()
    {
        return $this->container['is_for_sale'];
    }

    /**
     * Sets is_for_sale
     *
     * @param bool $is_for_sale is_for_sale
     *
     * @return $this
     */
    public function setIsForSale($is_for_sale)
    {
        $this->container['is_for_sale'] = $is_for_sale;

        return $this;
    }

    /**
     * Gets is_for_debtor
     *
     * @return bool
     */
    public function getIsForDebtor()
    {
        return $this->container['is_for_debtor'];
    }

    /**
     * Sets is_for_debtor
     *
     * @param bool $is_for_debtor is_for_debtor
     *
     * @return $this
     */
    public function setIsForDebtor($is_for_debtor)
    {
        $this->container['is_for_debtor'] = $is_for_debtor;

        return $this;
    }

    /**
     * Gets is_for_project
     *
     * @return bool
     */
    public function getIsForProject()
    {
        return $this->container['is_for_project'];
    }

    /**
     * Sets is_for_project
     *
     * @param bool $is_for_project is_for_project
     *
     * @return $this
     */
    public function setIsForProject($is_for_project)
    {
        $this->container['is_for_project'] = $is_for_project;

        return $this;
    }

    /**
     * Gets is_for_subscription
     *
     * @return bool
     */
    public function getIsForSubscription()
    {
        return $this->container['is_for_subscription'];
    }

    /**
     * Sets is_for_subscription
     *
     * @param bool $is_for_subscription is_for_subscription
     *
     * @return $this
     */
    public function setIsForSubscription($is_for_subscription)
    {
        $this->container['is_for_subscription'] = $is_for_subscription;

        return $this;
    }

    /**
     * Gets is_for_employee
     *
     * @return bool
     */
    public function getIsForEmployee()
    {
        return $this->container['is_for_employee'];
    }

    /**
     * Sets is_for_employee
     *
     * @param bool $is_for_employee is_for_employee
     *
     * @return $this
     */
    public function setIsForEmployee($is_for_employee)
    {
        $this->container['is_for_employee'] = $is_for_employee;

        return $this;
    }

    /**
     * Gets is_for_invoice
     *
     * @return bool
     */
    public function getIsForInvoice()
    {
        return $this->container['is_for_invoice'];
    }

    /**
     * Sets is_for_invoice
     *
     * @param bool $is_for_invoice is_for_invoice
     *
     * @return $this
     */
    public function setIsForInvoice($is_for_invoice)
    {
        $this->container['is_for_invoice'] = $is_for_invoice;

        return $this;
    }

    /**
     * Gets is_for_myorganizationprofile
     *
     * @return bool
     */
    public function getIsForMyorganizationprofile()
    {
        return $this->container['is_for_myorganizationprofile'];
    }

    /**
     * Sets is_for_myorganizationprofile
     *
     * @param bool $is_for_myorganizationprofile is_for_myorganizationprofile
     *
     * @return $this
     */
    public function setIsForMyorganizationprofile($is_for_myorganizationprofile)
    {
        $this->container['is_for_myorganizationprofile'] = $is_for_myorganizationprofile;

        return $this;
    }

    /**
     * Gets is_visible_on_all
     *
     * @return bool
     */
    public function getIsVisibleOnAll()
    {
        return $this->container['is_visible_on_all'];
    }

    /**
     * Sets is_visible_on_all
     *
     * @param bool $is_visible_on_all is_visible_on_all
     *
     * @return $this
     */
    public function setIsVisibleOnAll($is_visible_on_all)
    {
        $this->container['is_visible_on_all'] = $is_visible_on_all;

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
