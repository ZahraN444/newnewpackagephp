
# Datum

## Structure

`Datum`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `rowNumber` | `?float` | Optional | The row number of the csv file containing this data. | getRowNumber(): ?float | setRowNumber(?float rowNumber): void |
| `status` | [`?string(Status4Enum)`](../../doc/models/status-4-enum.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `errorMessage` | `?string` | Optional | The error message detailing the reason why processing the line item failed. | getErrorMessage(): ?string | setErrorMessage(?string errorMessage): void |
| `mailpieceId` | `?string` | Optional | The mailpiece id created from the line item when it was validated. | getMailpieceId(): ?string | setMailpieceId(?string mailpieceId): void |
| `originalData` | [`?array`](../../doc/models/object-enum.md) | Optional | Key-value pairs where each key is the column header and each value is the value of the column for the row. | getOriginalData(): ?array | setOriginalData(?array originalData): void |

## Example (as JSON)

```json
{
  "rowNumber": 28.48,
  "status": "Processing",
  "errorMessage": "errorMessage0",
  "mailpieceId": "mailpieceId8",
  "originalData": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

