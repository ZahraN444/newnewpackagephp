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

/**
 * Builder for model Error1
 *
 * @see Error1
 */
class Error1Builder
{
    /**
     * @var Error1
     */
    private $instance;

    private function __construct(Error1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new error 1 Builder object.
     */
    public static function init(string $message, int $statusCode, string $code): self
    {
        return new self(new Error1($message, $statusCode, $code));
    }

    /**
     * Initializes a new error 1 object.
     */
    public function build(): Error1
    {
        return CoreHelper::clone($this->instance);
    }
}
