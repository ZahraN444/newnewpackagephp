
# Us Autocompletions

## Structure

`UsAutocompletions`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Unique identifier prefixed with `us_auto_`.<br>**Constraints**: *Pattern*: `^us_auto_[a-zA-Z0-9]+$` | getId(): ?string | setId(?string id): void |
| `suggestions` | [`?(Suggestions[])`](../../doc/models/suggestions.md) | Optional | An array of objects representing suggested addresses.<br>**Constraints**: *Minimum Items*: `0`, *Maximum Items*: `10` | getSuggestions(): ?array | setSuggestions(?array suggestions): void |
| `object` | [`?string(Object13Enum)`](../../doc/models/object-13-enum.md) | Optional | - | getObject(): ?string | setObject(?string object): void |

## Example (as JSON)

```json
{
  "id": "id2",
  "suggestions": [
    {
      "primary_line": "primary_line6",
      "city": "city4",
      "state": "state8",
      "zip_code": "zip_code0",
      "object": "us_autocompletion"
    },
    {
      "primary_line": "primary_line6",
      "city": "city4",
      "state": "state8",
      "zip_code": "zip_code0",
      "object": "us_autocompletion"
    }
  ],
  "object": "us_autocompletion"
}
```

