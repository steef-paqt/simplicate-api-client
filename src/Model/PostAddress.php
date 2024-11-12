<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class PostAddress extends AbstractModel
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $line1;
    /**
     * @var string
     */
    protected $line2;
    /**
     * @var string
     */
    protected $postalCode;
    /**
     * @var string
     */
    protected $province;
    /**
     * @var string
     */
    protected $locality;
    /**
     * @var string
     */
    protected $countryCode;
    /**
     * @var string
     */
    protected $countryId;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getLine1(): string
    {
        return $this->line1;
    }

    /**
     * @param string $line1
     *
     * @return self
     */
    public function setLine1(string $line1): self
    {
        $this->initialized['line1'] = true;
        $this->line1 = $line1;

        return $this;
    }

    /**
     * @return string
     */
    public function getLine2(): string
    {
        return $this->line2;
    }

    /**
     * @param string $line2
     *
     * @return self
     */
    public function setLine2(string $line2): self
    {
        $this->initialized['line2'] = true;
        $this->line2 = $line2;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     *
     * @return self
     */
    public function setPostalCode(string $postalCode): self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getProvince(): string
    {
        return $this->province;
    }

    /**
     * @param string $province
     *
     * @return self
     */
    public function setProvince(string $province): self
    {
        $this->initialized['province'] = true;
        $this->province = $province;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocality(): string
    {
        return $this->locality;
    }

    /**
     * @param string $locality
     *
     * @return self
     */
    public function setLocality(string $locality): self
    {
        $this->initialized['locality'] = true;
        $this->locality = $locality;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountryId(): string
    {
        return $this->countryId;
    }

    /**
     * @param string $countryId
     *
     * @return self
     */
    public function setCountryId(string $countryId): self
    {
        $this->initialized['countryId'] = true;
        $this->countryId = $countryId;

        return $this;
    }
}
