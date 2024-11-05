<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class GetSimpleDefaultTask
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
     * @var bool
     */
    protected $description;

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
     * @return bool
     */
    public function getDescription(): bool
    {
        return $this->description;
    }

    /**
     *
     *
     * @param bool $description
     *
     * @return self
     */
    public function setDescription(bool $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }
}
