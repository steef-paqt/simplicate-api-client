<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultMyOrganizationProfiles extends AbstractRestResult
{
    /**
     * @var MyOrganizationProfile[]
     */
    protected $data;

    /**
     * @return MyOrganizationProfile[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param MyOrganizationProfile[] $data
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
