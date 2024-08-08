<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\Editable;

/**
 * Builder for model Editable
 *
 * @see Editable
 */
class EditableBuilder
{
    /**
     * @var Editable
     */
    private $instance;

    private function __construct(Editable $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new editable Builder object.
     */
    public static function init(): self
    {
        return new self(new Editable());
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
     * Sets metadata field.
     */
    public function metadata(?array $value): self
    {
        $this->instance->setMetadata($value);
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
     * Sets merge variables field.
     */
    public function mergeVariables(?array $value): self
    {
        $this->instance->setMergeVariables($value);
        return $this;
    }

    /**
     * Unsets merge variables field.
     */
    public function unsetMergeVariables(): self
    {
        $this->instance->unsetMergeVariables();
        return $this;
    }

    /**
     * Sets send date field.
     */
    public function sendDate(?array $value): self
    {
        $this->instance->setSendDate($value);
        return $this;
    }

    /**
     * Initializes a new editable object.
     */
    public function build(): Editable
    {
        return CoreHelper::clone($this->instance);
    }
}
