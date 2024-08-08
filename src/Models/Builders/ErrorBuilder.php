<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\Error;
use LobLib\Models\Error1;

/**
 * Builder for model Error
 *
 * @see Error
 */
class ErrorBuilder
{
    /**
     * @var Error
     */
    private $instance;

    private function __construct(Error $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new error Builder object.
     */
    public static function init(Error1 $error): self
    {
        return new self(new Error($error));
    }

    /**
     * Initializes a new error object.
     */
    public function build(): Error
    {
        return CoreHelper::clone($this->instance);
    }
}
