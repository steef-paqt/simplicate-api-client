<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class Comment
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
    protected $id;
    /**
     *
     *
     * @var string
     */
    protected $message;
    /**
     *
     *
     * @var GetEmployeeSimple
     */
    protected $employee;
    /**
     *
     *
     * @var GetDocument[]
     */
    protected $attachments;

    /**
     *
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     *
     *
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
     *
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     *
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }

    /**
     *
     *
     * @return GetEmployeeSimple
     */
    public function getEmployee(): GetEmployeeSimple
    {
        return $this->employee;
    }

    /**
     *
     *
     * @param GetEmployeeSimple $employee
     *
     * @return self
     */
    public function setEmployee(GetEmployeeSimple $employee): self
    {
        $this->initialized['employee'] = true;
        $this->employee = $employee;

        return $this;
    }

    /**
     *
     *
     * @return GetDocument[]
     */
    public function getAttachments(): array
    {
        return $this->attachments;
    }

    /**
     *
     *
     * @param GetDocument[] $attachments
     *
     * @return self
     */
    public function setAttachments(array $attachments): self
    {
        $this->initialized['attachments'] = true;
        $this->attachments = $attachments;

        return $this;
    }
}
