<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class EmailAttachment extends AbstractModel
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $filePath;

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
     * @return string
     */
    public function getFilePath(): string
    {
        return $this->filePath;
    }

    /**
     * @param string $filePath
     *
     * @return self
     */
    public function setFilePath(string $filePath): self
    {
        $this->initialized['filePath'] = true;
        $this->filePath = $filePath;

        return $this;
    }
}
