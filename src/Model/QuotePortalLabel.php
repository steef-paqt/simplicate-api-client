<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class QuotePortalLabel
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
    protected $quoteTemplateId;
    /**
     *
     *
     * @var string
     */
    protected $label;
    /**
     *
     *
     * @var string
     */
    protected $value;
    /**
     *
     *
     * @var string
     */
    protected $fallbackValue;

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
    public function getQuoteTemplateId(): string
    {
        return $this->quoteTemplateId;
    }

    /**
     *
     *
     * @param string $quoteTemplateId
     *
     * @return self
     */
    public function setQuoteTemplateId(string $quoteTemplateId): self
    {
        $this->initialized['quoteTemplateId'] = true;
        $this->quoteTemplateId = $quoteTemplateId;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     *
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     *
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getFallbackValue(): string
    {
        return $this->fallbackValue;
    }

    /**
     *
     *
     * @param string $fallbackValue
     *
     * @return self
     */
    public function setFallbackValue(string $fallbackValue): self
    {
        $this->initialized['fallbackValue'] = true;
        $this->fallbackValue = $fallbackValue;

        return $this;
    }
}
