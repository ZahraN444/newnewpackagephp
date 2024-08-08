
# Buckslip Updatable

## Structure

`BuckslipUpdatable`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `description` | `?string` | Optional | Description of the buckslip.<br>**Constraints**: *Maximum Length*: `255` | getDescription(): ?string | setDescription(?string description): void |
| `autoReorder` | `?bool` | Optional | Allows for auto reordering | getAutoReorder(): ?bool | setAutoReorder(?bool autoReorder): void |
| `reorderQuantity` | `?float` | Optional | The quantity of items to be reordered (only required when auto_reorder is true).<br>**Constraints**: `>= 5000`, `<= 10000000` | getReorderQuantity(): ?float | setReorderQuantity(?float reorderQuantity): void |

## Example (as JSON)

```json
{
  "description": "description0",
  "auto_reorder": false,
  "reorder_quantity": 114.28
}
```

