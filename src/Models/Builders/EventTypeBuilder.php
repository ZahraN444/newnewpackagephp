<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\EventType;

/**
 * Builder for model EventType
 *
 * @see EventType
 */
class EventTypeBuilder
{
    /**
     * @var EventType
     */
    private $instance;

    private function __construct(EventType $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new event type Builder object.
     */
    public static function init(string $id, bool $enabledForTest, string $resource): self
    {
        return new self(new EventType($id, $enabledForTest, $resource));
    }

    /**
     * Initializes a new event type object.
     */
    public function build(): EventType
    {
        return CoreHelper::clone($this->instance);
    }
}
