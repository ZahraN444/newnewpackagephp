<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\Generated;

/**
 * Builder for model Generated
 *
 * @see Generated
 */
class GeneratedBuilder
{
    /**
     * @var Generated
     */
    private $instance;

    private function __construct(Generated $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new generated Builder object.
     */
    public static function init(array $to): self
    {
        return new self(new Generated($to));
    }

    /**
     * Sets thumbnails field.
     */
    public function thumbnails(?array $value): self
    {
        $this->instance->setThumbnails($value);
        return $this;
    }

    /**
     * Sets expected delivery date field.
     */
    public function expectedDeliveryDate(?\DateTime $value): self
    {
        $this->instance->setExpectedDeliveryDate($value);
        return $this;
    }

    /**
     * Sets date created field.
     */
    public function dateCreated(?\DateTime $value): self
    {
        $this->instance->setDateCreated($value);
        return $this;
    }

    /**
     * Sets date modified field.
     */
    public function dateModified(?\DateTime $value): self
    {
        $this->instance->setDateModified($value);
        return $this;
    }

    /**
     * Sets deleted field.
     */
    public function deleted(?bool $value): self
    {
        $this->instance->setDeleted($value);
        return $this;
    }

    /**
     * Initializes a new generated object.
     */
    public function build(): Generated
    {
        return CoreHelper::clone($this->instance);
    }
}
