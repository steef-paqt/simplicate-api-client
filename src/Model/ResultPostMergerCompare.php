<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class ResultPostMergerCompare extends AbstractModel
{
    /**
     * @var bool
     */
    protected $isValid;
    /**
     * @var string
     */
    protected $token;
    /**
     * @var string
     */
    protected $message;
    /**
     * @var bool
     */
    protected $swapLock;
    /**
     * @var string
     */
    protected $sourceId;
    /**
     * @var string
     */
    protected $targetId;

    /**
     * @return bool
     */
    public function getIsValid(): bool
    {
        return $this->isValid;
    }

    /**
     * @param bool $isValid
     *
     * @return self
     */
    public function setIsValid(bool $isValid): self
    {
        $this->initialized['isValid'] = true;
        $this->isValid = $isValid;

        return $this;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param string $token
     *
     * @return self
     */
    public function setToken(string $token): self
    {
        $this->initialized['token'] = true;
        $this->token = $token;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
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
     * @return bool
     */
    public function getSwapLock(): bool
    {
        return $this->swapLock;
    }

    /**
     * @param bool $swapLock
     *
     * @return self
     */
    public function setSwapLock(bool $swapLock): self
    {
        $this->initialized['swapLock'] = true;
        $this->swapLock = $swapLock;

        return $this;
    }

    /**
     * @return string
     */
    public function getSourceId(): string
    {
        return $this->sourceId;
    }

    /**
     * @param string $sourceId
     *
     * @return self
     */
    public function setSourceId(string $sourceId): self
    {
        $this->initialized['sourceId'] = true;
        $this->sourceId = $sourceId;

        return $this;
    }

    /**
     * @return string
     */
    public function getTargetId(): string
    {
        return $this->targetId;
    }

    /**
     * @param string $targetId
     *
     * @return self
     */
    public function setTargetId(string $targetId): self
    {
        $this->initialized['targetId'] = true;
        $this->targetId = $targetId;

        return $this;
    }
}
