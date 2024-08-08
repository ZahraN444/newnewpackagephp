
# Single Line Address Intl

## Structure

`SingleLineAddressIntl`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `address` | `string` | Required | The entire address in one string (e.g., "370 Water St C1N 1C4").<br>**Constraints**: *Maximum Length*: `500` | getAddress(): string | setAddress(string address): void |
| `country` | [`string(CountryExtendedEnum)`](../../doc/models/country-extended-enum.md) | Required | - | getCountry(): string | setCountry(string country): void |

## Example (as JSON)

```json
{
  "address": "address6",
  "country": "CY"
}
```

