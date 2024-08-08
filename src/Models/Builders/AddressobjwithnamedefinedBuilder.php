<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\Addressobjwithnamedefined;

/**
 * Builder for model Addressobjwithnamedefined
 *
 * @see Addressobjwithnamedefined
 */
class AddressobjwithnamedefinedBuilder
{
    /**
     * @var Addressobjwithnamedefined
     */
    private $instance;

    private function __construct(Addressobjwithnamedefined $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new addressobjwithnamedefined Builder object.
     */
    public static function init(): self
    {
        return new self(new Addressobjwithnamedefined());
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
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
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
     * Sets address line 1 field.
     */
    public function addressLine1(?string $value): self
    {
        $this->instance->setAddressLine1($value);
        return $this;
    }

    /**
     * Sets address line 2 field.
     */
    public function addressLine2(?string $value): self
    {
        $this->instance->setAddressLine2($value);
        return $this;
    }

    /**
     * Unsets address line 2 field.
     */
    public function unsetAddressLine2(): self
    {
        $this->instance->unsetAddressLine2();
        return $this;
    }

    /**
     * Sets address city field.
     */
    public function addressCity(?string $value): self
    {
        $this->instance->setAddressCity($value);
        return $this;
    }

    /**
     * Sets address state field.
     */
    public function addressState(?string $value): self
    {
        $this->instance->setAddressState($value);
        return $this;
    }

    /**
     * Sets address zip field.
     */
    public function addressZip(?string $value): self
    {
        $this->instance->setAddressZip($value);
        return $this;
    }

    /**
     * Sets phone field.
     */
    public function phone(?string $value): self
    {
        $this->instance->setPhone($value);
        return $this;
    }

    /**
     * Unsets phone field.
     */
    public function unsetPhone(): self
    {
        $this->instance->unsetPhone();
        return $this;
    }

    /**
     * Sets email field.
     */
    public function email(?string $value): self
    {
        $this->instance->setEmail($value);
        return $this;
    }

    /**
     * Unsets email field.
     */
    public function unsetEmail(): self
    {
        $this->instance->unsetEmail();
        return $this;
    }

    /**
     * Sets address country field.
     */
    public function addressCountry(?string $value): self
    {
        $this->instance->setAddressCountry($value);
        return $this;
    }

    /**
     * Sets metadata field.
     */
    public function metadata(?array $value): self
    {
        $this->instance->setMetadata($value);
        return $this;
    }

    /**
     * Initializes a new addressobjwithnamedefined object.
     */
    public function build(): Addressobjwithnamedefined
    {
        return CoreHelper::clone($this->instance);
    }
}
