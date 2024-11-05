<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class GetMyOrganizationProfileSimple
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $id;
    /**
     * @var GetOrganizationSimple
     */
    protected $organization;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * @return GetOrganizationSimple
     */
    public function getOrganization(): GetOrganizationSimple
    {
        return $this->organization;
    }

    /**
     * @param GetOrganizationSimple $organization
     *
     * @return self
     */
    public function setOrganization(GetOrganizationSimple $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }
}
