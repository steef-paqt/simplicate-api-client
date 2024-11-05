<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class IsSatisfied
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
    protected $value;
    /**
     *
     *
     * @var IsSatisfiedReason
     */
    protected $reason;

    /**
     *
     *
     * @return bool
     */
    public function getValue(): bool
    {
        return $this->value;
    }

    /**
     *
     *
     * @param bool $value
     *
     * @return self
     */
    public function setValue(bool $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }

    /**
     *
     *
     * @return IsSatisfiedReason
     */
    public function getReason(): IsSatisfiedReason
    {
        return $this->reason;
    }

    /**
     *
     *
     * @param IsSatisfiedReason $reason
     *
     * @return self
     */
    public function setReason(IsSatisfiedReason $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;

        return $this;
    }
}
