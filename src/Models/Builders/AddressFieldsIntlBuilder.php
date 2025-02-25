<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\AddressFieldsIntl;

/**
 * Builder for model AddressFieldsIntl
 *
 * @see AddressFieldsIntl
 */
class AddressFieldsIntlBuilder
{
    /**
     * @var AddressFieldsIntl
     */
    private $instance;

    private function __construct(AddressFieldsIntl $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new address fields intl Builder object.
     */
    public static function init(string $addressLine1): self
    {
        return new self(new AddressFieldsIntl($addressLine1));
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
     * Unsets address city field.
     */
    public function unsetAddressCity(): self
    {
        $this->instance->unsetAddressCity();
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
     * Unsets address state field.
     */
    public function unsetAddressState(): self
    {
        $this->instance->unsetAddressState();
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
     * Unsets address zip field.
     */
    public function unsetAddressZip(): self
    {
        $this->instance->unsetAddressZip();
        return $this;
    }

    /**
     * Initializes a new address fields intl object.
     */
    public function build(): AddressFieldsIntl
    {
        return CoreHelper::clone($this->instance);
    }
}
