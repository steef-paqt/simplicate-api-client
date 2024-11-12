<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class GetReminderSet extends AbstractModel
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var ReminderSetTemplate[]
     */
    protected $templates;
    /**
     * @var string
     */
    protected $label;
    /**
     * @var bool
     */
    protected $disabled;

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
     * @return ReminderSetTemplate[]
     */
    public function getTemplates(): array
    {
        return $this->templates;
    }

    /**
     * @param ReminderSetTemplate[] $templates
     *
     * @return self
     */
    public function setTemplates(array $templates): self
    {
        $this->initialized['templates'] = true;
        $this->templates = $templates;

        return $this;
    }

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

    /**
     * @return bool
     */
    public function getDisabled(): bool
    {
        return $this->disabled;
    }

    /**
     * @param bool $disabled
     *
     * @return self
     */
    public function setDisabled(bool $disabled): self
    {
        $this->initialized['disabled'] = true;
        $this->disabled = $disabled;

        return $this;
    }
}
