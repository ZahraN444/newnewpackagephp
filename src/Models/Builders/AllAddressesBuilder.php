<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\AllAddresses;

/**
 * Builder for model AllAddresses
 *
 * @see AllAddresses
 */
class AllAddressesBuilder
{
    /**
     * @var AllAddresses
     */
    private $instance;

    private function __construct(AllAddresses $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new all addresses Builder object.
     */
    public static function init(): self
    {
        return new self(new AllAddresses());
    }

    /**
     * Sets object field.
     */
    public function object(?string $value): self
    {
        $this->instance->setObject($value);
        return $this;
    }

    /**
     * Sets next url field.
     */
    public function nextUrl(?string $value): self
    {
        $this->instance->setNextUrl($value);
        return $this;
    }

    /**
     * Unsets next url field.
     */
    public function unsetNextUrl(): self
    {
        $this->instance->unsetNextUrl();
        return $this;
    }

    /**
     * Sets previous url field.
     */
    public function previousUrl(?string $value): self
    {
        $this->instance->setPreviousUrl($value);
        return $this;
    }

    /**
     * Unsets previous url field.
     */
    public function unsetPreviousUrl(): self
    {
        $this->instance->unsetPreviousUrl();
        return $this;
    }

    /**
     * Sets count field.
     */
    public function count(?int $value): self
    {
        $this->instance->setCount($value);
        return $this;
    }

    /**
     * Sets total count field.
     */
    public function totalCount(?int $value): self
    {
        $this->instance->setTotalCount($value);
        return $this;
    }

    /**
     * Sets data field.
     */
    public function data(?array $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new all addresses object.
     */
    public function build(): AllAddresses
    {
        return CoreHelper::clone($this->instance);
    }
}
