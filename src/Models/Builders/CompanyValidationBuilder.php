<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\CompanyValidation;

/**
 * Builder for model CompanyValidation
 *
 * @see CompanyValidation
 */
class CompanyValidationBuilder
{
    /**
     * @var CompanyValidation
     */
    private $instance;

    private function __construct(CompanyValidation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new company validation Builder object.
     */
    public static function init(): self
    {
        return new self(new CompanyValidation());
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
     * Sets company field.
     */
    public function company(?string $value): self
    {
        $this->instance->setCompany($value);
        return $this;
    }

    /**
     * Unsets company field.
     */
    public function unsetCompany(): self
    {
        $this->instance->unsetCompany();
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
     * Sets urbanization field.
     */
    public function urbanization(?string $value): self
    {
        $this->instance->setUrbanization($value);
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
     * Sets score field.
     */
    public function score(?float $value): self
    {
        $this->instance->setScore($value);
        return $this;
    }

    /**
     * Unsets score field.
     */
    public function unsetScore(): self
    {
        $this->instance->unsetScore();
        return $this;
    }

    /**
     * Sets confidence field.
     */
    public function confidence(?string $value): self
    {
        $this->instance->setConfidence($value);
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
     * Initializes a new company validation object.
     */
    public function build(): CompanyValidation
    {
        return CoreHelper::clone($this->instance);
    }
}
