<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class PostChunked
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
     * @var string
     */
    protected $fileName;
    /**
     * File size in bytes
     *
     * @var string
     */
    protected $fileSize;

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

    /**
     * File size in bytes
     *
     * @return string
     */
    public function getFileSize(): string
    {
        return $this->fileSize;
    }

    /**
     * File size in bytes
     *
     * @param string $fileSize
     *
     * @return self
     */
    public function setFileSize(string $fileSize): self
    {
        $this->initialized['fileSize'] = true;
        $this->fileSize = $fileSize;

        return $this;
    }
}
