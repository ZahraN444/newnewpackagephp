
# Intl Autocompletions Writable

## Structure

`IntlAutocompletionsWritable`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `addressPrefix` | `string` | Required | Only accepts numbers and street names in an alphanumeric format. | getAddressPrefix(): string | setAddressPrefix(string addressPrefix): void |
| `city` | `?string` | Optional | An optional city input used to filter suggestions. Case insensitive and does not match partial abbreviations. | getCity(): ?string | setCity(?string city): void |
| `state` | `?string` | Optional | An optional state input used to filter suggestions. Case insensitive and does not match partial abbreviations. | getState(): ?string | setState(?string state): void |
| `zipCode` | `?string` | Optional | An optional Zip Code input used to filter suggestions. Matches partial entries. | getZipCode(): ?string | setZipCode(?string zipCode): void |
| `country` | [`string(CountryExtendedEnum)`](../../doc/models/country-extended-enum.md) | Required | - | getCountry(): string | setCountry(string country): void |
| `geoIpSort` | `?bool` | Optional | If `true`, sort suggestions by proximity to the IP set in the `X-Forwarded-For` header. | getGeoIpSort(): ?bool | setGeoIpSort(?bool geoIpSort): void |

## Example (as JSON)

```json
{
  "address_prefix": "address_prefix4",
  "city": "city6",
  "state": "state2",
  "zip_code": "zip_code0",
  "country": "ET",
  "geo_ip_sort": false
}
```

