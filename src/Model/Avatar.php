<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class Avatar extends AbstractModel
{
    /**
     * @var string
     */
    protected $urlSmall;
    /**
     * @var string
     */
    protected $urlLarge;
    /**
     * @var string
     */
    protected $initials;
    /**
     * @var string
     */
    protected $color;

    /**
     * @return string
     */
    public function getUrlSmall(): string
    {
        return $this->urlSmall;
    }

    /**
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
     * @return string
     */
    public function getUrlLarge(): string
    {
        return $this->urlLarge;
    }

    /**
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
     * @return string
     */
    public function getInitials(): string
    {
        return $this->initials;
    }

    /**
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
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
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
