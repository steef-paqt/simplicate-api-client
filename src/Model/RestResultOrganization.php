<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultOrganization extends AbstractRestResult
{
    /**
     * @var GetOrganization
     */
    protected $data;

    /**
     * @return GetOrganization
     */
    public function getData(): GetOrganization
    {
        return $this->data;
    }

    /**
     * @param GetOrganization $data
     *
     * @return self
     */
    public function setData(GetOrganization $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
