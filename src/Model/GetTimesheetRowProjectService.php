<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class GetTimesheetRowProjectService
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     *
     *
     * @var string
     */
    protected $id;
    /**
     *
     *
     * @var string
     */
    protected $name;
    /**
     *
     *
     * @var string
     */
    protected $startDate;
    /**
     *
     *
     * @var string
     */
    protected $untilDate;
    /**
     *
     *
     * @var string
     */
    protected $purchaseStartDate;
    /**
     *
     *
     * @var string
     */
    protected $purchaseEndDate;

    /**
     *
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     *
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     *
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     *
     *
     * @param string $startDate
     *
     * @return self
     */
    public function setStartDate(string $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getUntilDate(): string
    {
        return $this->untilDate;
    }

    /**
     *
     *
     * @param string $untilDate
     *
     * @return self
     */
    public function setUntilDate(string $untilDate): self
    {
        $this->initialized['untilDate'] = true;
        $this->untilDate = $untilDate;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getPurchaseStartDate(): string
    {
        return $this->purchaseStartDate;
    }

    /**
     *
     *
     * @param string $purchaseStartDate
     *
     * @return self
     */
    public function setPurchaseStartDate(string $purchaseStartDate): self
    {
        $this->initialized['purchaseStartDate'] = true;
        $this->purchaseStartDate = $purchaseStartDate;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getPurchaseEndDate(): string
    {
        return $this->purchaseEndDate;
    }

    /**
     *
     *
     * @param string $purchaseEndDate
     *
     * @return self
     */
    public function setPurchaseEndDate(string $purchaseEndDate): self
    {
        $this->initialized['purchaseEndDate'] = true;
        $this->purchaseEndDate = $purchaseEndDate;

        return $this;
    }
}
