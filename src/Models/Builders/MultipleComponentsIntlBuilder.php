<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\MultipleComponentsIntl;

/**
 * Builder for model MultipleComponentsIntl
 *
 * @see MultipleComponentsIntl
 */
class MultipleComponentsIntlBuilder
{
    /**
     * @var MultipleComponentsIntl
     */
    private $instance;

    private function __construct(MultipleComponentsIntl $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new multiple components intl Builder object.
     */
    public static function init(string $primaryLine, string $country): self
    {
        return new self(new MultipleComponentsIntl($primaryLine, $country));
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
     * Sets secondary line field.
     */
    public function secondaryLine(?string $value): self
    {
        $this->instance->setSecondaryLine($value);
        return $this;
    }

    /**
     * Sets city field.
     */
    public function city(?string $value): self
    {
        $this->instance->setCity($value);
        return $this;
    }

    /**
     * Sets state field.
     */
    public function state(?string $value): self
    {
        $this->instance->setState($value);
        return $this;
    }

    /**
     * Sets postal code field.
     */
    public function postalCode(?string $value): self
    {
        $this->instance->setPostalCode($value);
        return $this;
    }

    /**
     * Initializes a new multiple components intl object.
     */
    public function build(): MultipleComponentsIntl
    {
        return CoreHelper::clone($this->instance);
    }
}
