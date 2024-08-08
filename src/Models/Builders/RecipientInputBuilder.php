<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\RecipientInput;

/**
 * Builder for model RecipientInput
 *
 * @see RecipientInput
 */
class RecipientInputBuilder
{
    /**
     * @var RecipientInput
     */
    private $instance;

    private function __construct(RecipientInput $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new recipient input Builder object.
     */
    public static function init(string $primaryLine, string $city, string $state, string $zipCode): self
    {
        return new self(new RecipientInput($primaryLine, $city, $state, $zipCode));
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
     * Sets secondary line field.
     */
    public function secondaryLine(?string $value): self
    {
        $this->instance->setSecondaryLine($value);
        return $this;
    }

    /**
     * Sets urbanization field.
     */
    public function urbanization(?string $value): self
    {
        $this->instance->setUrbanization($value);
        return $this;
    }

    /**
     * Initializes a new recipient input object.
     */
    public function build(): RecipientInput
    {
        return CoreHelper::clone($this->instance);
    }
}
