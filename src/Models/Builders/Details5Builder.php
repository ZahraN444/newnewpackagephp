<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\Details5;

/**
 * Builder for model Details5
 *
 * @see Details5
 */
class Details5Builder
{
    /**
     * @var Details5
     */
    private $instance;

    private function __construct(Details5 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new details 5 Builder object.
     */
    public static function init(): self
    {
        return new self(new Details5());
    }

    /**
     * Sets mail type field.
     */
    public function mailType(?string $value): self
    {
        $this->instance->setMailType($value);
        return $this;
    }

    /**
     * Sets size field.
     */
    public function size(?string $value): self
    {
        $this->instance->setSize($value);
        return $this;
    }

    /**
     * Sets front original url field.
     */
    public function frontOriginalUrl(?string $value): self
    {
        $this->instance->setFrontOriginalUrl($value);
        return $this;
    }

    /**
     * Sets back original url field.
     */
    public function backOriginalUrl(?string $value): self
    {
        $this->instance->setBackOriginalUrl($value);
        return $this;
    }

    /**
     * Initializes a new details 5 object.
     */
    public function build(): Details5
    {
        return CoreHelper::clone($this->instance);
    }
}
