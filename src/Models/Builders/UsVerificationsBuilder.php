<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\UsVerifications;

/**
 * Builder for model UsVerifications
 *
 * @see UsVerifications
 */
class UsVerificationsBuilder
{
    /**
     * @var UsVerifications
     */
    private $instance;

    private function __construct(UsVerifications $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new us verifications Builder object.
     */
    public static function init(array $addresses, bool $errors): self
    {
        return new self(new UsVerifications($addresses, $errors));
    }

    /**
     * Initializes a new us verifications object.
     */
    public function build(): UsVerifications
    {
        return CoreHelper::clone($this->instance);
    }
}
