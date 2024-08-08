<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\TemplateVersion;

/**
 * Builder for model TemplateVersion
 *
 * @see TemplateVersion
 */
class TemplateVersionBuilder
{
    /**
     * @var TemplateVersion
     */
    private $instance;

    private function __construct(TemplateVersion $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new template version Builder object.
     */
    public static function init(string $html, \DateTime $dateCreated, \DateTime $dateModified, string $id): self
    {
        return new self(new TemplateVersion($html, $dateCreated, $dateModified, $id));
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
     * Sets deleted field.
     */
    public function deleted(?bool $value): self
    {
        $this->instance->setDeleted($value);
        return $this;
    }

    /**
     * Sets suggest json editor field.
     */
    public function suggestJsonEditor(?bool $value): self
    {
        $this->instance->setSuggestJsonEditor($value);
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
     * Initializes a new template version object.
     */
    public function build(): TemplateVersion
    {
        return CoreHelper::clone($this->instance);
    }
}
