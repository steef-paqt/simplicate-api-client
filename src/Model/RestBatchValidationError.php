<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestBatchValidationError
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
     * @var RestError
     */
    protected $error;
    /**
     * @var mixed
     */
    protected $submittedData;

    /**
     * @return RestError
     */
    public function getError(): RestError
    {
        return $this->error;
    }

    /**
     * @param RestError $error
     *
     * @return self
     */
    public function setError(RestError $error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubmittedData()
    {
        return $this->submittedData;
    }

    /**
     * @param mixed $submittedData
     *
     * @return self
     */
    public function setSubmittedData($submittedData): self
    {
        $this->initialized['submittedData'] = true;
        $this->submittedData = $submittedData;

        return $this;
    }
}
