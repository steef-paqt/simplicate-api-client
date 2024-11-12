<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class Task extends AbstractModel
{
    /**
     * @var string
     */
    protected $status;

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }
}
