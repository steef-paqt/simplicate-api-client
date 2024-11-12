<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultOrganizationSizes extends AbstractRestResult
{
    /**
     * @var OrganizationSize[]
     */
    protected $data;

    /**
     * @return OrganizationSize[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param OrganizationSize[] $data
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
