<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class PostEmployeeStatusFk extends AbstractModel
{
    /**
     * @var string
     */
    protected $id = 'employeestatus:abc';

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
}
