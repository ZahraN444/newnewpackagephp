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
use LobLib\Models\TemplatesVersions0Error1;

/**
 * Builder for model TemplatesVersions0Error1
 *
 * @see TemplatesVersions0Error1
 */
class TemplatesVersions0Error1Builder
{
    /**
     * @var TemplatesVersions0Error1
     */
    private $instance;

    private function __construct(TemplatesVersions0Error1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new templates versions 0 error 1 Builder object.
     */
    public static function init(Error1 $error): self
    {
        return new self(new TemplatesVersions0Error1($error));
    }

    /**
     * Initializes a new templates versions 0 error 1 object.
     */
    public function build(): TemplatesVersions0Error1
    {
        return CoreHelper::clone($this->instance);
    }
}
