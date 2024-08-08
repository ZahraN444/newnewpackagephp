
# Us Verifications

## Structure

`UsVerifications`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `addresses` | array<[UsVerification](../../doc/models/us-verification.md)\|[Error](../../doc/models/error.md)> | Required | This is Array of a container for one-of cases. | getAddresses(): array | setAddresses(array addresses): void |
| `errors` | `bool` | Required | Indicates whether any errors occurred during the verification process. | getErrors(): bool | setErrors(bool errors): void |

## Example (as JSON)

```json
{
  "addresses": [
    {
      "id": "id8",
      "recipient": "recipient0",
      "primary_line": "primary_line8",
      "secondary_line": "secondary_line4",
      "urbanization": "urbanization0"
    },
    {
      "id": "id8",
      "recipient": "recipient0",
      "primary_line": "primary_line8",
      "secondary_line": "secondary_line4",
      "urbanization": "urbanization0"
    },
    {
      "id": "id8",
      "recipient": "recipient0",
      "primary_line": "primary_line8",
      "secondary_line": "secondary_line4",
      "urbanization": "urbanization0"
    }
  ],
  "errors": false
}
```

