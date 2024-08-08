
# Us Components

A nested object containing a breakdown of each component of an address.

## Structure

`UsComponents`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `primaryNumber` | `string` | Required | The numeric or alphanumeric part of an address preceding the street name. Often the house, building, or PO Box number. | getPrimaryNumber(): string | setPrimaryNumber(string primaryNumber): void |
| `streetPredirection` | [`string(StreetPredirectionEnum)`](../../doc/models/street-predirection-enum.md) | Required | - | getStreetPredirection(): string | setStreetPredirection(string streetPredirection): void |
| `streetName` | `string` | Required | The name of the street. | getStreetName(): string | setStreetName(string streetName): void |
| `streetSuffix` | `string` | Required | The standard USPS abbreviation for the street suffix (`ST`, `AVE`, `BLVD`, etc). | getStreetSuffix(): string | setStreetSuffix(string streetSuffix): void |
| `streetPostdirection` | [`string(StreetPostdirectionEnum)`](../../doc/models/street-postdirection-enum.md) | Required | - | getStreetPostdirection(): string | setStreetPostdirection(string streetPostdirection): void |
| `secondaryDesignator` | `string` | Required | The standard USPS abbreviation describing the `components[secondary_number]` (`STE`, `APT`, `BLDG`, etc). | getSecondaryDesignator(): string | setSecondaryDesignator(string secondaryDesignator): void |
| `secondaryNumber` | `string` | Required | Number of the apartment/unit/etc. | getSecondaryNumber(): string | setSecondaryNumber(string secondaryNumber): void |
| `pmbDesignator` | `string` | Required | Designator of a <a href="https://en.wikipedia.org/wiki/Commercial_mail_receiving_agency" target="_blank">CMRA-authorized</a> private mailbox. | getPmbDesignator(): string | setPmbDesignator(string pmbDesignator): void |
| `pmbNumber` | `string` | Required | Number of a <a href="https://en.wikipedia.org/wiki/Commercial_mail_receiving_agency" target="_blank">CMRA-authorized</a> private mailbox. | getPmbNumber(): string | setPmbNumber(string pmbNumber): void |
| `extraSecondaryDesignator` | `string` | Required | An extra (often unnecessary) secondary designator provided with the input address. | getExtraSecondaryDesignator(): string | setExtraSecondaryDesignator(string extraSecondaryDesignator): void |
| `extraSecondaryNumber` | `string` | Required | An extra (often unnecessary) secondary number provided with the input address. | getExtraSecondaryNumber(): string | setExtraSecondaryNumber(string extraSecondaryNumber): void |
| `city` | `string` | Required | **Constraints**: *Maximum Length*: `200` | getCity(): string | setCity(string city): void |
| `state` | `string` | Required | The <a href="https://en.wikipedia.org/wiki/ISO_3166-2" target="_blank">ISO 3166-2</a> two letter code for the state.<br>**Constraints**: *Maximum Length*: `2` | getState(): string | setState(string state): void |
| `zipCode` | `string` | Required | The 5-digit ZIP code<br>**Constraints**: *Pattern*: `^\d{5}$` | getZipCode(): string | setZipCode(string zipCode): void |
| `zipCodePlus4` | `string` | Required | **Constraints**: *Pattern*: `^\d{4}$` | getZipCodePlus4(): string | setZipCodePlus4(string zipCodePlus4): void |
| `zipCodeType` | [`string(ZipCodeTypeEnum)`](../../doc/models/zip-code-type-enum.md) | Required | - | getZipCodeType(): string | setZipCodeType(string zipCodeType): void |
| `deliveryPointBarcode` | `string` | Required | A 12-digit identifier that uniquely identifies a delivery point (location where mail can be sent and received). It consists of the 5-digit ZIP code (`zip_code`), 4-digit ZIP+4 add-on (`zip_code_plus_4`), 2-digit delivery point, and 1-digit delivery point check digit. | getDeliveryPointBarcode(): string | setDeliveryPointBarcode(string deliveryPointBarcode): void |
| `addressType` | [`string(AddressTypeEnum)`](../../doc/models/address-type-enum.md) | Required | - | getAddressType(): string | setAddressType(string addressType): void |
| `recordType` | [`string(RecordTypeEnum)`](../../doc/models/record-type-enum.md) | Required | - | getRecordType(): string | setRecordType(string recordType): void |
| `defaultBuildingAddress` | `bool` | Required | Designates whether or not the address is the default address for a building containing multiple delivery points. | getDefaultBuildingAddress(): bool | setDefaultBuildingAddress(bool defaultBuildingAddress): void |
| `county` | `string` | Required | County name of the address city. | getCounty(): string | setCounty(string county): void |
| `countyFips` | `string` | Required | A 5-digit <a href="https://en.wikipedia.org/wiki/FIPS_county_code" target="_blank">FIPS county code</a> which uniquely identifies `components[county]`. It consists of a 2-digit state code and a 3-digit county code.<br>**Constraints**: *Pattern*: `\d{5}` | getCountyFips(): string | setCountyFips(string countyFips): void |
| `carrierRoute` | `string` | Required | A 4-character code assigned to a mail delivery route within a ZIP code. | getCarrierRoute(): string | setCarrierRoute(string carrierRoute): void |
| `carrierRouteType` | [`string(CarrierRouteTypeEnum)`](../../doc/models/carrier-route-type-enum.md) | Required | - | getCarrierRouteType(): string | setCarrierRouteType(string carrierRouteType): void |
| `latitude` | `?float` | Optional | A positive or negative decimal indicating the geographic latitude of the address, specifying the north-to-south position of a location. This should be used with `longitude` to pinpoint locations on a map. Will not be returned for undeliverable addresses or military addresses (state is `AA`, `AE`, or `AP`). | getLatitude(): ?float | setLatitude(?float latitude): void |
| `longitude` | `?float` | Optional | A positive or negative decimal indicating the geographic longitude of the address, specifying the north-to-south position of a location. This should be used with `latitude` to pinpoint locations on a map. Will not be returned for undeliverable addresses or military addresses (state is `AA`, `AE`, or `AP`). | getLongitude(): ?float | setLongitude(?float longitude): void |

## Example (as JSON)

```json
{
  "primary_number": "primary_number2",
  "street_predirection": "SE",
  "street_name": "street_name4",
  "street_suffix": "street_suffix2",
  "street_postdirection": "SE",
  "secondary_designator": "secondary_designator8",
  "secondary_number": "secondary_number4",
  "pmb_designator": "pmb_designator4",
  "pmb_number": "pmb_number8",
  "extra_secondary_designator": "extra_secondary_designator6",
  "extra_secondary_number": "extra_secondary_number8",
  "city": "city8",
  "state": "state2",
  "zip_code": "zip_code6",
  "zip_code_plus_4": "zip_code_plus_42",
  "zip_code_type": "standard",
  "delivery_point_barcode": "delivery_point_barcode8",
  "address_type": "residential",
  "record_type": "rural_route",
  "default_building_address": false,
  "county": "county4",
  "county_fips": "county_fips8",
  "carrier_route": "carrier_route2",
  "carrier_route_type": "po_box",
  "latitude": 45.84,
  "longitude": 207.96
}
```

