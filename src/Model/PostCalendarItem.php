<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class PostCalendarItem
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
     * Calendars' external_uid
     *
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $location;

    /**
     * Calendars' external_uid
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Calendars' external_uid
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
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @param string $location
     *
     * @return self
     */
    public function setLocation(string $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;

        return $this;
    }
}
