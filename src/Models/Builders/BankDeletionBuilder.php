<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\BankDeletion;

/**
 * Builder for model BankDeletion
 *
 * @see BankDeletion
 */
class BankDeletionBuilder
{
    /**
     * @var BankDeletion
     */
    private $instance;

    private function __construct(BankDeletion $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new bank deletion Builder object.
     */
    public static function init(): self
    {
        return new self(new BankDeletion());
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
     * Sets deleted field.
     */
    public function deleted(?bool $value): self
    {
        $this->instance->setDeleted($value);
        return $this;
    }

    /**
     * Initializes a new bank deletion object.
     */
    public function build(): BankDeletion
    {
        return CoreHelper::clone($this->instance);
    }
}
