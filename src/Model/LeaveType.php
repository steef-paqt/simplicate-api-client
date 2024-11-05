<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class LeaveType
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
    protected $label;
    /**
     * @var bool
     */
    protected $blocked;
    /**
     * @var string
     */
    protected $color;
    /**
     * @var bool
     */
    protected $affectsBalance;

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;

        return $this;
    }

    /**
     * @return bool
     */
    public function getBlocked(): bool
    {
        return $this->blocked;
    }

    /**
     * @param bool $blocked
     *
     * @return self
     */
    public function setBlocked(bool $blocked): self
    {
        $this->initialized['blocked'] = true;
        $this->blocked = $blocked;

        return $this;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     *
     * @return self
     */
    public function setColor(string $color): self
    {
        $this->initialized['color'] = true;
        $this->color = $color;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAffectsBalance(): bool
    {
        return $this->affectsBalance;
    }

    /**
     * @param bool $affectsBalance
     *
     * @return self
     */
    public function setAffectsBalance(bool $affectsBalance): self
    {
        $this->initialized['affectsBalance'] = true;
        $this->affectsBalance = $affectsBalance;

        return $this;
    }
}
