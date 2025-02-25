<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\Details5;
use LobLib\Models\ReturnedResource;

/**
 * Builder for model ReturnedResource
 *
 * @see ReturnedResource
 */
class ReturnedResourceBuilder
{
    /**
     * @var ReturnedResource
     */
    private $instance;

    private function __construct(ReturnedResource $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new returned resource Builder object.
     */
    public static function init(Details5 $details): self
    {
        return new self(new ReturnedResource($details));
    }

    /**
     * Sets from field.
     */
    public function from(?array $value): self
    {
        $this->instance->setFrom($value);
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
     * Sets metadata field.
     */
    public function metadata(?array $value): self
    {
        $this->instance->setMetadata($value);
        return $this;
    }

    /**
     * Initializes a new returned resource object.
     */
    public function build(): ReturnedResource
    {
        return CoreHelper::clone($this->instance);
    }
}
