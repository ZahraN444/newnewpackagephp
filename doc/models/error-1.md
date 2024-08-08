
# Error 1

## Structure

`Error1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `message` | `string` | Required | A human-readable message with more details about the error | getMessage(): string | setMessage(string message): void |
| `statusCode` | [`int(FailureStatusCodeEnum)`](../../doc/models/failure-status-code-enum.md) | Required | - | getStatusCode(): int | setStatusCode(int statusCode): void |
| `code` | [`string(CodeEnum)`](../../doc/models/code-enum.md) | Required | - | getCode(): string | setCode(string code): void |

## Example (as JSON)

```json
{
  "message": "Rate limit exceeded. Please wait 5 seconds and try your request again.",
  "status_code": 500,
  "code": "feature_limit_reached"
}
```

