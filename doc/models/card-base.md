
# Card Base

## Structure

`CardBase`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `description` | `?string` | Optional | Description of the card.<br>**Constraints**: *Maximum Length*: `255` | getDescription(): ?string | setDescription(?string description): void |
| `size` | [`?string(Size1Enum)`](../../doc/models/size-1-enum.md) | Optional | - | getSize(): ?string | setSize(?string size): void |

## Example (as JSON)

```json
{
  "description": "description0",
  "size": "3.375x2.125"
}
```

