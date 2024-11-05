<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class GetProposition
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
     * @var float
     */
    protected $totalHours;
    /**
     * @var float
     */
    protected $totalMileage;
    /**
     * @var float
     */
    protected $totalFixed;
    /**
     * @var float
     */
    protected $totalTerms;
    /**
     * @var float
     */
    protected $totalPurchase;
    /**
     * @var float
     */
    protected $totalAdvanceDeposit;
    /**
     * @var float
     */
    protected $totalFuture;
    /**
     * @var string
     */
    protected $simplicateUrl;
    /**
     * @var GetProjectSimple
     */
    protected $project;
    /**
     * @var string
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $updatedAt;

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
     * @return float
     */
    public function getTotalHours(): float
    {
        return $this->totalHours;
    }

    /**
     * @param float $totalHours
     *
     * @return self
     */
    public function setTotalHours(float $totalHours): self
    {
        $this->initialized['totalHours'] = true;
        $this->totalHours = $totalHours;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalMileage(): float
    {
        return $this->totalMileage;
    }

    /**
     * @param float $totalMileage
     *
     * @return self
     */
    public function setTotalMileage(float $totalMileage): self
    {
        $this->initialized['totalMileage'] = true;
        $this->totalMileage = $totalMileage;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalFixed(): float
    {
        return $this->totalFixed;
    }

    /**
     * @param float $totalFixed
     *
     * @return self
     */
    public function setTotalFixed(float $totalFixed): self
    {
        $this->initialized['totalFixed'] = true;
        $this->totalFixed = $totalFixed;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalTerms(): float
    {
        return $this->totalTerms;
    }

    /**
     * @param float $totalTerms
     *
     * @return self
     */
    public function setTotalTerms(float $totalTerms): self
    {
        $this->initialized['totalTerms'] = true;
        $this->totalTerms = $totalTerms;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPurchase(): float
    {
        return $this->totalPurchase;
    }

    /**
     * @param float $totalPurchase
     *
     * @return self
     */
    public function setTotalPurchase(float $totalPurchase): self
    {
        $this->initialized['totalPurchase'] = true;
        $this->totalPurchase = $totalPurchase;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalAdvanceDeposit(): float
    {
        return $this->totalAdvanceDeposit;
    }

    /**
     * @param float $totalAdvanceDeposit
     *
     * @return self
     */
    public function setTotalAdvanceDeposit(float $totalAdvanceDeposit): self
    {
        $this->initialized['totalAdvanceDeposit'] = true;
        $this->totalAdvanceDeposit = $totalAdvanceDeposit;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalFuture(): float
    {
        return $this->totalFuture;
    }

    /**
     * @param float $totalFuture
     *
     * @return self
     */
    public function setTotalFuture(float $totalFuture): self
    {
        $this->initialized['totalFuture'] = true;
        $this->totalFuture = $totalFuture;

        return $this;
    }

    /**
     * @return string
     */
    public function getSimplicateUrl(): string
    {
        return $this->simplicateUrl;
    }

    /**
     * @param string $simplicateUrl
     *
     * @return self
     */
    public function setSimplicateUrl(string $simplicateUrl): self
    {
        $this->initialized['simplicateUrl'] = true;
        $this->simplicateUrl = $simplicateUrl;

        return $this;
    }

    /**
     * @return GetProjectSimple
     */
    public function getProject(): GetProjectSimple
    {
        return $this->project;
    }

    /**
     * @param GetProjectSimple $project
     *
     * @return self
     */
    public function setProject(GetProjectSimple $project): self
    {
        $this->initialized['project'] = true;
        $this->project = $project;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    /**
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
