<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultPropositions extends AbstractRestResult
{
    /**
     * @var GetProposition[]
     */
    protected $data;

    /**
     * @return GetProposition[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetProposition[] $data
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
