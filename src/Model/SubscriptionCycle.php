<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class SubscriptionCycle extends AbstractModel
{
    /**
     * @var string
     */
    protected $startDate;
    /**
     * @var string
     */
    protected $endDate;
    /**
     * @var bool
     */
    protected $isInvoiced;

    /**
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
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
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     * @param string $endDate
     *
     * @return self
     */
    public function setEndDate(string $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsInvoiced(): bool
    {
        return $this->isInvoiced;
    }

    /**
     * @param bool $isInvoiced
     *
     * @return self
     */
    public function setIsInvoiced(bool $isInvoiced): self
    {
        $this->initialized['isInvoiced'] = true;
        $this->isInvoiced = $isInvoiced;

        return $this;
    }
}
