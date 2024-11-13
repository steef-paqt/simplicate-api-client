<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultTeams extends AbstractRestResult
{
    /**
     * @var GetTeam[]
     */
    protected $data;

    /**
     * @return GetTeam[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetTeam[] $data
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
