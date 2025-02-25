<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use stdClass;

class IntlSuggestions implements \JsonSerializable
{
    /**
     * @var string
     */
    private $primaryNumberRange;

    /**
     * @var string
     */
    private $primaryLine;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $zipCode;

    /**
     * @param string $primaryNumberRange
     * @param string $primaryLine
     * @param string $city
     * @param string $country
     * @param string $state
     * @param string $zipCode
     */
    public function __construct(
        string $primaryNumberRange,
        string $primaryLine,
        string $city,
        string $country,
        string $state,
        string $zipCode
    ) {
        $this->primaryNumberRange = $primaryNumberRange;
        $this->primaryLine = $primaryLine;
        $this->city = $city;
        $this->country = $country;
        $this->state = $state;
        $this->zipCode = $zipCode;
    }

    /**
     * Returns Primary Number Range.
     * The primary number range of the address that identifies a building at street level.
     */
    public function getPrimaryNumberRange(): string
    {
        return $this->primaryNumberRange;
    }

    /**
     * Sets Primary Number Range.
     * The primary number range of the address that identifies a building at street level.
     *
     * @required
     * @maps primary_number_range
     */
    public function setPrimaryNumberRange(string $primaryNumberRange): void
    {
        $this->primaryNumberRange = $primaryNumberRange;
    }

    /**
     * Returns Primary Line.
     * The primary delivery line (usually the street address) of the address.
     * Combination of the following applicable `components` (primary number &
     * secondary information may be missing or inaccurate):
     * * `primary_number`
     * * `street_predirection`
     * * `street_name`
     * * `street_suffix`
     * * `street_postdirection`
     * * `secondary_designator`
     * * `secondary_number`
     * * `pmb_designator`
     * * `pmb_number`
     */
    public function getPrimaryLine(): string
    {
        return $this->primaryLine;
    }

    /**
     * Sets Primary Line.
     * The primary delivery line (usually the street address) of the address.
     * Combination of the following applicable `components` (primary number &
     * secondary information may be missing or inaccurate):
     * * `primary_number`
     * * `street_predirection`
     * * `street_name`
     * * `street_suffix`
     * * `street_postdirection`
     * * `secondary_designator`
     * * `secondary_number`
     * * `pmb_designator`
     * * `pmb_number`
     *
     * @required
     * @maps primary_line
     */
    public function setPrimaryLine(string $primaryLine): void
    {
        $this->primaryLine = $primaryLine;
    }

    /**
     * Returns City.
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Sets City.
     *
     * @required
     * @maps city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * Returns Country.
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * Sets Country.
     *
     * @required
     * @maps country
     * @factory \LobLib\Models\CountryExtendedEnum::checkValue
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    /**
     * Returns State.
     * The <a href="https://en.wikipedia.org/wiki/ISO_3166-2" target="_blank">ISO 3166-2</a> two letter
     * code for the state.
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * Sets State.
     * The <a href="https://en.wikipedia.org/wiki/ISO_3166-2" target="_blank">ISO 3166-2</a> two letter
     * code for the state.
     *
     * @required
     * @maps state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * Returns Zip Code.
     * The postal code.
     */
    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    /**
     * Sets Zip Code.
     * The postal code.
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
        $json['primary_number_range'] = $this->primaryNumberRange;
        $json['primary_line']         = $this->primaryLine;
        $json['city']                 = $this->city;
        $json['country']              = CountryExtendedEnum::checkValue($this->country);
        $json['state']                = $this->state;
        $json['zip_code']             = $this->zipCode;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
