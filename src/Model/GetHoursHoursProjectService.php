<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class GetHoursHoursProjectService
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
     * @var string
     */
    protected $id = 'service:abc123';
    /**
     * @var string
     */
    protected $name;
    /**
     * Y-m-d, eg. 2020-01-01
     *
     * @var string
     */
    protected $startDate = '2020-01-01';
    /**
     * Y-m-d, eg. 2020-01-01
     *
     * @var string
     */
    protected $untilDate = '2020-01-01';
    /**
     * @var string
     */
    protected $defaultServiceId = 'defaultservice:abc123';
    /**
     * @var string
     */
    protected $revenueGroupId = 'revenuegroup:abc123';

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
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
     * Y-m-d, eg. 2020-01-01
     *
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * Y-m-d, eg. 2020-01-01
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
     * Y-m-d, eg. 2020-01-01
     *
     * @return string
     */
    public function getUntilDate(): string
    {
        return $this->untilDate;
    }

    /**
     * Y-m-d, eg. 2020-01-01
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
     * @return string
     */
    public function getDefaultServiceId(): string
    {
        return $this->defaultServiceId;
    }

    /**
     * @param string $defaultServiceId
     *
     * @return self
     */
    public function setDefaultServiceId(string $defaultServiceId): self
    {
        $this->initialized['defaultServiceId'] = true;
        $this->defaultServiceId = $defaultServiceId;

        return $this;
    }

    /**
     * @return string
     */
    public function getRevenueGroupId(): string
    {
        return $this->revenueGroupId;
    }

    /**
     * @param string $revenueGroupId
     *
     * @return self
     */
    public function setRevenueGroupId(string $revenueGroupId): self
    {
        $this->initialized['revenueGroupId'] = true;
        $this->revenueGroupId = $revenueGroupId;

        return $this;
    }
}
