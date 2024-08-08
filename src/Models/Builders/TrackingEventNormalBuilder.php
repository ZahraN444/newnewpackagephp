<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\TrackingEventNormal;

/**
 * Builder for model TrackingEventNormal
 *
 * @see TrackingEventNormal
 */
class TrackingEventNormalBuilder
{
    /**
     * @var TrackingEventNormal
     */
    private $instance;

    private function __construct(TrackingEventNormal $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new tracking event normal Builder object.
     */
    public static function init(
        string $id,
        \DateTime $dateCreated,
        \DateTime $dateModified,
        string $object,
        string $name
    ): self {
        return new self(new TrackingEventNormal($id, $dateCreated, $dateModified, $object, $name));
    }

    /**
     * Sets time field.
     */
    public function time(?\DateTime $value): self
    {
        $this->instance->setTime($value);
        return $this;
    }

    /**
     * Sets details field.
     */
    public function details(?array $value): self
    {
        $this->instance->setDetails($value);
        return $this;
    }

    /**
     * Unsets details field.
     */
    public function unsetDetails(): self
    {
        $this->instance->unsetDetails();
        return $this;
    }

    /**
     * Sets location field.
     */
    public function location(?string $value): self
    {
        $this->instance->setLocation($value);
        return $this;
    }

    /**
     * Unsets location field.
     */
    public function unsetLocation(): self
    {
        $this->instance->unsetLocation();
        return $this;
    }

    /**
     * Initializes a new tracking event normal object.
     */
    public function build(): TrackingEventNormal
    {
        return CoreHelper::clone($this->instance);
    }
}
