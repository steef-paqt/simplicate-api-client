<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class ReviewByWeekMetaData
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
     * @var bool
     */
    protected $isOutOfDate;
    /**
     *
     *
     * @var int
     */
    protected $count;
    /**
     *
     *
     * @var int
     */
    protected $totalCount;
    /**
     *
     *
     * @var int
     */
    protected $offset;
    /**
     *
     *
     * @var int
     */
    protected $limit;
    /**
     *
     *
     * @var int
     */
    protected $upperLimit;
    /**
     *
     *
     * @var bool
     */
    protected $nocleanup;
    /**
     *
     *
     * @var string
     */
    protected $checksum;

    /**
     *
     *
     * @return bool
     */
    public function getIsOutOfDate(): bool
    {
        return $this->isOutOfDate;
    }

    /**
     *
     *
     * @param bool $isOutOfDate
     *
     * @return self
     */
    public function setIsOutOfDate(bool $isOutOfDate): self
    {
        $this->initialized['isOutOfDate'] = true;
        $this->isOutOfDate = $isOutOfDate;

        return $this;
    }

    /**
     *
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     *
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;

        return $this;
    }

    /**
     *
     *
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     *
     *
     * @param int $totalCount
     *
     * @return self
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;

        return $this;
    }

    /**
     *
     *
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     *
     *
     * @param int $offset
     *
     * @return self
     */
    public function setOffset(int $offset): self
    {
        $this->initialized['offset'] = true;
        $this->offset = $offset;

        return $this;
    }

    /**
     *
     *
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     *
     *
     * @param int $limit
     *
     * @return self
     */
    public function setLimit(int $limit): self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;

        return $this;
    }

    /**
     *
     *
     * @return int
     */
    public function getUpperLimit(): int
    {
        return $this->upperLimit;
    }

    /**
     *
     *
     * @param int $upperLimit
     *
     * @return self
     */
    public function setUpperLimit(int $upperLimit): self
    {
        $this->initialized['upperLimit'] = true;
        $this->upperLimit = $upperLimit;

        return $this;
    }

    /**
     *
     *
     * @return bool
     */
    public function getNocleanup(): bool
    {
        return $this->nocleanup;
    }

    /**
     *
     *
     * @param bool $nocleanup
     *
     * @return self
     */
    public function setNocleanup(bool $nocleanup): self
    {
        $this->initialized['nocleanup'] = true;
        $this->nocleanup = $nocleanup;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getChecksum(): string
    {
        return $this->checksum;
    }

    /**
     *
     *
     * @param string $checksum
     *
     * @return self
     */
    public function setChecksum(string $checksum): self
    {
        $this->initialized['checksum'] = true;
        $this->checksum = $checksum;

        return $this;
    }
}
