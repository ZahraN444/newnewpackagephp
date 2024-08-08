<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\CreativeWritable2;
use LobLib\Models\Details4;

/**
 * Builder for model CreativeWritable2
 *
 * @see CreativeWritable2
 */
class CreativeWritable2Builder
{
    /**
     * @var CreativeWritable2
     */
    private $instance;

    private function __construct(CreativeWritable2 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new creative writable 2 Builder object.
     */
    public static function init(string $campaignId, array $inside, array $outside, Details4 $details): self
    {
        return new self(new CreativeWritable2($campaignId, $inside, $outside, $details));
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
     * Initializes a new creative writable 2 object.
     */
    public function build(): CreativeWritable2
    {
        return CoreHelper::clone($this->instance);
    }
}
