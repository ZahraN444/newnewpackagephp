<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use stdClass;

class LocationAnalysis1 implements \JsonSerializable
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
     * @var float
     */
    private $distance;

    /**
     * @param float $distance
     */
    public function __construct(float $distance)
    {
        $this->distance = $distance;
    }

    /**
     * Returns Latitude.
     * A positive or negative decimal indicating the geographic latitude of the address, specifying the
     * north-to-south position of a location. This should be used with `longitude` to pinpoint locations on
     * a map. Will not be returned for undeliverable addresses or military addresses (state is `AA`, `AE`,
     * or `AP`).
     */
    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    /**
     * Sets Latitude.
     * A positive or negative decimal indicating the geographic latitude of the address, specifying the
     * north-to-south position of a location. This should be used with `longitude` to pinpoint locations on
     * a map. Will not be returned for undeliverable addresses or military addresses (state is `AA`, `AE`,
     * or `AP`).
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
     * north-to-south position of a location. This should be used with `latitude` to pinpoint locations on
     * a map. Will not be returned for undeliverable addresses or military addresses (state is `AA`, `AE`,
     * or `AP`).
     */
    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    /**
     * Sets Longitude.
     * A positive or negative decimal indicating the geographic longitude of the address, specifying the
     * north-to-south position of a location. This should be used with `latitude` to pinpoint locations on
     * a map. Will not be returned for undeliverable addresses or military addresses (state is `AA`, `AE`,
     * or `AP`).
     *
     * @maps longitude
     */
    public function setLongitude(?float $longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * Returns Distance.
     * The distance from the input location to this exact zip code in miles.
     */
    public function getDistance(): float
    {
        return $this->distance;
    }

    /**
     * Sets Distance.
     * The distance from the input location to this exact zip code in miles.
     *
     * @required
     * @maps distance
     */
    public function setDistance(float $distance): void
    {
        $this->distance = $distance;
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
        $json['distance']  = $this->distance;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
