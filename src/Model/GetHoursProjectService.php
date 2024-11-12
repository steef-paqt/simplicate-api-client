<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class GetHoursProjectService extends AbstractModel
{
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
     * Y-m-d, eg. 2020-01-01
     *
     * @var string
     */
    protected $purchaseStartDate = '2020-01-01';
    /**
     * Y-m-d, eg. 2020-01-01
     *
     * @var string
     */
    protected $purchaseEndDate = '2020-01-01';

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
     * Y-m-d, eg. 2020-01-01
     *
     * @return string
     */
    public function getPurchaseStartDate(): string
    {
        return $this->purchaseStartDate;
    }

    /**
     * Y-m-d, eg. 2020-01-01
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
     * Y-m-d, eg. 2020-01-01
     *
     * @return string
     */
    public function getPurchaseEndDate(): string
    {
        return $this->purchaseEndDate;
    }

    /**
     * Y-m-d, eg. 2020-01-01
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
