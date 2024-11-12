<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultProjectService extends AbstractRestResult
{
    /**
     * @var GetProjectService
     */
    protected $data;

    /**
     * @return GetProjectService
     */
    public function getData(): GetProjectService
    {
        return $this->data;
    }

    /**
     * @param GetProjectService $data
     *
     * @return self
     */
    public function setData(GetProjectService $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
