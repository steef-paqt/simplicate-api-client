<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class Recurrence
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
     * @var Rrule
     */
    protected $rrule;
    /**
     * @var string
     */
    protected $update;

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
     * @return Rrule
     */
    public function getRrule(): Rrule
    {
        return $this->rrule;
    }

    /**
     * @param Rrule $rrule
     *
     * @return self
     */
    public function setRrule(Rrule $rrule): self
    {
        $this->initialized['rrule'] = true;
        $this->rrule = $rrule;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdate(): string
    {
        return $this->update;
    }

    /**
     * @param string $update
     *
     * @return self
     */
    public function setUpdate(string $update): self
    {
        $this->initialized['update'] = true;
        $this->update = $update;

        return $this;
    }
}
