<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\BuckslipUpdatable;

/**
 * Builder for model BuckslipUpdatable
 *
 * @see BuckslipUpdatable
 */
class BuckslipUpdatableBuilder
{
    /**
     * @var BuckslipUpdatable
     */
    private $instance;

    private function __construct(BuckslipUpdatable $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new buckslip updatable Builder object.
     */
    public static function init(): self
    {
        return new self(new BuckslipUpdatable());
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
     * Initializes a new buckslip updatable object.
     */
    public function build(): BuckslipUpdatable
    {
        return CoreHelper::clone($this->instance);
    }
}
