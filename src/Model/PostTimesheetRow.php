<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class PostTimesheetRow
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
    protected $missing;

    /**
     * @return string
     */
    public function getMissing(): string
    {
        return $this->missing;
    }

    /**
     * @param string $missing
     *
     * @return self
     */
    public function setMissing(string $missing): self
    {
        $this->initialized['missing'] = true;
        $this->missing = $missing;

        return $this;
    }
}
