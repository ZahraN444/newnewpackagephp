<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\ToAddressUsChk;

/**
 * Builder for model ToAddressUsChk
 *
 * @see ToAddressUsChk
 */
class ToAddressUsChkBuilder
{
    /**
     * @var ToAddressUsChk
     */
    private $instance;

    private function __construct(ToAddressUsChk $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new to address us chk Builder object.
     */
    public static function init(
        \DateTime $dateCreated,
        \DateTime $dateModified,
        string $id,
        string $addressLine1,
        string $addressCity,
        string $addressState,
        string $addressZip
    ): self {
        return new self(new ToAddressUsChk(
            $dateCreated,
            $dateModified,
            $id,
            $addressLine1,
            $addressCity,
            $addressState,
            $addressZip
        ));
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
     * Sets recipient moved field.
     */
    public function recipientMoved(?bool $value): self
    {
        $this->instance->setRecipientMoved($value);
        return $this;
    }

    /**
     * Unsets recipient moved field.
     */
    public function unsetRecipientMoved(): self
    {
        $this->instance->unsetRecipientMoved();
        return $this;
    }

    /**
     * Initializes a new to address us chk object.
     */
    public function build(): ToAddressUsChk
    {
        return CoreHelper::clone($this->instance);
    }
}
