<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\Error1;
use LobLib\Models\Postcards0Error1;

/**
 * Builder for model Postcards0Error1
 *
 * @see Postcards0Error1
 */
class Postcards0Error1Builder
{
    /**
     * @var Postcards0Error1
     */
    private $instance;

    private function __construct(Postcards0Error1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new postcards 0 error 1 Builder object.
     */
    public static function init(Error1 $error): self
    {
        return new self(new Postcards0Error1($error));
    }

    /**
     * Initializes a new postcards 0 error 1 object.
     */
    public function build(): Postcards0Error1
    {
        return CoreHelper::clone($this->instance);
    }
}
