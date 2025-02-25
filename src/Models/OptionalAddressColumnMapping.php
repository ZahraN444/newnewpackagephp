<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use stdClass;

class OptionalAddressColumnMapping implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $addressLine2;

    /**
     * @var string|null
     */
    private $company;

    /**
     * @var string|null
     */
    private $addressCountry;

    /**
     * Returns Address Line 2.
     * The column header from the csv file that should be mapped to the optional field "address_line2"
     */
    public function getAddressLine2(): ?string
    {
        return $this->addressLine2;
    }

    /**
     * Sets Address Line 2.
     * The column header from the csv file that should be mapped to the optional field "address_line2"
     *
     * @maps address_line2
     */
    public function setAddressLine2(?string $addressLine2): void
    {
        $this->addressLine2 = $addressLine2;
    }

    /**
     * Returns Company.
     * The column header from the csv file that should be mapped to the optional field "company"
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }

    /**
     * Sets Company.
     * The column header from the csv file that should be mapped to the optional field "company"
     *
     * @maps company
     */
    public function setCompany(?string $company): void
    {
        $this->company = $company;
    }

    /**
     * Returns Address Country.
     * The column header from the csv file that should be mapped to the optional field "address_country"
     */
    public function getAddressCountry(): ?string
    {
        return $this->addressCountry;
    }

    /**
     * Sets Address Country.
     * The column header from the csv file that should be mapped to the optional field "address_country"
     *
     * @maps address_country
     */
    public function setAddressCountry(?string $addressCountry): void
    {
        $this->addressCountry = $addressCountry;
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
        $json['address_line2']   = $this->addressLine2;
        $json['company']         = $this->company;
        $json['address_country'] = $this->addressCountry;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
