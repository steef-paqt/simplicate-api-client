<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultHoursSubmissions extends AbstractRestResult
{
    /**
     * @var SubmissionStatus[]
     */
    protected $data;

    /**
     * @return SubmissionStatus[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param SubmissionStatus[] $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
