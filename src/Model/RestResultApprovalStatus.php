<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultApprovalStatus extends AbstractModel
{
    /**
     * @var GetApprovalStatus
     */
    protected $data;
    /**
     * @var MetaData
     */
    protected $metadata;
    /**
     * @var mixed[]
     */
    protected $errors;
    /**
     * @var mixed[]
     */
    protected $debug;

    /**
     * @return GetApprovalStatus
     */
    public function getData(): GetApprovalStatus
    {
        return $this->data;
    }

    /**
     * @param GetApprovalStatus $data
     *
     * @return self
     */
    public function setData(GetApprovalStatus $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    /**
     * @return MetaData
     */
    public function getMetadata(): MetaData
    {
        return $this->metadata;
    }

    /**
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
     * @return mixed[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
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
     * @return mixed[]
     */
    public function getDebug(): array
    {
        return $this->debug;
    }

    /**
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
