
# Beforeafter

## Structure

`Beforeafter`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `before` | `string` | Required | A reference to a list entry used for paginating to the previous set of entries. This field is pre-populated in the `previous_url` field in the return response. | getBefore(): string | setBefore(string before): void |
| `after` | `string` | Required | A reference to a list entry used for paginating to the next set of entries. This field is pre-populated in the `next_url` field in the return response. | getAfter(): string | setAfter(string after): void |

## Example (as JSON)

```json
{
  "before": "before4",
  "after": "after6"
}
```

