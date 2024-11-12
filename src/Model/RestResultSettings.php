<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultSettings extends AbstractRestResult
{
    /**
     * @var Setting[]
     */
    protected $data;

    /**
     * @return Setting[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Setting[] $data
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
