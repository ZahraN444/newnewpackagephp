
# Card Editable

## Structure

`CardEditable`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `description` | `?string` | Optional | Description of the card.<br>**Constraints**: *Maximum Length*: `255` | getDescription(): ?string | setDescription(?string description): void |
| `size` | [`?string(Size1Enum)`](../../doc/models/size-1-enum.md) | Optional | - | getSize(): ?string | setSize(?string size): void |
| `front` | string | Required | This is a container for one-of cases. | getFront(): string | setFront(string front): void |
| `back` | string\|null | Optional | This is a container for one-of cases. | getBack(): ?string | setBack(?string back): void |

## Example (as JSON)

```json
{
  "description": "description8",
  "size": "3.375x2.125",
  "front": "String9",
  "back": "String7"
}
```

