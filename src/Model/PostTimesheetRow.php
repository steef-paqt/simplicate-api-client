<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class PostTimesheetRow extends AbstractModel
{
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
