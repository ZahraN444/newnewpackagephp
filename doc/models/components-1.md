
# Components 1

## Structure

`Components1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `primaryNumber` | `?string` | Optional | The numeric or alphanumeric part of an address preceding the street name. Often the house, building, or PO Box number. | getPrimaryNumber(): ?string | setPrimaryNumber(?string primaryNumber): void |
| `streetName` | `?string` | Optional | The name of the street. | getStreetName(): ?string | setStreetName(?string streetName): void |
| `city` | `?string` | Optional | **Constraints**: *Maximum Length*: `200` | getCity(): ?string | setCity(?string city): void |
| `state` | `?string` | Optional | The <a href="https://en.wikipedia.org/wiki/ISO_3166-2" target="_blank">ISO 3166-2</a> two letter code for the state.<br>**Constraints**: *Maximum Length*: `2` | getState(): ?string | setState(?string state): void |
| `postalCode` | `?string` | Optional | The postal code.<br>**Constraints**: *Maximum Length*: `12` | getPostalCode(): ?string | setPostalCode(?string postalCode): void |

## Example (as JSON)

```json
{
  "primary_number": "primary_number8",
  "street_name": "street_name8",
  "city": "city8",
  "state": "state6",
  "postal_code": "postal_code0"
}
```

