<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\Details2;
use LobLib\Models\QrCode1;

/**
 * Builder for model Details2
 *
 * @see Details2
 */
class Details2Builder
{
    /**
     * @var Details2
     */
    private $instance;

    private function __construct(Details2 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new details 2 Builder object.
     */
    public static function init(): self
    {
        return new self(new Details2());
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
     * Sets qr code field.
     */
    public function qrCode(?QrCode1 $value): self
    {
        $this->instance->setQrCode($value);
        return $this;
    }

    /**
     * Initializes a new details 2 object.
     */
    public function build(): Details2
    {
        return CoreHelper::clone($this->instance);
    }
}
