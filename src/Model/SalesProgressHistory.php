<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class SalesProgressHistory
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
    protected $id;
    /**
     * @var mixed
     */
    protected $sales;
    /**
     * @var string
     */
    protected $salesId;
    /**
     * @var SalesProgress
     */
    protected $fromSalesProgress;
    /**
     * @var string
     */
    protected $fromSalesProgressId;
    /**
     * @var SalesProgress
     */
    protected $toSalesProgress;
    /**
     * @var string
     */
    protected $toSalesProgressId;
    /**
     * @var string
     */
    protected $date;

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
     * @return mixed
     */
    public function getSales()
    {
        return $this->sales;
    }

    /**
     * @param mixed $sales
     *
     * @return self
     */
    public function setSales($sales): self
    {
        $this->initialized['sales'] = true;
        $this->sales = $sales;

        return $this;
    }

    /**
     * @return string
     */
    public function getSalesId(): string
    {
        return $this->salesId;
    }

    /**
     * @param string $salesId
     *
     * @return self
     */
    public function setSalesId(string $salesId): self
    {
        $this->initialized['salesId'] = true;
        $this->salesId = $salesId;

        return $this;
    }

    /**
     * @return SalesProgress
     */
    public function getFromSalesProgress(): SalesProgress
    {
        return $this->fromSalesProgress;
    }

    /**
     * @param SalesProgress $fromSalesProgress
     *
     * @return self
     */
    public function setFromSalesProgress(SalesProgress $fromSalesProgress): self
    {
        $this->initialized['fromSalesProgress'] = true;
        $this->fromSalesProgress = $fromSalesProgress;

        return $this;
    }

    /**
     * @return string
     */
    public function getFromSalesProgressId(): string
    {
        return $this->fromSalesProgressId;
    }

    /**
     * @param string $fromSalesProgressId
     *
     * @return self
     */
    public function setFromSalesProgressId(string $fromSalesProgressId): self
    {
        $this->initialized['fromSalesProgressId'] = true;
        $this->fromSalesProgressId = $fromSalesProgressId;

        return $this;
    }

    /**
     * @return SalesProgress
     */
    public function getToSalesProgress(): SalesProgress
    {
        return $this->toSalesProgress;
    }

    /**
     * @param SalesProgress $toSalesProgress
     *
     * @return self
     */
    public function setToSalesProgress(SalesProgress $toSalesProgress): self
    {
        $this->initialized['toSalesProgress'] = true;
        $this->toSalesProgress = $toSalesProgress;

        return $this;
    }

    /**
     * @return string
     */
    public function getToSalesProgressId(): string
    {
        return $this->toSalesProgressId;
    }

    /**
     * @param string $toSalesProgressId
     *
     * @return self
     */
    public function setToSalesProgressId(string $toSalesProgressId): self
    {
        $this->initialized['toSalesProgressId'] = true;
        $this->toSalesProgressId = $toSalesProgressId;

        return $this;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }
}
