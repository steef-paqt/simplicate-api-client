<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultTeams extends AbstractRestResult
{
    /**
     * @var Team[]
     */
    protected $data;

    /**
     * @return Team[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Team[] $data
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
