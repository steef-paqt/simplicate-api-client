<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultJournal extends AbstractRestResult
{
    /**
     * @var Journal
     */
    protected $data;

    /**
     * @return Journal
     */
    public function getData(): Journal
    {
        return $this->data;
    }

    /**
     * @param Journal $data
     *
     * @return self
     */
    public function setData(Journal $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
