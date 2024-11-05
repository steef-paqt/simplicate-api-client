<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class Right
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
    protected $moduleKey;
    /**
     * @var string
     */
    protected $moduleLabel;
    /**
     * @var string
     */
    protected $rightKey;
    /**
     * @var string
     */
    protected $rightLabel;
    /**
     * @var string
     */
    protected $rightsgroupLabel;

    /**
     * @return string
     */
    public function getModuleKey(): string
    {
        return $this->moduleKey;
    }

    /**
     * @param string $moduleKey
     *
     * @return self
     */
    public function setModuleKey(string $moduleKey): self
    {
        $this->initialized['moduleKey'] = true;
        $this->moduleKey = $moduleKey;

        return $this;
    }

    /**
     * @return string
     */
    public function getModuleLabel(): string
    {
        return $this->moduleLabel;
    }

    /**
     * @param string $moduleLabel
     *
     * @return self
     */
    public function setModuleLabel(string $moduleLabel): self
    {
        $this->initialized['moduleLabel'] = true;
        $this->moduleLabel = $moduleLabel;

        return $this;
    }

    /**
     * @return string
     */
    public function getRightKey(): string
    {
        return $this->rightKey;
    }

    /**
     * @param string $rightKey
     *
     * @return self
     */
    public function setRightKey(string $rightKey): self
    {
        $this->initialized['rightKey'] = true;
        $this->rightKey = $rightKey;

        return $this;
    }

    /**
     * @return string
     */
    public function getRightLabel(): string
    {
        return $this->rightLabel;
    }

    /**
     * @param string $rightLabel
     *
     * @return self
     */
    public function setRightLabel(string $rightLabel): self
    {
        $this->initialized['rightLabel'] = true;
        $this->rightLabel = $rightLabel;

        return $this;
    }

    /**
     * @return string
     */
    public function getRightsgroupLabel(): string
    {
        return $this->rightsgroupLabel;
    }

    /**
     * @param string $rightsgroupLabel
     *
     * @return self
     */
    public function setRightsgroupLabel(string $rightsgroupLabel): self
    {
        $this->initialized['rightsgroupLabel'] = true;
        $this->rightsgroupLabel = $rightsgroupLabel;

        return $this;
    }
}
