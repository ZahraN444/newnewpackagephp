
# Multiple Components Intl

## Structure

`MultipleComponentsIntl`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `recipient` | `?string` | Optional | The intended recipient, typically a person's or firm's name.<br>**Constraints**: *Maximum Length*: `500` | getRecipient(): ?string | setRecipient(?string recipient): void |
| `primaryLine` | `string` | Required | The primary delivery line (usually the street address) of the address.<br>**Constraints**: *Maximum Length*: `200` | getPrimaryLine(): string | setPrimaryLine(string primaryLine): void |
| `secondaryLine` | `?string` | Optional | The secondary delivery line of the address. This field is typically empty but may contain information if `primary_line` is too long.<br>**Constraints**: *Maximum Length*: `500` | getSecondaryLine(): ?string | setSecondaryLine(?string secondaryLine): void |
| `city` | `?string` | Optional | **Constraints**: *Maximum Length*: `200` | getCity(): ?string | setCity(?string city): void |
| `state` | `?string` | Optional | The name of the state. | getState(): ?string | setState(?string state): void |
| `postalCode` | `?string` | Optional | The postal code.<br>**Constraints**: *Maximum Length*: `12` | getPostalCode(): ?string | setPostalCode(?string postalCode): void |
| `country` | [`string(CountryExtendedEnum)`](../../doc/models/country-extended-enum.md) | Required | - | getCountry(): string | setCountry(string country): void |

## Example (as JSON)

```json
{
  "recipient": "recipient0",
  "primary_line": "primary_line8",
  "secondary_line": "secondary_line4",
  "city": "city8",
  "state": "state4",
  "postal_code": "postal_code0",
  "country": "CG"
}
```

