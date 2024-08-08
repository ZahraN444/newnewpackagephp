
# Buckslip Order Editable

## Structure

`BuckslipOrderEditable`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `quantity` | `int` | Required | The quantity of buckslips in the order (minimum 5,000).<br>**Constraints**: `>= 5000`, `<= 10000000` | getQuantity(): int | setQuantity(int quantity): void |

## Example (as JSON)

```json
{
  "quantity": 50
}
```

