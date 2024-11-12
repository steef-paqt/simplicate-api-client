<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultOrganizations extends AbstractRestResult
{
    /**
     * @var GetOrganization[]
     */
    protected $data;

    /**
     * @return GetOrganization[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetOrganization[] $data
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
