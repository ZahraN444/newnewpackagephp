
# Multiple Components List

## Structure

`MultipleComponentsList`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `addresses` | [`MultipleComponents[]`](../../doc/models/multiple-components.md) | Required | **Constraints**: *Minimum Items*: `1`, *Maximum Items*: `20` | getAddresses(): array | setAddresses(array addresses): void |

## Example (as JSON)

```json
{
  "addresses": [
    {
      "recipient": "recipient6",
      "primary_line": "primary_line4",
      "secondary_line": "secondary_line0",
      "urbanization": "urbanization6",
      "city": "city4",
      "state": "state0",
      "zip_code": "zip_code8"
    }
  ]
}
```

