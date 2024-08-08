
# Address Fields Us

## Structure

`AddressFieldsUs`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `addressLine1` | `string` | Required | The primary number, street name, and directional information.<br>**Constraints**: *Maximum Length*: `64` | getAddressLine1(): string | setAddressLine1(string addressLine1): void |
| `addressLine2` | `?string` | Optional | An optional field containing any information which can't fit into line 1.<br>**Constraints**: *Maximum Length*: `64` | getAddressLine2(): ?string | setAddressLine2(?string addressLine2): void |
| `addressCity` | `string` | Required | **Constraints**: *Maximum Length*: `200` | getAddressCity(): string | setAddressCity(string addressCity): void |
| `addressState` | `string` | Required | 2 letter state short-name code<br>**Constraints**: *Pattern*: `^[a-zA-Z]{2}$` | getAddressState(): string | setAddressState(string addressState): void |
| `addressZip` | `string` | Required | Must follow the ZIP format of `12345` or ZIP+4 format of `12345-1234`.<br>**Constraints**: *Pattern*: `^\d{5}(-\d{4})?$` | getAddressZip(): string | setAddressZip(string addressZip): void |

## Example (as JSON)

```json
{
  "address_line1": "address_line14",
  "address_line2": "address_line22",
  "address_city": "address_city0",
  "address_state": "address_state2",
  "address_zip": "address_zip2"
}
```

