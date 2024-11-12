<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class ProjectAssignmentDeleteResultRest extends AbstractModel
{
    /**
     * @var mixed
     */
    protected $assignmentId;
    /**
     * @var bool
     */
    protected $isDeleted;

    /**
     * @return mixed
     */
    public function getAssignmentId()
    {
        return $this->assignmentId;
    }

    /**
     * @param mixed $assignmentId
     *
     * @return self
     */
    public function setAssignmentId($assignmentId): self
    {
        $this->initialized['assignmentId'] = true;
        $this->assignmentId = $assignmentId;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsDeleted(): bool
    {
        return $this->isDeleted;
    }

    /**
     * @param bool $isDeleted
     *
     * @return self
     */
    public function setIsDeleted(bool $isDeleted): self
    {
        $this->initialized['isDeleted'] = true;
        $this->isDeleted = $isDeleted;

        return $this;
    }
}
