<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class PutMileage extends AbstractModel
{
    /**
     * @var string
     */
    protected $approvalstatusId;
    /**
     * @var float
     */
    protected $mileage;
    /**
     * @var string
     */
    protected $relatedHoursId;
    /**
     * @var string
     */
    protected $source;
    /**
     * @var string
     */
    protected $note;
    /**
     * @var string
     */
    protected $startDate;

    /**
     * @return string
     */
    public function getApprovalstatusId(): string
    {
        return $this->approvalstatusId;
    }

    /**
     * @param string $approvalstatusId
     *
     * @return self
     */
    public function setApprovalstatusId(string $approvalstatusId): self
    {
        $this->initialized['approvalstatusId'] = true;
        $this->approvalstatusId = $approvalstatusId;

        return $this;
    }

    /**
     * @return float
     */
    public function getMileage(): float
    {
        return $this->mileage;
    }

    /**
     * @param float $mileage
     *
     * @return self
     */
    public function setMileage(float $mileage): self
    {
        $this->initialized['mileage'] = true;
        $this->mileage = $mileage;

        return $this;
    }

    /**
     * @return string
     */
    public function getRelatedHoursId(): string
    {
        return $this->relatedHoursId;
    }

    /**
     * @param string $relatedHoursId
     *
     * @return self
     */
    public function setRelatedHoursId(string $relatedHoursId): self
    {
        $this->initialized['relatedHoursId'] = true;
        $this->relatedHoursId = $relatedHoursId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source): self
    {
        $this->initialized['source'] = true;
        $this->source = $source;

        return $this;
    }

    /**
     * @return string
     */
    public function getNote(): string
    {
        return $this->note;
    }

    /**
     * @param string $note
     *
     * @return self
     */
    public function setNote(string $note): self
    {
        $this->initialized['note'] = true;
        $this->note = $note;

        return $this;
    }

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
}
