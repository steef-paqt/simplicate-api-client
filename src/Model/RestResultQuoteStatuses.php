<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class RestResultQuoteStatuses
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
     * @var QuoteStatus[]
     */
    protected $data;
    /**
     *
     *
     * @var MetaData
     */
    protected $metadata;
    /**
     *
     *
     * @var mixed[]
     */
    protected $errors;
    /**
     *
     *
     * @var mixed[]
     */
    protected $debug;

    /**
     *
     *
     * @return QuoteStatus[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     *
     *
     * @param QuoteStatus[] $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    /**
     *
     *
     * @return MetaData
     */
    public function getMetadata(): MetaData
    {
        return $this->metadata;
    }

    /**
     *
     *
     * @param MetaData $metadata
     *
     * @return self
     */
    public function setMetadata(MetaData $metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;

        return $this;
    }

    /**
     *
     *
     * @return mixed[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     *
     *
     * @param mixed[] $errors
     *
     * @return self
     */
    public function setErrors(array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;

        return $this;
    }

    /**
     *
     *
     * @return mixed[]
     */
    public function getDebug(): array
    {
        return $this->debug;
    }

    /**
     *
     *
     * @param mixed[] $debug
     *
     * @return self
     */
    public function setDebug(array $debug): self
    {
        $this->initialized['debug'] = true;
        $this->debug = $debug;

        return $this;
    }
}
