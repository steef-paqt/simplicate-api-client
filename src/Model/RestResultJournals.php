<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultJournals extends AbstractRestResult
{
    /**
     * @var Journal[]
     */
    protected $data;

    /**
     * @return Journal[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Journal[] $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
