<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestPutResult extends AbstractRestResult
{
    /**
     * @var mixed[]
     */
    protected $data;

    /**
     * @return mixed
     */
    public function getValue(string $key): mixed
    {
        return $this->data[$key] ?? null;
    }

    /**
     * @return mixed[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
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
