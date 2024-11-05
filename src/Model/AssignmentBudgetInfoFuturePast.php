<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class AssignmentBudgetInfoFuturePast
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
    protected $past = '-PT1H30M';
    /**
     * @var string
     */
    protected $future = 'PT15M';

    /**
     * @return string
     */
    public function getPast(): string
    {
        return $this->past;
    }

    /**
     * @param string $past
     *
     * @return self
     */
    public function setPast(string $past): self
    {
        $this->initialized['past'] = true;
        $this->past = $past;

        return $this;
    }

    /**
     * @return string
     */
    public function getFuture(): string
    {
        return $this->future;
    }

    /**
     * @param string $future
     *
     * @return self
     */
    public function setFuture(string $future): self
    {
        $this->initialized['future'] = true;
        $this->future = $future;

        return $this;
    }
}
