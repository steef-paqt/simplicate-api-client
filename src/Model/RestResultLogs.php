<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultLogs extends AbstractRestResult
{
    /**
     * @var Log[]
     */
    protected $data;

    /**
     * @return Log[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Log[] $data
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
