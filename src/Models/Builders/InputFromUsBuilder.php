<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\InputFromUs;

/**
 * Builder for model InputFromUs
 *
 * @see InputFromUs
 */
class InputFromUsBuilder
{
    /**
     * @var InputFromUs
     */
    private $instance;

    private function __construct(InputFromUs $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new input from us Builder object.
     */
    public static function init(): self
    {
        return new self(new InputFromUs());
    }

    /**
     * Sets from field.
     */
    public function from($value): self
    {
        $this->instance->setFrom($value);
        return $this;
    }

    /**
     * Initializes a new input from us object.
     */
    public function build(): InputFromUs
    {
        return CoreHelper::clone($this->instance);
    }
}
