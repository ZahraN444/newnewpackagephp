
# Upload Export Error 1 Exception

## Structure

`UploadExportError1Exception`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | [`int(Code1Enum)`](../../doc/models/code-1-enum.md) | Required | - | getCode(): int | setCode(int code): void |
| `message` | `string` | Required | A human-readable message with more details about the error | getMessage(): string | setMessage(string message): void |
| `errors` | `string[]` | Required | An array of pre-defined strings that identify an error | getErrors(): array | setErrors(array errors): void |

## Example (as JSON)

```json
{
  "code": 400,
  "message": "Invalid body, check 'errors' property for more info.",
  "errors": [
    "type must be a string"
  ]
}
```

