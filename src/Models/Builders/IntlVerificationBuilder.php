<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\Components1;
use LobLib\Models\IntlVerification;

/**
 * Builder for model IntlVerification
 *
 * @see IntlVerification
 */
class IntlVerificationBuilder
{
    /**
     * @var IntlVerification
     */
    private $instance;

    private function __construct(IntlVerification $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new intl verification Builder object.
     */
    public static function init(): self
    {
        return new self(new IntlVerification());
    }

    /**
     * Sets recipient field.
     */
    public function recipient(?string $value): self
    {
        $this->instance->setRecipient($value);
        return $this;
    }

    /**
     * Unsets recipient field.
     */
    public function unsetRecipient(): self
    {
        $this->instance->unsetRecipient();
        return $this;
    }

    /**
     * Sets primary line field.
     */
    public function primaryLine(?string $value): self
    {
        $this->instance->setPrimaryLine($value);
        return $this;
    }

    /**
     * Sets secondary line field.
     */
    public function secondaryLine(?string $value): self
    {
        $this->instance->setSecondaryLine($value);
        return $this;
    }

    /**
     * Sets id field.
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets last line field.
     */
    public function lastLine(?string $value): self
    {
        $this->instance->setLastLine($value);
        return $this;
    }

    /**
     * Sets country field.
     */
    public function country(?string $value): self
    {
        $this->instance->setCountry($value);
        return $this;
    }

    /**
     * Sets coverage field.
     */
    public function coverage(?string $value): self
    {
        $this->instance->setCoverage($value);
        return $this;
    }

    /**
     * Sets deliverability field.
     */
    public function deliverability(?string $value): self
    {
        $this->instance->setDeliverability($value);
        return $this;
    }

    /**
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets components field.
     */
    public function components(?Components1 $value): self
    {
        $this->instance->setComponents($value);
        return $this;
    }

    /**
     * Sets object field.
     */
    public function object(?string $value): self
    {
        $this->instance->setObject($value);
        return $this;
    }

    /**
     * Initializes a new intl verification object.
     */
    public function build(): IntlVerification
    {
        return CoreHelper::clone($this->instance);
    }
}
