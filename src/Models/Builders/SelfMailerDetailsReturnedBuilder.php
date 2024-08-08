<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\SelfMailerDetailsReturned;

/**
 * Builder for model SelfMailerDetailsReturned
 *
 * @see SelfMailerDetailsReturned
 */
class SelfMailerDetailsReturnedBuilder
{
    /**
     * @var SelfMailerDetailsReturned
     */
    private $instance;

    private function __construct(SelfMailerDetailsReturned $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new self mailer details returned Builder object.
     */
    public static function init(): self
    {
        return new self(new SelfMailerDetailsReturned());
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
     * Sets inside original url field.
     */
    public function insideOriginalUrl(?string $value): self
    {
        $this->instance->setInsideOriginalUrl($value);
        return $this;
    }

    /**
     * Sets outside original url field.
     */
    public function outsideOriginalUrl(?string $value): self
    {
        $this->instance->setOutsideOriginalUrl($value);
        return $this;
    }

    /**
     * Initializes a new self mailer details returned object.
     */
    public function build(): SelfMailerDetailsReturned
    {
        return CoreHelper::clone($this->instance);
    }
}
