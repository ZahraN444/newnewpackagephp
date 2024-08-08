
# Intl Verification Base

## Structure

`IntlVerificationBase`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `recipient` | `?string` | Optional | The intended recipient, typically a person's or firm's name.<br>**Constraints**: *Maximum Length*: `500` | getRecipient(): ?string | setRecipient(?string recipient): void |
| `primaryLine` | `?string` | Optional | The primary delivery line (usually the street address) of the address.<br>**Constraints**: *Maximum Length*: `200` | getPrimaryLine(): ?string | setPrimaryLine(?string primaryLine): void |
| `secondaryLine` | `?string` | Optional | The secondary delivery line of the address. This field is typically empty but may contain information if `primary_line` is too long.<br>**Constraints**: *Maximum Length*: `500` | getSecondaryLine(): ?string | setSecondaryLine(?string secondaryLine): void |

## Example (as JSON)

```json
{
  "recipient": "recipient6",
  "primary_line": "primary_line4",
  "secondary_line": "secondary_line0"
}
```

