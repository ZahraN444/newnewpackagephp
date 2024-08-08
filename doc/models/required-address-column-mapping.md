
# Required Address Column Mapping

## Structure

`RequiredAddressColumnMapping`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Required | The column header from the csv file that should be mapped to the required field `name` | getName(): ?string | setName(?string name): void |
| `addressLine1` | `?string` | Required | The column header from the csv file that should be mapped to the required field `address_line1` | getAddressLine1(): ?string | setAddressLine1(?string addressLine1): void |
| `addressCity` | `?string` | Required | The column header from the csv file that should be mapped to the required field `address_city` | getAddressCity(): ?string | setAddressCity(?string addressCity): void |
| `addressState` | `?string` | Required | The column header from the csv file that should be mapped to the required field `address_state` | getAddressState(): ?string | setAddressState(?string addressState): void |
| `addressZip` | `?string` | Required | The column header from the csv file that should be mapped to the required field `address_zip` | getAddressZip(): ?string | setAddressZip(?string addressZip): void |

## Example (as JSON)

```json
{
  "name": "name4",
  "address_line1": "address_line18",
  "address_city": "address_city4",
  "address_state": "address_state6",
  "address_zip": "address_zip6"
}
```

