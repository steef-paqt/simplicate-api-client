<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class AvatarPublic
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
    protected $fullName;
    /**
     *
     *
     * @var string
     */
    protected $urlSmall;
    /**
     *
     *
     * @var string
     */
    protected $urlLarge;
    /**
     *
     *
     * @var string
     */
    protected $initials;
    /**
     *
     *
     * @var string
     */
    protected $color;

    /**
     *
     *
     * @return string
     */
    public function getFullName(): string
    {
        return $this->fullName;
    }

    /**
     *
     *
     * @param string $fullName
     *
     * @return self
     */
    public function setFullName(string $fullName): self
    {
        $this->initialized['fullName'] = true;
        $this->fullName = $fullName;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getUrlSmall(): string
    {
        return $this->urlSmall;
    }

    /**
     *
     *
     * @param string $urlSmall
     *
     * @return self
     */
    public function setUrlSmall(string $urlSmall): self
    {
        $this->initialized['urlSmall'] = true;
        $this->urlSmall = $urlSmall;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getUrlLarge(): string
    {
        return $this->urlLarge;
    }

    /**
     *
     *
     * @param string $urlLarge
     *
     * @return self
     */
    public function setUrlLarge(string $urlLarge): self
    {
        $this->initialized['urlLarge'] = true;
        $this->urlLarge = $urlLarge;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getInitials(): string
    {
        return $this->initials;
    }

    /**
     *
     *
     * @param string $initials
     *
     * @return self
     */
    public function setInitials(string $initials): self
    {
        $this->initialized['initials'] = true;
        $this->initials = $initials;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     *
     *
     * @param string $color
     *
     * @return self
     */
    public function setColor(string $color): self
    {
        $this->initialized['color'] = true;
        $this->color = $color;

        return $this;
    }
}
