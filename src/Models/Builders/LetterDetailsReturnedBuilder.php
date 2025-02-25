<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\LetterDetailsReturned;

/**
 * Builder for model LetterDetailsReturned
 *
 * @see LetterDetailsReturned
 */
class LetterDetailsReturnedBuilder
{
    /**
     * @var LetterDetailsReturned
     */
    private $instance;

    private function __construct(LetterDetailsReturned $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new letter details returned Builder object.
     */
    public static function init(): self
    {
        return new self(new LetterDetailsReturned());
    }

    /**
     * Sets address placement field.
     */
    public function addressPlacement(?string $value): self
    {
        $this->instance->setAddressPlacement($value);
        return $this;
    }

    /**
     * Sets buckslips field.
     */
    public function buckslips(?array $value): self
    {
        $this->instance->setBuckslips($value);
        return $this;
    }

    /**
     * Unsets buckslips field.
     */
    public function unsetBuckslips(): self
    {
        $this->instance->unsetBuckslips();
        return $this;
    }

    /**
     * Sets cards field.
     */
    public function cards(?array $value): self
    {
        $this->instance->setCards($value);
        return $this;
    }

    /**
     * Unsets cards field.
     */
    public function unsetCards(): self
    {
        $this->instance->unsetCards();
        return $this;
    }

    /**
     * Sets custom envelope field.
     */
    public function customEnvelope(?array $value): self
    {
        $this->instance->setCustomEnvelope($value);
        return $this;
    }

    /**
     * Sets color field.
     */
    public function color(?bool $value): self
    {
        $this->instance->setColor($value);
        return $this;
    }

    /**
     * Sets double sided field.
     */
    public function doubleSided(?bool $value): self
    {
        $this->instance->setDoubleSided($value);
        return $this;
    }

    /**
     * Sets extra service field.
     */
    public function extraService(?array $value): self
    {
        $this->instance->setExtraService($value);
        return $this;
    }

    /**
     * Sets file original url field.
     */
    public function fileOriginalUrl(?string $value): self
    {
        $this->instance->setFileOriginalUrl($value);
        return $this;
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
     * Initializes a new letter details returned object.
     */
    public function build(): LetterDetailsReturned
    {
        return CoreHelper::clone($this->instance);
    }
}
