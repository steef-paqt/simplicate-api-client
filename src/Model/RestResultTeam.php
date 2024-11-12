<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultTeam extends AbstractRestResult
{
    /**
     * @var Team
     */
    protected $data;

    /**
     * @return Team
     */
    public function getData(): Team
    {
        return $this->data;
    }

    /**
     * @param Team $data
     *
     * @return self
     */
    public function setData(Team $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
