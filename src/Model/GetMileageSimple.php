<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class GetMileageSimple extends AbstractModel
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var float
     */
    protected $mileage;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
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
     * @return float
     */
    public function getMileage(): float
    {
        return $this->mileage;
    }

    /**
     * @param float $mileage
     *
     * @return self
     */
    public function setMileage(float $mileage): self
    {
        $this->initialized['mileage'] = true;
        $this->mileage = $mileage;

        return $this;
    }
}
