<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use stdClass;

class Zip implements \JsonSerializable
{
    /**
     * @var string
     */
    private $zipCode;

    /**
     * @var string
     */
    private $id;

    /**
     * @var ZipLookupCity[]
     */
    private $cities;

    /**
     * @var string
     */
    private $zipCodeType;

    /**
     * @var string
     */
    private $object;

    /**
     * @param string $zipCode
     * @param string $id
     * @param ZipLookupCity[] $cities
     * @param string $zipCodeType
     */
    public function __construct(string $zipCode, string $id, array $cities, string $zipCodeType)
    {
        $this->zipCode = $zipCode;
        $this->id = $id;
        $this->cities = $cities;
        $this->zipCodeType = $zipCodeType;
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
     * Returns Id.
     * Unique identifier prefixed with `us_zip_`.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Unique identifier prefixed with `us_zip_`.
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Cities.
     * An array of city objects containing valid cities for the `zip_code`. Multiple cities will be
     * returned if more than one city is associated with the input ZIP code.
     *
     * @return ZipLookupCity[]
     */
    public function getCities(): array
    {
        return $this->cities;
    }

    /**
     * Sets Cities.
     * An array of city objects containing valid cities for the `zip_code`. Multiple cities will be
     * returned if more than one city is associated with the input ZIP code.
     *
     * @required
     * @maps cities
     *
     * @param ZipLookupCity[] $cities
     */
    public function setCities(array $cities): void
    {
        $this->cities = $cities;
    }

    /**
     * Returns Zip Code Type.
     */
    public function getZipCodeType(): string
    {
        return $this->zipCodeType;
    }

    /**
     * Sets Zip Code Type.
     *
     * @required
     * @maps zip_code_type
     * @factory \LobLib\Models\ZipCodeTypeEnum::checkValue
     */
    public function setZipCodeType(string $zipCodeType): void
    {
        $this->zipCodeType = $zipCodeType;
    }

    /**
     * Returns Object.
     * Value is resource type.
     */
    public function getObject(): string
    {
        return $this->object;
    }

    /**
     * Sets Object.
     * Value is resource type.
     *
     * @maps object
     */
    public function setObject(string $object): void
    {
        $this->object = $object;
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
        $json['zip_code']      = $this->zipCode;
        $json['id']            = $this->id;
        $json['cities']        = $this->cities;
        $json['zip_code_type'] = ZipCodeTypeEnum::checkValue($this->zipCodeType);
        $json['object']        = $this->object;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
