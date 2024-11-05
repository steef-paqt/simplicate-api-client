<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class IsSatisfiedReason
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
    protected $message;
    /**
     *
     *
     * @var string
     */
    protected $translatedMessage;

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
     * @return string
     */
    public function getTranslatedMessage(): string
    {
        return $this->translatedMessage;
    }

    /**
     *
     *
     * @param string $translatedMessage
     *
     * @return self
     */
    public function setTranslatedMessage(string $translatedMessage): self
    {
        $this->initialized['translatedMessage'] = true;
        $this->translatedMessage = $translatedMessage;

        return $this;
    }
}
