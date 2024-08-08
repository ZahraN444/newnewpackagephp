
# Validation Error

## Structure

`ValidationError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `loc` | array<string\|int> | Required | This is Array of a container for any-of cases. | getLoc(): array | setLoc(array loc): void |
| `msg` | `string` | Required | - | getMsg(): string | setMsg(string msg): void |
| `type` | `string` | Required | - | getType(): string | setType(string type): void |

## Example (as JSON)

```json
{
  "loc": [
    "String9",
    "String0"
  ],
  "msg": "msg4",
  "type": "type8"
}
```

