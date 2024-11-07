<?php

/**
 * GetProjectService
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
 * GetProjectService Class Doc Comment
 *
 * @category Class
 * @package  Paqtcom\Simplicate
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetProjectService implements ModelInterface, ArrayAccess, \Stringable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $swaggerModelName = 'GetProjectService';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'project_id' => 'string',
        'related_service_id' => 'string',
        'expected_invoice_date' => 'string',
        'invoice_date' => 'string',
        'status' => 'string',
        'hour_types' => '\Paqtcom\Simplicate\Model\GetProjectServiceHoursType[]',
        'cost_types' => '\Paqtcom\Simplicate\Model\GetProjectServiceCostType[]',
        'vat_class' => \Paqtcom\Simplicate\Model\VatClass::class,
        'revenue_group' => \Paqtcom\Simplicate\Model\RevenueGroup::class,
        'invoice_in_installments' => 'bool',
        'installments' => '\Paqtcom\Simplicate\Model\Installment[]',
        'created_at' => 'string',
        'updated_at' => 'string',
        'budget_financial_hours' => 'string',
        'write_hours_start_date' => 'string',
        'write_hours_end_date' => 'string',
        'service_number' => 'string',
        'use_in_resource_planner' => 'bool',
        'id' => 'string',
        'start_date' => 'string',
        'end_date' => 'string',
        'subscription_cycle' => 'string',
        'budget' => 'float',
        'default_service_id' => 'string',
        'name' => 'string',
        'explanation' => 'string',
        'invoice_method' => 'string',
        'amount' => 'float',
        'price' => 'float',
        'track_hours' => 'bool',
        'track_cost' => 'bool',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'project_id' => null,
        'related_service_id' => null,
        'expected_invoice_date' => null,
        'invoice_date' => null,
        'status' => null,
        'hour_types' => null,
        'cost_types' => null,
        'vat_class' => null,
        'revenue_group' => null,
        'invoice_in_installments' => null,
        'installments' => null,
        'created_at' => null,
        'updated_at' => null,
        'budget_financial_hours' => null,
        'write_hours_start_date' => null,
        'write_hours_end_date' => null,
        'service_number' => null,
        'use_in_resource_planner' => null,
        'id' => null,
        'start_date' => null,
        'end_date' => null,
        'subscription_cycle' => null,
        'budget' => 'float',
        'default_service_id' => null,
        'name' => null,
        'explanation' => null,
        'invoice_method' => null,
        'amount' => 'float',
        'price' => 'float',
        'track_hours' => null,
        'track_cost' => null,
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
        'project_id' => 'project_id',
        'related_service_id' => 'related_service_id',
        'expected_invoice_date' => 'expected_invoice_date',
        'invoice_date' => 'invoice_date',
        'status' => 'status',
        'hour_types' => 'hour_types',
        'cost_types' => 'cost_types',
        'vat_class' => 'vat_class',
        'revenue_group' => 'revenue_group',
        'invoice_in_installments' => 'invoice_in_installments',
        'installments' => 'installments',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'budget_financial_hours' => 'budget_financial_hours',
        'write_hours_start_date' => 'write_hours_start_date',
        'write_hours_end_date' => 'write_hours_end_date',
        'service_number' => 'service_number',
        'use_in_resource_planner' => 'use_in_resource_planner',
        'id' => 'id',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'subscription_cycle' => 'subscription_cycle',
        'budget' => 'budget',
        'default_service_id' => 'default_service_id',
        'name' => 'name',
        'explanation' => 'explanation',
        'invoice_method' => 'invoice_method',
        'amount' => 'amount',
        'price' => 'price',
        'track_hours' => 'track_hours',
        'track_cost' => 'track_cost',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'project_id' => 'setProjectId',
        'related_service_id' => 'setRelatedServiceId',
        'expected_invoice_date' => 'setExpectedInvoiceDate',
        'invoice_date' => 'setInvoiceDate',
        'status' => 'setStatus',
        'hour_types' => 'setHourTypes',
        'cost_types' => 'setCostTypes',
        'vat_class' => 'setVatClass',
        'revenue_group' => 'setRevenueGroup',
        'invoice_in_installments' => 'setInvoiceInInstallments',
        'installments' => 'setInstallments',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'budget_financial_hours' => 'setBudgetFinancialHours',
        'write_hours_start_date' => 'setWriteHoursStartDate',
        'write_hours_end_date' => 'setWriteHoursEndDate',
        'service_number' => 'setServiceNumber',
        'use_in_resource_planner' => 'setUseInResourcePlanner',
        'id' => 'setId',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'subscription_cycle' => 'setSubscriptionCycle',
        'budget' => 'setBudget',
        'default_service_id' => 'setDefaultServiceId',
        'name' => 'setName',
        'explanation' => 'setExplanation',
        'invoice_method' => 'setInvoiceMethod',
        'amount' => 'setAmount',
        'price' => 'setPrice',
        'track_hours' => 'setTrackHours',
        'track_cost' => 'setTrackCost',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'project_id' => 'getProjectId',
        'related_service_id' => 'getRelatedServiceId',
        'expected_invoice_date' => 'getExpectedInvoiceDate',
        'invoice_date' => 'getInvoiceDate',
        'status' => 'getStatus',
        'hour_types' => 'getHourTypes',
        'cost_types' => 'getCostTypes',
        'vat_class' => 'getVatClass',
        'revenue_group' => 'getRevenueGroup',
        'invoice_in_installments' => 'getInvoiceInInstallments',
        'installments' => 'getInstallments',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'budget_financial_hours' => 'getBudgetFinancialHours',
        'write_hours_start_date' => 'getWriteHoursStartDate',
        'write_hours_end_date' => 'getWriteHoursEndDate',
        'service_number' => 'getServiceNumber',
        'use_in_resource_planner' => 'getUseInResourcePlanner',
        'id' => 'getId',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'subscription_cycle' => 'getSubscriptionCycle',
        'budget' => 'getBudget',
        'default_service_id' => 'getDefaultServiceId',
        'name' => 'getName',
        'explanation' => 'getExplanation',
        'invoice_method' => 'getInvoiceMethod',
        'amount' => 'getAmount',
        'price' => 'getPrice',
        'track_hours' => 'getTrackHours',
        'track_cost' => 'getTrackCost',
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

    public const SUBSCRIPTION_CYCLE_MONTH = 'Month';
    public const SUBSCRIPTION_CYCLE_QUARTER = 'Quarter';
    public const SUBSCRIPTION_CYCLE_HALF_A_YEAR = 'Half_a_year';
    public const SUBSCRIPTION_CYCLE_YEAR = 'Year';
    public const INVOICE_METHOD_HOURS = 'Hours';
    public const INVOICE_METHOD_FIXED_FEE = 'FixedFee';
    public const INVOICE_METHOD_SUBSCRIPTION = 'Subscription';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubscriptionCycleAllowableValues()
    {
        return [
            self::SUBSCRIPTION_CYCLE_MONTH,
            self::SUBSCRIPTION_CYCLE_QUARTER,
            self::SUBSCRIPTION_CYCLE_HALF_A_YEAR,
            self::SUBSCRIPTION_CYCLE_YEAR,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInvoiceMethodAllowableValues()
    {
        return [
            self::INVOICE_METHOD_HOURS,
            self::INVOICE_METHOD_FIXED_FEE,
            self::INVOICE_METHOD_SUBSCRIPTION,
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
        $this->container['project_id'] = $data['project_id'] ?? null;
        $this->container['related_service_id'] = $data['related_service_id'] ?? null;
        $this->container['expected_invoice_date'] = $data['expected_invoice_date'] ?? null;
        $this->container['invoice_date'] = $data['invoice_date'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['hour_types'] = $data['hour_types'] ?? null;
        $this->container['cost_types'] = $data['cost_types'] ?? null;
        $this->container['vat_class'] = $data['vat_class'] ?? null;
        $this->container['revenue_group'] = $data['revenue_group'] ?? null;
        $this->container['invoice_in_installments'] = $data['invoice_in_installments'] ?? null;
        $this->container['installments'] = $data['installments'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['budget_financial_hours'] = $data['budget_financial_hours'] ?? null;
        $this->container['write_hours_start_date'] = $data['write_hours_start_date'] ?? null;
        $this->container['write_hours_end_date'] = $data['write_hours_end_date'] ?? null;
        $this->container['service_number'] = $data['service_number'] ?? null;
        $this->container['use_in_resource_planner'] = $data['use_in_resource_planner'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['subscription_cycle'] = $data['subscription_cycle'] ?? null;
        $this->container['budget'] = $data['budget'] ?? null;
        $this->container['default_service_id'] = $data['default_service_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['explanation'] = $data['explanation'] ?? null;
        $this->container['invoice_method'] = $data['invoice_method'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['track_hours'] = $data['track_hours'] ?? null;
        $this->container['track_cost'] = $data['track_cost'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSubscriptionCycleAllowableValues();
        if (!is_null($this->container['subscription_cycle']) && !in_array($this->container['subscription_cycle'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'subscription_cycle', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getInvoiceMethodAllowableValues();
        if (!is_null($this->container['invoice_method']) && !in_array($this->container['invoice_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'invoice_method', must be one of '%s'",
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
     * Gets related_service_id
     *
     * @return string
     */
    public function getRelatedServiceId()
    {
        return $this->container['related_service_id'];
    }

    /**
     * Sets related_service_id
     *
     * @param string $related_service_id related_service_id
     *
     * @return $this
     */
    public function setRelatedServiceId($related_service_id)
    {
        $this->container['related_service_id'] = $related_service_id;

        return $this;
    }

    /**
     * Gets expected_invoice_date
     *
     * @return string
     */
    public function getExpectedInvoiceDate()
    {
        return $this->container['expected_invoice_date'];
    }

    /**
     * Sets expected_invoice_date
     *
     * @param string $expected_invoice_date expected_invoice_date
     *
     * @return $this
     */
    public function setExpectedInvoiceDate($expected_invoice_date)
    {
        $this->container['expected_invoice_date'] = $expected_invoice_date;

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
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets hour_types
     *
     * @return \Paqtcom\Simplicate\Model\GetProjectServiceHoursType[]
     */
    public function getHourTypes()
    {
        return $this->container['hour_types'];
    }

    /**
     * Sets hour_types
     *
     * @param \Paqtcom\Simplicate\Model\GetProjectServiceHoursType[] $hour_types hour_types
     *
     * @return $this
     */
    public function setHourTypes($hour_types)
    {
        $this->container['hour_types'] = $hour_types;

        return $this;
    }

    /**
     * Gets cost_types
     *
     * @return \Paqtcom\Simplicate\Model\GetProjectServiceCostType[]
     */
    public function getCostTypes()
    {
        return $this->container['cost_types'];
    }

    /**
     * Sets cost_types
     *
     * @param \Paqtcom\Simplicate\Model\GetProjectServiceCostType[] $cost_types cost_types
     *
     * @return $this
     */
    public function setCostTypes($cost_types)
    {
        $this->container['cost_types'] = $cost_types;

        return $this;
    }

    /**
     * Gets vat_class
     *
     * @return \Paqtcom\Simplicate\Model\VatClass
     */
    public function getVatClass()
    {
        return $this->container['vat_class'];
    }

    /**
     * Sets vat_class
     *
     * @param \Paqtcom\Simplicate\Model\VatClass $vat_class vat_class
     *
     * @return $this
     */
    public function setVatClass($vat_class)
    {
        $this->container['vat_class'] = $vat_class;

        return $this;
    }

    /**
     * Gets revenue_group
     *
     * @return \Paqtcom\Simplicate\Model\RevenueGroup
     */
    public function getRevenueGroup()
    {
        return $this->container['revenue_group'];
    }

    /**
     * Sets revenue_group
     *
     * @param \Paqtcom\Simplicate\Model\RevenueGroup $revenue_group revenue_group
     *
     * @return $this
     */
    public function setRevenueGroup($revenue_group)
    {
        $this->container['revenue_group'] = $revenue_group;

        return $this;
    }

    /**
     * Gets invoice_in_installments
     *
     * @return bool
     */
    public function getInvoiceInInstallments()
    {
        return $this->container['invoice_in_installments'];
    }

    /**
     * Sets invoice_in_installments
     *
     * @param bool $invoice_in_installments invoice_in_installments
     *
     * @return $this
     */
    public function setInvoiceInInstallments($invoice_in_installments)
    {
        $this->container['invoice_in_installments'] = $invoice_in_installments;

        return $this;
    }

    /**
     * Gets installments
     *
     * @return \Paqtcom\Simplicate\Model\Installment[]
     */
    public function getInstallments()
    {
        return $this->container['installments'];
    }

    /**
     * Sets installments
     *
     * @param \Paqtcom\Simplicate\Model\Installment[] $installments installments
     *
     * @return $this
     */
    public function setInstallments($installments)
    {
        $this->container['installments'] = $installments;

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
     * Gets budget_financial_hours
     *
     * @return string
     */
    public function getBudgetFinancialHours()
    {
        return $this->container['budget_financial_hours'];
    }

    /**
     * Sets budget_financial_hours
     *
     * @param string $budget_financial_hours budget_financial_hours
     *
     * @return $this
     */
    public function setBudgetFinancialHours($budget_financial_hours)
    {
        $this->container['budget_financial_hours'] = $budget_financial_hours;

        return $this;
    }

    /**
     * Gets write_hours_start_date
     *
     * @return string
     */
    public function getWriteHoursStartDate()
    {
        return $this->container['write_hours_start_date'];
    }

    /**
     * Sets write_hours_start_date
     *
     * @param string $write_hours_start_date write_hours_start_date
     *
     * @return $this
     */
    public function setWriteHoursStartDate($write_hours_start_date)
    {
        $this->container['write_hours_start_date'] = $write_hours_start_date;

        return $this;
    }

    /**
     * Gets write_hours_end_date
     *
     * @return string
     */
    public function getWriteHoursEndDate()
    {
        return $this->container['write_hours_end_date'];
    }

    /**
     * Sets write_hours_end_date
     *
     * @param string $write_hours_end_date write_hours_end_date
     *
     * @return $this
     */
    public function setWriteHoursEndDate($write_hours_end_date)
    {
        $this->container['write_hours_end_date'] = $write_hours_end_date;

        return $this;
    }

    /**
     * Gets service_number
     *
     * @return string
     */
    public function getServiceNumber()
    {
        return $this->container['service_number'];
    }

    /**
     * Sets service_number
     *
     * @param string $service_number service_number
     *
     * @return $this
     */
    public function setServiceNumber($service_number)
    {
        $this->container['service_number'] = $service_number;

        return $this;
    }

    /**
     * Gets use_in_resource_planner
     *
     * @return bool
     */
    public function getUseInResourcePlanner()
    {
        return $this->container['use_in_resource_planner'];
    }

    /**
     * Sets use_in_resource_planner
     *
     * @param bool $use_in_resource_planner use_in_resource_planner
     *
     * @return $this
     */
    public function setUseInResourcePlanner($use_in_resource_planner)
    {
        $this->container['use_in_resource_planner'] = $use_in_resource_planner;

        return $this;
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
     * Gets subscription_cycle
     *
     * @return string
     */
    public function getSubscriptionCycle()
    {
        return $this->container['subscription_cycle'];
    }

    /**
     * Sets subscription_cycle
     *
     * @param string $subscription_cycle subscription_cycle
     *
     * @return $this
     */
    public function setSubscriptionCycle($subscription_cycle)
    {
        $allowedValues = $this->getSubscriptionCycleAllowableValues();
        if (!is_null($subscription_cycle) && !in_array($subscription_cycle, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'subscription_cycle', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['subscription_cycle'] = $subscription_cycle;

        return $this;
    }

    /**
     * Gets budget
     *
     * @return float
     */
    public function getBudget()
    {
        return $this->container['budget'];
    }

    /**
     * Sets budget
     *
     * @param float $budget budget
     *
     * @return $this
     */
    public function setBudget($budget)
    {
        $this->container['budget'] = $budget;

        return $this;
    }

    /**
     * Gets default_service_id
     *
     * @return string
     */
    public function getDefaultServiceId()
    {
        return $this->container['default_service_id'];
    }

    /**
     * Sets default_service_id
     *
     * @param string $default_service_id default_service_id
     *
     * @return $this
     */
    public function setDefaultServiceId($default_service_id)
    {
        $this->container['default_service_id'] = $default_service_id;

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
     * Gets explanation
     *
     * @return string
     */
    public function getExplanation()
    {
        return $this->container['explanation'];
    }

    /**
     * Sets explanation
     *
     * @param string $explanation explanation
     *
     * @return $this
     */
    public function setExplanation($explanation)
    {
        $this->container['explanation'] = $explanation;

        return $this;
    }

    /**
     * Gets invoice_method
     *
     * @return string
     */
    public function getInvoiceMethod()
    {
        return $this->container['invoice_method'];
    }

    /**
     * Sets invoice_method
     *
     * @param string $invoice_method invoice_method
     *
     * @return $this
     */
    public function setInvoiceMethod($invoice_method)
    {
        $allowedValues = $this->getInvoiceMethodAllowableValues();
        if (!is_null($invoice_method) && !in_array($invoice_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'invoice_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['invoice_method'] = $invoice_method;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets track_hours
     *
     * @return bool
     */
    public function getTrackHours()
    {
        return $this->container['track_hours'];
    }

    /**
     * Sets track_hours
     *
     * @param bool $track_hours track_hours
     *
     * @return $this
     */
    public function setTrackHours($track_hours)
    {
        $this->container['track_hours'] = $track_hours;

        return $this;
    }

    /**
     * Gets track_cost
     *
     * @return bool
     */
    public function getTrackCost()
    {
        return $this->container['track_cost'];
    }

    /**
     * Sets track_cost
     *
     * @param bool $track_cost track_cost
     *
     * @return $this
     */
    public function setTrackCost($track_cost)
    {
        $this->container['track_cost'] = $track_cost;

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
