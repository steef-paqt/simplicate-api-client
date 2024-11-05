<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class InvoiceTemplate
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
    protected $name;
    /**
     *
     *
     * @var bool
     */
    protected $hideAmount;
    /**
     *
     *
     * @var bool
     */
    protected $hidePrice;
    /**
     *
     *
     * @var string
     */
    protected $footerNormal;
    /**
     *
     *
     * @var string
     */
    protected $footerDirectdebit;
    /**
     *
     *
     * @var string
     */
    protected $defaultNote;

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
     * @return bool
     */
    public function getHideAmount(): bool
    {
        return $this->hideAmount;
    }

    /**
     *
     *
     * @param bool $hideAmount
     *
     * @return self
     */
    public function setHideAmount(bool $hideAmount): self
    {
        $this->initialized['hideAmount'] = true;
        $this->hideAmount = $hideAmount;

        return $this;
    }

    /**
     *
     *
     * @return bool
     */
    public function getHidePrice(): bool
    {
        return $this->hidePrice;
    }

    /**
     *
     *
     * @param bool $hidePrice
     *
     * @return self
     */
    public function setHidePrice(bool $hidePrice): self
    {
        $this->initialized['hidePrice'] = true;
        $this->hidePrice = $hidePrice;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getFooterNormal(): string
    {
        return $this->footerNormal;
    }

    /**
     *
     *
     * @param string $footerNormal
     *
     * @return self
     */
    public function setFooterNormal(string $footerNormal): self
    {
        $this->initialized['footerNormal'] = true;
        $this->footerNormal = $footerNormal;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getFooterDirectdebit(): string
    {
        return $this->footerDirectdebit;
    }

    /**
     *
     *
     * @param string $footerDirectdebit
     *
     * @return self
     */
    public function setFooterDirectdebit(string $footerDirectdebit): self
    {
        $this->initialized['footerDirectdebit'] = true;
        $this->footerDirectdebit = $footerDirectdebit;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getDefaultNote(): string
    {
        return $this->defaultNote;
    }

    /**
     *
     *
     * @param string $defaultNote
     *
     * @return self
     */
    public function setDefaultNote(string $defaultNote): self
    {
        $this->initialized['defaultNote'] = true;
        $this->defaultNote = $defaultNote;

        return $this;
    }
}
