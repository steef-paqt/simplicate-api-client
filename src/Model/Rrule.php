<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class Rrule
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
    protected $dtstart;
    /**
     * @var int
     */
    protected $freq;
    /**
     * @var string
     */
    protected $until;
    /**
     * @var int
     */
    protected $count;
    /**
     * @var int
     */
    protected $interval;
    /**
     * @var string
     */
    protected $wkst;
    /**
     * @var string
     */
    protected $byday;
    /**
     * @var string
     */
    protected $bysetpos;

    /**
     * @return string
     */
    public function getDtstart(): string
    {
        return $this->dtstart;
    }

    /**
     * @param string $dtstart
     *
     * @return self
     */
    public function setDtstart(string $dtstart): self
    {
        $this->initialized['dtstart'] = true;
        $this->dtstart = $dtstart;

        return $this;
    }

    /**
     * @return int
     */
    public function getFreq(): int
    {
        return $this->freq;
    }

    /**
     * @param int $freq
     *
     * @return self
     */
    public function setFreq(int $freq): self
    {
        $this->initialized['freq'] = true;
        $this->freq = $freq;

        return $this;
    }

    /**
     * @return string
     */
    public function getUntil(): string
    {
        return $this->until;
    }

    /**
     * @param string $until
     *
     * @return self
     */
    public function setUntil(string $until): self
    {
        $this->initialized['until'] = true;
        $this->until = $until;

        return $this;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
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
     * @return int
     */
    public function getInterval(): int
    {
        return $this->interval;
    }

    /**
     * @param int $interval
     *
     * @return self
     */
    public function setInterval(int $interval): self
    {
        $this->initialized['interval'] = true;
        $this->interval = $interval;

        return $this;
    }

    /**
     * @return string
     */
    public function getWkst(): string
    {
        return $this->wkst;
    }

    /**
     * @param string $wkst
     *
     * @return self
     */
    public function setWkst(string $wkst): self
    {
        $this->initialized['wkst'] = true;
        $this->wkst = $wkst;

        return $this;
    }

    /**
     * @return string
     */
    public function getByday(): string
    {
        return $this->byday;
    }

    /**
     * @param string $byday
     *
     * @return self
     */
    public function setByday(string $byday): self
    {
        $this->initialized['byday'] = true;
        $this->byday = $byday;

        return $this;
    }

    /**
     * @return string
     */
    public function getBysetpos(): string
    {
        return $this->bysetpos;
    }

    /**
     * @param string $bysetpos
     *
     * @return self
     */
    public function setBysetpos(string $bysetpos): self
    {
        $this->initialized['bysetpos'] = true;
        $this->bysetpos = $bysetpos;

        return $this;
    }
}
