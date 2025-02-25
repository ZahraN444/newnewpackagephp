<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\Details6;
use LobLib\Models\ReturnedResource1;

/**
 * Builder for model ReturnedResource1
 *
 * @see ReturnedResource1
 */
class ReturnedResource1Builder
{
    /**
     * @var ReturnedResource1
     */
    private $instance;

    private function __construct(ReturnedResource1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new returned resource 1 Builder object.
     */
    public static function init(Details6 $details, array $from): self
    {
        return new self(new ReturnedResource1($details, $from));
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
     * Initializes a new returned resource 1 object.
     */
    public function build(): ReturnedResource1
    {
        return CoreHelper::clone($this->instance);
    }
}
