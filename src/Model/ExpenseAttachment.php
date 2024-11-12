<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class ExpenseAttachment extends AbstractModel
{
    /**
     * @var string
     */
    protected $fileHash;
    /**
     * @var string
     */
    protected $fileName;

    /**
     * @return string
     */
    public function getFileHash(): string
    {
        return $this->fileHash;
    }

    /**
     * @param string $fileHash
     *
     * @return self
     */
    public function setFileHash(string $fileHash): self
    {
        $this->initialized['fileHash'] = true;
        $this->fileHash = $fileHash;

        return $this;
    }

    /**
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     *
     * @return self
     */
    public function setFileName(string $fileName): self
    {
        $this->initialized['fileName'] = true;
        $this->fileName = $fileName;

        return $this;
    }
}
