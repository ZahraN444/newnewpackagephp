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
use LobLib\Models\UsAutocompletions0Error1;

/**
 * Builder for model UsAutocompletions0Error1
 *
 * @see UsAutocompletions0Error1
 */
class UsAutocompletions0Error1Builder
{
    /**
     * @var UsAutocompletions0Error1
     */
    private $instance;

    private function __construct(UsAutocompletions0Error1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new us autocompletions 0 error 1 Builder object.
     */
    public static function init(Error1 $error): self
    {
        return new self(new UsAutocompletions0Error1($error));
    }

    /**
     * Initializes a new us autocompletions 0 error 1 object.
     */
    public function build(): UsAutocompletions0Error1
    {
        return CoreHelper::clone($this->instance);
    }
}
