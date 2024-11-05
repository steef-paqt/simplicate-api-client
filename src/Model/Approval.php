<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class Approval
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
    protected $date;

    /**
     *
     *
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     *
     *
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
