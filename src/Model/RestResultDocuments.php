<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultDocuments extends AbstractRestResult
{
    /**
     * @var GetDocument[]
     */
    protected $data;

    /**
     * @return GetDocument[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetDocument[] $data
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
