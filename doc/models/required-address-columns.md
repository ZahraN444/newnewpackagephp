
# Required Address Columns

The mapping of column headers in your file to Lob-required fields for the resource created. See our <a href="https://help.lob.com/print-and-mail/building-a-mail-strategy/campaign-or-triggered-sends/campaign-audience-guide#required-columns-2" target="_blank">Campaign Audience Guide</a> for additional details.

## Structure

`RequiredAddressColumns`

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
  "name": "recipient_name",
  "address_line1": "primary_line",
  "address_city": "city",
  "address_state": "state",
  "address_zip": "zip_code"
}
```

