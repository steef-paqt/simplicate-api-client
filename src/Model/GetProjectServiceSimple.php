<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class GetProjectServiceSimple
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
     *
     *
     * @var string
     */
    protected $id;
    /**
     *
     *
     * @var string
     */
    protected $name;
    /**
     *
     *
     * @var string
     */
    protected $defaultServiceId;
    /**
     *
     *
     * @var string
     */
    protected $revenueGroupId;
    /**
     *
     *
     * @var bool
     */
    protected $useInResourcePlanner;

    /**
     *
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     *
     *
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
     *
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     *
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getDefaultServiceId(): string
    {
        return $this->defaultServiceId;
    }

    /**
     *
     *
     * @param string $defaultServiceId
     *
     * @return self
     */
    public function setDefaultServiceId(string $defaultServiceId): self
    {
        $this->initialized['defaultServiceId'] = true;
        $this->defaultServiceId = $defaultServiceId;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getRevenueGroupId(): string
    {
        return $this->revenueGroupId;
    }

    /**
     *
     *
     * @param string $revenueGroupId
     *
     * @return self
     */
    public function setRevenueGroupId(string $revenueGroupId): self
    {
        $this->initialized['revenueGroupId'] = true;
        $this->revenueGroupId = $revenueGroupId;

        return $this;
    }

    /**
     *
     *
     * @return bool
     */
    public function getUseInResourcePlanner(): bool
    {
        return $this->useInResourcePlanner;
    }

    /**
     *
     *
     * @param bool $useInResourcePlanner
     *
     * @return self
     */
    public function setUseInResourcePlanner(bool $useInResourcePlanner): self
    {
        $this->initialized['useInResourcePlanner'] = true;
        $this->useInResourcePlanner = $useInResourcePlanner;

        return $this;
    }
}
