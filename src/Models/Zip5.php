<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use stdClass;

class Zip5 implements \JsonSerializable
{
    /**
     * @var string
     */
    private $zipCode;

    /**
     * @param string $zipCode
     */
    public function __construct(string $zipCode)
    {
        $this->zipCode = $zipCode;
    }

    /**
     * Returns Zip Code.
     * A 5-digit ZIP code.
     */
    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    /**
     * Sets Zip Code.
     * A 5-digit ZIP code.
     *
     * @required
     * @maps zip_code
     */
    public function setZipCode(string $zipCode): void
    {
        $this->zipCode = $zipCode;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['zip_code'] = $this->zipCode;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
