<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class PaymentTerm
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
    protected $name;
    /**
     *
     *
     * @var int
     */
    protected $days;
    /**
     *
     *
     * @var string
     */
    protected $method;

    /**
     *
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     *
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     *
     *
     * @return int
     */
    public function getDays(): int
    {
        return $this->days;
    }

    /**
     *
     *
     * @param int $days
     *
     * @return self
     */
    public function setDays(int $days): self
    {
        $this->initialized['days'] = true;
        $this->days = $days;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     *
     *
     * @param string $method
     *
     * @return self
     */
    public function setMethod(string $method): self
    {
        $this->initialized['method'] = true;
        $this->method = $method;

        return $this;
    }
}
