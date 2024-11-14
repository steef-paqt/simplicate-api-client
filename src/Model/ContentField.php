<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class ContentField extends AbstractModel
{
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $value;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return self
     */
    public function setValue($value): self
    {
        $this->initialized['value'] = true;
        $this->value = (string) $value;

        return $this;
    }
}
