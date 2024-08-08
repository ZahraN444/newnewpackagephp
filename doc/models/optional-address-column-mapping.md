
# Optional Address Column Mapping

## Structure

`OptionalAddressColumnMapping`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `addressLine2` | `?string` | Required | The column header from the csv file that should be mapped to the optional field "address_line2" | getAddressLine2(): ?string | setAddressLine2(?string addressLine2): void |
| `company` | `?string` | Required | The column header from the csv file that should be mapped to the optional field "company" | getCompany(): ?string | setCompany(?string company): void |
| `addressCountry` | `?string` | Required | The column header from the csv file that should be mapped to the optional field "address_country" | getAddressCountry(): ?string | setAddressCountry(?string addressCountry): void |

## Example (as JSON)

```json
{
  "address_line2": "address_line28",
  "company": "company4",
  "address_country": "address_country2"
}
```

