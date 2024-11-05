<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class BaseHours
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
    protected $source;
    /**
     *
     *
     * @var string
     */
    protected $note;
    /**
     *
     *
     * @var string
     */
    protected $startDate;

    /**
     *
     *
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     *
     *
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
     *
     *
     * @return string
     */
    public function getNote(): string
    {
        return $this->note;
    }

    /**
     *
     *
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
}
