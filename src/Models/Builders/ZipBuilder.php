<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\Zip;

/**
 * Builder for model Zip
 *
 * @see Zip
 */
class ZipBuilder
{
    /**
     * @var Zip
     */
    private $instance;

    private function __construct(Zip $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new zip Builder object.
     */
    public static function init(string $zipCode, string $id, array $cities, string $zipCodeType): self
    {
        return new self(new Zip($zipCode, $id, $cities, $zipCodeType));
    }

    /**
     * Initializes a new zip object.
     */
    public function build(): Zip
    {
        return CoreHelper::clone($this->instance);
    }
}
