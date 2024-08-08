<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\TemplateDeletion;

/**
 * Builder for model TemplateDeletion
 *
 * @see TemplateDeletion
 */
class TemplateDeletionBuilder
{
    /**
     * @var TemplateDeletion
     */
    private $instance;

    private function __construct(TemplateDeletion $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new template deletion Builder object.
     */
    public static function init(): self
    {
        return new self(new TemplateDeletion());
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
     * Initializes a new template deletion object.
     */
    public function build(): TemplateDeletion
    {
        return CoreHelper::clone($this->instance);
    }
}
