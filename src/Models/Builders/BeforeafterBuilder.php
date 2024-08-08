<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\Beforeafter;

/**
 * Builder for model Beforeafter
 *
 * @see Beforeafter
 */
class BeforeafterBuilder
{
    /**
     * @var Beforeafter
     */
    private $instance;

    private function __construct(Beforeafter $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new beforeafter Builder object.
     */
    public static function init(string $before, string $after): self
    {
        return new self(new Beforeafter($before, $after));
    }

    /**
     * Initializes a new beforeafter object.
     */
    public function build(): Beforeafter
    {
        return CoreHelper::clone($this->instance);
    }
}
