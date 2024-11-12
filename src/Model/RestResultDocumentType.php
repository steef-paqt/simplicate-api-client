<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultDocumentType extends AbstractRestResult
{
    /**
     * @var GetDocumentType
     */
    protected $data;

    /**
     * @return GetDocumentType
     */
    public function getData(): GetDocumentType
    {
        return $this->data;
    }

    /**
     * @param GetDocumentType $data
     *
     * @return self
     */
    public function setData(GetDocumentType $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
