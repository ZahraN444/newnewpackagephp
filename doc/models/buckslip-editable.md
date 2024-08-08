
# Buckslip Editable

## Structure

`BuckslipEditable`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `description` | `?string` | Optional | Description of the buckslip.<br>**Constraints**: *Maximum Length*: `255` | getDescription(): ?string | setDescription(?string description): void |
| `size` | [`?string(SizeEnum)`](../../doc/models/size-enum.md) | Optional | - | getSize(): ?string | setSize(?string size): void |
| `front` | string | Required | This is a container for one-of cases. | getFront(): string | setFront(string front): void |
| `back` | string\|null | Optional | This is a container for one-of cases. | getBack(): ?string | setBack(?string back): void |

## Example (as JSON)

```json
{
  "description": "description2",
  "size": "8.75x3.75",
  "front": "String9",
  "back": "String5"
}
```

