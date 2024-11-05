<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RecentSalesQuoteStatus
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
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $statusLabel;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusLabel(): string
    {
        return $this->statusLabel;
    }

    /**
     * @param string $statusLabel
     *
     * @return self
     */
    public function setStatusLabel(string $statusLabel): self
    {
        $this->initialized['statusLabel'] = true;
        $this->statusLabel = $statusLabel;

        return $this;
    }
}
