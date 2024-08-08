<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\QrCode1;
use LobLib\Models\SelfMailerDetailsWritable;

/**
 * Builder for model SelfMailerDetailsWritable
 *
 * @see SelfMailerDetailsWritable
 */
class SelfMailerDetailsWritableBuilder
{
    /**
     * @var SelfMailerDetailsWritable
     */
    private $instance;

    private function __construct(SelfMailerDetailsWritable $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new self mailer details writable Builder object.
     */
    public static function init(): self
    {
        return new self(new SelfMailerDetailsWritable());
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
     * Initializes a new self mailer details writable object.
     */
    public function build(): SelfMailerDetailsWritable
    {
        return CoreHelper::clone($this->instance);
    }
}
