
# Us Autocompletions Writable

## Structure

`UsAutocompletionsWritable`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `addressPrefix` | `string` | Required | Only accepts numbers and street names in an alphanumeric format. | getAddressPrefix(): string | setAddressPrefix(string addressPrefix): void |
| `city` | `?string` | Optional | An optional city input used to filter suggestions. Case insensitive and does not match partial abbreviations. | getCity(): ?string | setCity(?string city): void |
| `state` | `?string` | Optional | An optional state input used to filter suggestions. Case insensitive and does not match partial abbreviations. | getState(): ?string | setState(?string state): void |
| `zipCode` | `?string` | Optional | An optional ZIP Code input used to filter suggestions. Matches partial entries. | getZipCode(): ?string | setZipCode(?string zipCode): void |
| `geoIpSort` | `?bool` | Optional | If `true`, sort suggestions by proximity to the IP set in the `X-Forwarded-For` header. | getGeoIpSort(): ?bool | setGeoIpSort(?bool geoIpSort): void |

## Example (as JSON)

```json
{
  "address_prefix": "address_prefix8",
  "city": "city0",
  "state": "state6",
  "zip_code": "zip_code4",
  "geo_ip_sort": false
}
```

