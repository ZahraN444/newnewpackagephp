<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\CheckBase;

/**
 * Builder for model CheckBase
 *
 * @see CheckBase
 */
class CheckBaseBuilder
{
    /**
     * @var CheckBase
     */
    private $instance;

    private function __construct(CheckBase $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new check base Builder object.
     */
    public static function init(): self
    {
        return new self(new CheckBase());
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
     * Sets mail type field.
     */
    public function mailType(?string $value): self
    {
        $this->instance->setMailType($value);
        return $this;
    }

    /**
     * Sets memo field.
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
        return $this;
    }

    /**
     * Unsets memo field.
     */
    public function unsetMemo(): self
    {
        $this->instance->unsetMemo();
        return $this;
    }

    /**
     * Sets check number field.
     */
    public function checkNumber(?int $value): self
    {
        $this->instance->setCheckNumber($value);
        return $this;
    }

    /**
     * Sets message field.
     */
    public function message(?string $value): self
    {
        $this->instance->setMessage($value);
        return $this;
    }

    /**
     * Sets use type field.
     */
    public function useType(?array $value): self
    {
        $this->instance->setUseType($value);
        return $this;
    }

    /**
     * Initializes a new check base object.
     */
    public function build(): CheckBase
    {
        return CoreHelper::clone($this->instance);
    }
}
