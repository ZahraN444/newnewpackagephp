<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use stdClass;

class Location implements \JsonSerializable
{
    /**
     * @var float|null
     */
    private $latitude;

    /**
     * @var float|null
     */
    private $longitude;

    /**
     * Returns Latitude.
     * A positive or negative decimal indicating the geographic latitude of the address, specifying the
     * north-to-south position of a location. This should be input with `longitude` to pinpoint locations
     * on a map.
     */
    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    /**
     * Sets Latitude.
     * A positive or negative decimal indicating the geographic latitude of the address, specifying the
     * north-to-south position of a location. This should be input with `longitude` to pinpoint locations
     * on a map.
     *
     * @maps latitude
     */
    public function setLatitude(?float $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * Returns Longitude.
     * A positive or negative decimal indicating the geographic longitude of the address, specifying the
     * north-to-south position of a location. This should be input with `latitude` to pinpoint locations on
     * a map.
     */
    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    /**
     * Sets Longitude.
     * A positive or negative decimal indicating the geographic longitude of the address, specifying the
     * north-to-south position of a location. This should be input with `latitude` to pinpoint locations on
     * a map.
     *
     * @maps longitude
     */
    public function setLongitude(?float $longitude): void
    {
        $this->longitude = $longitude;
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
        $json['latitude']  = $this->latitude;
        $json['longitude'] = $this->longitude;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
