<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\Domains;

/**
 * Builder for model Domains
 *
 * @see Domains
 */
class DomainsBuilder
{
    /**
     * @var Domains
     */
    private $instance;

    private function __construct(Domains $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new domains Builder object.
     */
    public static function init(string $domain): self
    {
        return new self(new Domains($domain));
    }

    /**
     * Initializes a new domains object.
     */
    public function build(): Domains
    {
        return CoreHelper::clone($this->instance);
    }
}
