
# Address Fields Intl

## Structure

`AddressFieldsIntl`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `addressLine1` | `string` | Required | The primary number, street name, and directional information.<br>**Constraints**: *Maximum Length*: `200` | getAddressLine1(): string | setAddressLine1(string addressLine1): void |
| `addressLine2` | `?string` | Optional | An optional field containing any information which can't fit into line 1.<br>**Constraints**: *Maximum Length*: `200` | getAddressLine2(): ?string | setAddressLine2(?string addressLine2): void |
| `addressCity` | `?string` | Optional | **Constraints**: *Maximum Length*: `200` | getAddressCity(): ?string | setAddressCity(?string addressCity): void |
| `addressState` | `?string` | Optional | **Constraints**: *Maximum Length*: `200` | getAddressState(): ?string | setAddressState(?string addressState): void |
| `addressZip` | `?string` | Optional | Optional postal code.<br>**Constraints**: *Maximum Length*: `40` | getAddressZip(): ?string | setAddressZip(?string addressZip): void |

## Example (as JSON)

```json
{
  "address_line1": "address_line18",
  "address_line2": "address_line20",
  "address_city": "address_city8",
  "address_state": "address_state0",
  "address_zip": "address_zip0"
}
```

