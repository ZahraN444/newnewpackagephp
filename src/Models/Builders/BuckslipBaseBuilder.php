<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\BuckslipBase;

/**
 * Builder for model BuckslipBase
 *
 * @see BuckslipBase
 */
class BuckslipBaseBuilder
{
    /**
     * @var BuckslipBase
     */
    private $instance;

    private function __construct(BuckslipBase $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new buckslip base Builder object.
     */
    public static function init(): self
    {
        return new self(new BuckslipBase());
    }

    /**
     * Sets description field.
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Unsets description field.
     */
    public function unsetDescription(): self
    {
        $this->instance->unsetDescription();
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
     * Initializes a new buckslip base object.
     */
    public function build(): BuckslipBase
    {
        return CoreHelper::clone($this->instance);
    }
}
