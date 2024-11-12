<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class Setting extends AbstractModel
{
    /**
     * @var string
     */
    protected $module;
    /**
     * @var mixed[]
     */
    protected $settings;

    /**
     * @return string
     */
    public function getModule(): string
    {
        return $this->module;
    }

    /**
     * @param string $module
     *
     * @return self
     */
    public function setModule(string $module): self
    {
        $this->initialized['module'] = true;
        $this->module = $module;

        return $this;
    }

    /**
     * @return mixed[]
     */
    public function getSettings(): array
    {
        return $this->settings;
    }

    /**
     * @param mixed[] $settings
     *
     * @return self
     */
    public function setSettings(array $settings): self
    {
        $this->initialized['settings'] = true;
        $this->settings = $settings;

        return $this;
    }
}
