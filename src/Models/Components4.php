<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use stdClass;

class Components4 implements \JsonSerializable
{
    /**
     * @var string
     */
    private $primaryNumber;

    /**
     * @var string
     */
    private $streetPredirection;

    /**
     * @var string
     */
    private $streetName;

    /**
     * @var string
     */
    private $streetSuffix;

    /**
     * @var string
     */
    private $streetPostdirection;

    /**
     * @var string
     */
    private $secondaryDesignator;

    /**
     * @var string
     */
    private $secondaryNumber;

    /**
     * @var string
     */
    private $pmbDesignator;

    /**
     * @var string
     */
    private $pmbNumber;

    /**
     * @var string
     */
    private $extraSecondaryDesignator;

    /**
     * @var string
     */
    private $extraSecondaryNumber;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $zipCode;

    /**
     * @var string
     */
    private $zipCodePlus4;

    /**
     * @var string
     */
    private $zipCodeType;

    /**
     * @var string
     */
    private $deliveryPointBarcode;

    /**
     * @var string
     */
    private $addressType;

    /**
     * @var string
     */
    private $recordType;

    /**
     * @var bool
     */
    private $defaultBuildingAddress;

    /**
     * @var string
     */
    private $county;

    /**
     * @var string
     */
    private $countyFips;

    /**
     * @var string
     */
    private $carrierRoute;

    /**
     * @var string
     */
    private $carrierRouteType;

    /**
     * @var array
     */
    private $latitude = [];

    /**
     * @var array
     */
    private $longitude = [];

    /**
     * @param string $primaryNumber
     * @param string $streetPredirection
     * @param string $streetName
     * @param string $streetSuffix
     * @param string $streetPostdirection
     * @param string $secondaryDesignator
     * @param string $secondaryNumber
     * @param string $pmbDesignator
     * @param string $pmbNumber
     * @param string $extraSecondaryDesignator
     * @param string $extraSecondaryNumber
     * @param string $city
     * @param string $state
     * @param string $zipCode
     * @param string $zipCodePlus4
     * @param string $zipCodeType
     * @param string $deliveryPointBarcode
     * @param string $addressType
     * @param string $recordType
     * @param bool $defaultBuildingAddress
     * @param string $county
     * @param string $countyFips
     * @param string $carrierRoute
     * @param string $carrierRouteType
     */
    public function __construct(
        string $primaryNumber,
        string $streetPredirection,
        string $streetName,
        string $streetSuffix,
        string $streetPostdirection,
        string $secondaryDesignator,
        string $secondaryNumber,
        string $pmbDesignator,
        string $pmbNumber,
        string $extraSecondaryDesignator,
        string $extraSecondaryNumber,
        string $city,
        string $state,
        string $zipCode,
        string $zipCodePlus4,
        string $zipCodeType,
        string $deliveryPointBarcode,
        string $addressType,
        string $recordType,
        bool $defaultBuildingAddress,
        string $county,
        string $countyFips,
        string $carrierRoute,
        string $carrierRouteType
    ) {
        $this->primaryNumber = $primaryNumber;
        $this->streetPredirection = $streetPredirection;
        $this->streetName = $streetName;
        $this->streetSuffix = $streetSuffix;
        $this->streetPostdirection = $streetPostdirection;
        $this->secondaryDesignator = $secondaryDesignator;
        $this->secondaryNumber = $secondaryNumber;
        $this->pmbDesignator = $pmbDesignator;
        $this->pmbNumber = $pmbNumber;
        $this->extraSecondaryDesignator = $extraSecondaryDesignator;
        $this->extraSecondaryNumber = $extraSecondaryNumber;
        $this->city = $city;
        $this->state = $state;
        $this->zipCode = $zipCode;
        $this->zipCodePlus4 = $zipCodePlus4;
        $this->zipCodeType = $zipCodeType;
        $this->deliveryPointBarcode = $deliveryPointBarcode;
        $this->addressType = $addressType;
        $this->recordType = $recordType;
        $this->defaultBuildingAddress = $defaultBuildingAddress;
        $this->county = $county;
        $this->countyFips = $countyFips;
        $this->carrierRoute = $carrierRoute;
        $this->carrierRouteType = $carrierRouteType;
    }

    /**
     * Returns Primary Number.
     * The numeric or alphanumeric part of an address preceding the street name. Often the house, building,
     * or PO Box number.
     */
    public function getPrimaryNumber(): string
    {
        return $this->primaryNumber;
    }

    /**
     * Sets Primary Number.
     * The numeric or alphanumeric part of an address preceding the street name. Often the house, building,
     * or PO Box number.
     *
     * @required
     * @maps primary_number
     */
    public function setPrimaryNumber(string $primaryNumber): void
    {
        $this->primaryNumber = $primaryNumber;
    }

    /**
     * Returns Street Predirection.
     */
    public function getStreetPredirection(): string
    {
        return $this->streetPredirection;
    }

    /**
     * Sets Street Predirection.
     *
     * @required
     * @maps street_predirection
     * @factory \LobLib\Models\StreetPredirectionEnum::checkValue
     */
    public function setStreetPredirection(string $streetPredirection): void
    {
        $this->streetPredirection = $streetPredirection;
    }

    /**
     * Returns Street Name.
     * The name of the street.
     */
    public function getStreetName(): string
    {
        return $this->streetName;
    }

    /**
     * Sets Street Name.
     * The name of the street.
     *
     * @required
     * @maps street_name
     */
    public function setStreetName(string $streetName): void
    {
        $this->streetName = $streetName;
    }

    /**
     * Returns Street Suffix.
     * The standard USPS abbreviation for the street suffix (`ST`, `AVE`, `BLVD`, etc).
     */
    public function getStreetSuffix(): string
    {
        return $this->streetSuffix;
    }

    /**
     * Sets Street Suffix.
     * The standard USPS abbreviation for the street suffix (`ST`, `AVE`, `BLVD`, etc).
     *
     * @required
     * @maps street_suffix
     */
    public function setStreetSuffix(string $streetSuffix): void
    {
        $this->streetSuffix = $streetSuffix;
    }

    /**
     * Returns Street Postdirection.
     */
    public function getStreetPostdirection(): string
    {
        return $this->streetPostdirection;
    }

    /**
     * Sets Street Postdirection.
     *
     * @required
     * @maps street_postdirection
     * @factory \LobLib\Models\StreetPostdirectionEnum::checkValue
     */
    public function setStreetPostdirection(string $streetPostdirection): void
    {
        $this->streetPostdirection = $streetPostdirection;
    }

    /**
     * Returns Secondary Designator.
     * The standard USPS abbreviation describing the `components[secondary_number]` (`STE`, `APT`, `BLDG`,
     * etc).
     */
    public function getSecondaryDesignator(): string
    {
        return $this->secondaryDesignator;
    }

    /**
     * Sets Secondary Designator.
     * The standard USPS abbreviation describing the `components[secondary_number]` (`STE`, `APT`, `BLDG`,
     * etc).
     *
     * @required
     * @maps secondary_designator
     */
    public function setSecondaryDesignator(string $secondaryDesignator): void
    {
        $this->secondaryDesignator = $secondaryDesignator;
    }

    /**
     * Returns Secondary Number.
     * Number of the apartment/unit/etc.
     */
    public function getSecondaryNumber(): string
    {
        return $this->secondaryNumber;
    }

    /**
     * Sets Secondary Number.
     * Number of the apartment/unit/etc.
     *
     * @required
     * @maps secondary_number
     */
    public function setSecondaryNumber(string $secondaryNumber): void
    {
        $this->secondaryNumber = $secondaryNumber;
    }

    /**
     * Returns Pmb Designator.
     * Designator of a <a href="https://en.wikipedia.org/wiki/Commercial_mail_receiving_agency"
     * target="_blank">CMRA-authorized</a> private mailbox.
     */
    public function getPmbDesignator(): string
    {
        return $this->pmbDesignator;
    }

    /**
     * Sets Pmb Designator.
     * Designator of a <a href="https://en.wikipedia.org/wiki/Commercial_mail_receiving_agency"
     * target="_blank">CMRA-authorized</a> private mailbox.
     *
     * @required
     * @maps pmb_designator
     */
    public function setPmbDesignator(string $pmbDesignator): void
    {
        $this->pmbDesignator = $pmbDesignator;
    }

    /**
     * Returns Pmb Number.
     * Number of a <a href="https://en.wikipedia.org/wiki/Commercial_mail_receiving_agency"
     * target="_blank">CMRA-authorized</a> private mailbox.
     */
    public function getPmbNumber(): string
    {
        return $this->pmbNumber;
    }

    /**
     * Sets Pmb Number.
     * Number of a <a href="https://en.wikipedia.org/wiki/Commercial_mail_receiving_agency"
     * target="_blank">CMRA-authorized</a> private mailbox.
     *
     * @required
     * @maps pmb_number
     */
    public function setPmbNumber(string $pmbNumber): void
    {
        $this->pmbNumber = $pmbNumber;
    }

    /**
     * Returns Extra Secondary Designator.
     * An extra (often unnecessary) secondary designator provided with the input address.
     */
    public function getExtraSecondaryDesignator(): string
    {
        return $this->extraSecondaryDesignator;
    }

    /**
     * Sets Extra Secondary Designator.
     * An extra (often unnecessary) secondary designator provided with the input address.
     *
     * @required
     * @maps extra_secondary_designator
     */
    public function setExtraSecondaryDesignator(string $extraSecondaryDesignator): void
    {
        $this->extraSecondaryDesignator = $extraSecondaryDesignator;
    }

    /**
     * Returns Extra Secondary Number.
     * An extra (often unnecessary) secondary number provided with the input address.
     */
    public function getExtraSecondaryNumber(): string
    {
        return $this->extraSecondaryNumber;
    }

    /**
     * Sets Extra Secondary Number.
     * An extra (often unnecessary) secondary number provided with the input address.
     *
     * @required
     * @maps extra_secondary_number
     */
    public function setExtraSecondaryNumber(string $extraSecondaryNumber): void
    {
        $this->extraSecondaryNumber = $extraSecondaryNumber;
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
     * The 5-digit ZIP code
     */
    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    /**
     * Sets Zip Code.
     * The 5-digit ZIP code
     *
     * @required
     * @maps zip_code
     */
    public function setZipCode(string $zipCode): void
    {
        $this->zipCode = $zipCode;
    }

    /**
     * Returns Zip Code Plus 4.
     */
    public function getZipCodePlus4(): string
    {
        return $this->zipCodePlus4;
    }

    /**
     * Sets Zip Code Plus 4.
     *
     * @required
     * @maps zip_code_plus_4
     */
    public function setZipCodePlus4(string $zipCodePlus4): void
    {
        $this->zipCodePlus4 = $zipCodePlus4;
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
     * Returns Delivery Point Barcode.
     * A 12-digit identifier that uniquely identifies a delivery point (location where mail can be sent and
     * received). It consists of the 5-digit ZIP code (`zip_code`), 4-digit ZIP+4 add-on
     * (`zip_code_plus_4`), 2-digit delivery point, and 1-digit delivery point check digit.
     */
    public function getDeliveryPointBarcode(): string
    {
        return $this->deliveryPointBarcode;
    }

    /**
     * Sets Delivery Point Barcode.
     * A 12-digit identifier that uniquely identifies a delivery point (location where mail can be sent and
     * received). It consists of the 5-digit ZIP code (`zip_code`), 4-digit ZIP+4 add-on
     * (`zip_code_plus_4`), 2-digit delivery point, and 1-digit delivery point check digit.
     *
     * @required
     * @maps delivery_point_barcode
     */
    public function setDeliveryPointBarcode(string $deliveryPointBarcode): void
    {
        $this->deliveryPointBarcode = $deliveryPointBarcode;
    }

    /**
     * Returns Address Type.
     */
    public function getAddressType(): string
    {
        return $this->addressType;
    }

    /**
     * Sets Address Type.
     *
     * @required
     * @maps address_type
     * @factory \LobLib\Models\AddressTypeEnum::checkValue
     */
    public function setAddressType(string $addressType): void
    {
        $this->addressType = $addressType;
    }

    /**
     * Returns Record Type.
     */
    public function getRecordType(): string
    {
        return $this->recordType;
    }

    /**
     * Sets Record Type.
     *
     * @required
     * @maps record_type
     * @factory \LobLib\Models\RecordTypeEnum::checkValue
     */
    public function setRecordType(string $recordType): void
    {
        $this->recordType = $recordType;
    }

    /**
     * Returns Default Building Address.
     * Designates whether or not the address is the default address for a building containing multiple
     * delivery points.
     */
    public function getDefaultBuildingAddress(): bool
    {
        return $this->defaultBuildingAddress;
    }

    /**
     * Sets Default Building Address.
     * Designates whether or not the address is the default address for a building containing multiple
     * delivery points.
     *
     * @required
     * @maps default_building_address
     */
    public function setDefaultBuildingAddress(bool $defaultBuildingAddress): void
    {
        $this->defaultBuildingAddress = $defaultBuildingAddress;
    }

    /**
     * Returns County.
     * County name of the address city.
     */
    public function getCounty(): string
    {
        return $this->county;
    }

    /**
     * Sets County.
     * County name of the address city.
     *
     * @required
     * @maps county
     */
    public function setCounty(string $county): void
    {
        $this->county = $county;
    }

    /**
     * Returns County Fips.
     * A 5-digit <a href="https://en.wikipedia.org/wiki/FIPS_county_code" target="_blank">FIPS county
     * code</a> which uniquely identifies `components[county]`. It consists of a 2-digit state code and a 3-
     * digit county code.
     */
    public function getCountyFips(): string
    {
        return $this->countyFips;
    }

    /**
     * Sets County Fips.
     * A 5-digit <a href="https://en.wikipedia.org/wiki/FIPS_county_code" target="_blank">FIPS county
     * code</a> which uniquely identifies `components[county]`. It consists of a 2-digit state code and a 3-
     * digit county code.
     *
     * @required
     * @maps county_fips
     */
    public function setCountyFips(string $countyFips): void
    {
        $this->countyFips = $countyFips;
    }

    /**
     * Returns Carrier Route.
     * A 4-character code assigned to a mail delivery route within a ZIP code.
     */
    public function getCarrierRoute(): string
    {
        return $this->carrierRoute;
    }

    /**
     * Sets Carrier Route.
     * A 4-character code assigned to a mail delivery route within a ZIP code.
     *
     * @required
     * @maps carrier_route
     */
    public function setCarrierRoute(string $carrierRoute): void
    {
        $this->carrierRoute = $carrierRoute;
    }

    /**
     * Returns Carrier Route Type.
     */
    public function getCarrierRouteType(): string
    {
        return $this->carrierRouteType;
    }

    /**
     * Sets Carrier Route Type.
     *
     * @required
     * @maps carrier_route_type
     * @factory \LobLib\Models\CarrierRouteTypeEnum::checkValue
     */
    public function setCarrierRouteType(string $carrierRouteType): void
    {
        $this->carrierRouteType = $carrierRouteType;
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
        if (count($this->latitude) == 0) {
            return null;
        }
        return $this->latitude['value'];
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
        $this->latitude['value'] = $latitude;
    }

    /**
     * Unsets Latitude.
     * A positive or negative decimal indicating the geographic latitude of the address, specifying the
     * north-to-south position of a location. This should be used with `longitude` to pinpoint locations on
     * a map. Will not be returned for undeliverable addresses or military addresses (state is `AA`, `AE`,
     * or `AP`).
     */
    public function unsetLatitude(): void
    {
        $this->latitude = [];
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
        if (count($this->longitude) == 0) {
            return null;
        }
        return $this->longitude['value'];
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
        $this->longitude['value'] = $longitude;
    }

    /**
     * Unsets Longitude.
     * A positive or negative decimal indicating the geographic longitude of the address, specifying the
     * north-to-south position of a location. This should be used with `latitude` to pinpoint locations on
     * a map. Will not be returned for undeliverable addresses or military addresses (state is `AA`, `AE`,
     * or `AP`).
     */
    public function unsetLongitude(): void
    {
        $this->longitude = [];
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
        $json['primary_number']             = $this->primaryNumber;
        $json['street_predirection']        = StreetPredirectionEnum::checkValue($this->streetPredirection);
        $json['street_name']                = $this->streetName;
        $json['street_suffix']              = $this->streetSuffix;
        $json['street_postdirection']       = StreetPostdirectionEnum::checkValue($this->streetPostdirection);
        $json['secondary_designator']       = $this->secondaryDesignator;
        $json['secondary_number']           = $this->secondaryNumber;
        $json['pmb_designator']             = $this->pmbDesignator;
        $json['pmb_number']                 = $this->pmbNumber;
        $json['extra_secondary_designator'] = $this->extraSecondaryDesignator;
        $json['extra_secondary_number']     = $this->extraSecondaryNumber;
        $json['city']                       = $this->city;
        $json['state']                      = $this->state;
        $json['zip_code']                   = $this->zipCode;
        $json['zip_code_plus_4']            = $this->zipCodePlus4;
        $json['zip_code_type']              = ZipCodeTypeEnum::checkValue($this->zipCodeType);
        $json['delivery_point_barcode']     = $this->deliveryPointBarcode;
        $json['address_type']               = AddressTypeEnum::checkValue($this->addressType);
        $json['record_type']                = RecordTypeEnum::checkValue($this->recordType);
        $json['default_building_address']   = $this->defaultBuildingAddress;
        $json['county']                     = $this->county;
        $json['county_fips']                = $this->countyFips;
        $json['carrier_route']              = $this->carrierRoute;
        $json['carrier_route_type']         = CarrierRouteTypeEnum::checkValue($this->carrierRouteType);
        if (!empty($this->latitude)) {
            $json['latitude']               = $this->latitude['value'];
        }
        if (!empty($this->longitude)) {
            $json['longitude']              = $this->longitude['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
