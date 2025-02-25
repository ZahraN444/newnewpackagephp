<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\TemplateWritable;

/**
 * Builder for model TemplateWritable
 *
 * @see TemplateWritable
 */
class TemplateWritableBuilder
{
    /**
     * @var TemplateWritable
     */
    private $instance;

    private function __construct(TemplateWritable $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new template writable Builder object.
     */
    public static function init(string $html): self
    {
        return new self(new TemplateWritable($html));
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
     * Sets engine field.
     */
    public function engine(?array $value): self
    {
        $this->instance->setEngine($value);
        return $this;
    }

    /**
     * Sets required vars field.
     */
    public function requiredVars(?array $value): self
    {
        $this->instance->setRequiredVars($value);
        return $this;
    }

    /**
     * Initializes a new template writable object.
     */
    public function build(): TemplateWritable
    {
        return CoreHelper::clone($this->instance);
    }
}
