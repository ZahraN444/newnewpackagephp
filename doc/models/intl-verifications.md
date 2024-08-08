
# Intl Verifications

## Structure

`IntlVerifications`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `addresses` | array<[IntlVerification](../../doc/models/intl-verification.md)\|[Error](../../doc/models/error.md)> | Required | This is Array of a container for one-of cases. | getAddresses(): array | setAddresses(array addresses): void |
| `errors` | `bool` | Required | Indicates whether any errors occurred during the verification process. | getErrors(): bool | setErrors(bool errors): void |

## Example (as JSON)

```json
{
  "addresses": [
    {
      "recipient": "recipient0",
      "primary_line": "primary_line8",
      "secondary_line": "secondary_line4",
      "id": "id8",
      "last_line": "last_line8"
    },
    {
      "recipient": "recipient0",
      "primary_line": "primary_line8",
      "secondary_line": "secondary_line4",
      "id": "id8",
      "last_line": "last_line8"
    }
  ],
  "errors": false
}
```

