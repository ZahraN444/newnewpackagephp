
# Self Mailers 0 Error 1

## Structure

`SelfMailers0Error1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `error` | [`Error1`](../../doc/models/error-1.md) | Required | - | getError(): Error1 | setError(Error1 error): void |

## Example (as JSON)

```json
{
  "error": {
    "message": "Rate limit exceeded. Please wait 5 seconds and try your request again.",
    "status_code": 413,
    "code": "service_unavailable"
  }
}
```

