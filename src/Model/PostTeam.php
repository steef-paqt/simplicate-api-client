<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class PostTeam extends AbstractModel
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var bool
     */
    protected $value;

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
     * @return bool
     */
    public function getValue(): bool
    {
        return $this->value;
    }

    /**
     * @param bool $value
     *
     * @return self
     */
    public function setValue(bool $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
