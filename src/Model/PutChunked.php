<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class PutChunked
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
     * Base64 encoded string of data
     *
     * @var string
     */
    protected $chunk;
    /**
     * Optional. md5 checksum of the 'chunk' property -- can be used to validate that the API has received the right data
     *
     * @var string
     */
    protected $checksum;

    /**
     * Base64 encoded string of data
     *
     * @return string
     */
    public function getChunk(): string
    {
        return $this->chunk;
    }

    /**
     * Base64 encoded string of data
     *
     * @param string $chunk
     *
     * @return self
     */
    public function setChunk(string $chunk): self
    {
        $this->initialized['chunk'] = true;
        $this->chunk = $chunk;

        return $this;
    }

    /**
     * Optional. md5 checksum of the 'chunk' property -- can be used to validate that the API has received the right data
     *
     * @return string
     */
    public function getChecksum(): string
    {
        return $this->checksum;
    }

    /**
     * Optional. md5 checksum of the 'chunk' property -- can be used to validate that the API has received the right data
     *
     * @param string $checksum
     *
     * @return self
     */
    public function setChecksum(string $checksum): self
    {
        $this->initialized['checksum'] = true;
        $this->checksum = $checksum;

        return $this;
    }
}
