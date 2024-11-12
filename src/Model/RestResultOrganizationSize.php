<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultOrganizationSize extends AbstractRestResult
{
    /**
     * @var OrganizationSize
     */
    protected $data;

    /**
     * @return OrganizationSize
     */
    public function getData(): OrganizationSize
    {
        return $this->data;
    }

    /**
     * @param OrganizationSize $data
     *
     * @return self
     */
    public function setData(OrganizationSize $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
