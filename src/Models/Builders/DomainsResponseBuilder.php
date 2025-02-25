<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\DomainsResponse;

/**
 * Builder for model DomainsResponse
 *
 * @see DomainsResponse
 */
class DomainsResponseBuilder
{
    /**
     * @var DomainsResponse
     */
    private $instance;

    private function __construct(DomainsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new domains response Builder object.
     */
    public static function init(): self
    {
        return new self(new DomainsResponse());
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
     * Initializes a new domains response object.
     */
    public function build(): DomainsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
