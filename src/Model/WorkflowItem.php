<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class WorkflowItem extends AbstractModel
{
    /**
     * @var string
     */
    protected $subject;

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     *
     * @return self
     */
    public function setSubject(string $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;

        return $this;
    }
}
