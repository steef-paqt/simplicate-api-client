<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class Approval extends AbstractModel
{
    /**
     * @var string
     */
    protected $date;

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
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
