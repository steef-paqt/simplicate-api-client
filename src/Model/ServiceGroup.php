<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class ServiceGroup extends AbstractModel
{
    /**
     * @var string
     */
    protected $label;

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;

        return $this;
    }
}
