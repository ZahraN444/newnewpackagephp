<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\QrCodeAnalyticsResponse;

/**
 * Builder for model QrCodeAnalyticsResponse
 *
 * @see QrCodeAnalyticsResponse
 */
class QrCodeAnalyticsResponseBuilder
{
    /**
     * @var QrCodeAnalyticsResponse
     */
    private $instance;

    private function __construct(QrCodeAnalyticsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new qr code analytics response Builder object.
     */
    public static function init(): self
    {
        return new self(new QrCodeAnalyticsResponse());
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
     * Sets scanned count field.
     */
    public function scannedCount(?int $value): self
    {
        $this->instance->setScannedCount($value);
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
     * Initializes a new qr code analytics response object.
     */
    public function build(): QrCodeAnalyticsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
