<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultMyOrganizationProfile extends AbstractRestResult
{
    /**
     * @var MyOrganizationProfile
     */
    protected $data;

    /**
     * @return MyOrganizationProfile
     */
    public function getData(): MyOrganizationProfile
    {
        return $this->data;
    }

    /**
     * @param MyOrganizationProfile $data
     *
     * @return self
     */
    public function setData(MyOrganizationProfile $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
