<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\CardUpdatable;

/**
 * Builder for model CardUpdatable
 *
 * @see CardUpdatable
 */
class CardUpdatableBuilder
{
    /**
     * @var CardUpdatable
     */
    private $instance;

    private function __construct(CardUpdatable $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new card updatable Builder object.
     */
    public static function init(): self
    {
        return new self(new CardUpdatable());
    }

    /**
     * Sets description field.
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Unsets description field.
     */
    public function unsetDescription(): self
    {
        $this->instance->unsetDescription();
        return $this;
    }

    /**
     * Sets auto reorder field.
     */
    public function autoReorder(?bool $value): self
    {
        $this->instance->setAutoReorder($value);
        return $this;
    }

    /**
     * Sets reorder quantity field.
     */
    public function reorderQuantity(?float $value): self
    {
        $this->instance->setReorderQuantity($value);
        return $this;
    }

    /**
     * Initializes a new card updatable object.
     */
    public function build(): CardUpdatable
    {
        return CoreHelper::clone($this->instance);
    }
}
