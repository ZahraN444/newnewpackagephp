
# Intl Verification

## Structure

`IntlVerification`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `recipient` | `?string` | Optional | The intended recipient, typically a person's or firm's name.<br>**Constraints**: *Maximum Length*: `500` | getRecipient(): ?string | setRecipient(?string recipient): void |
| `primaryLine` | `?string` | Optional | The primary delivery line (usually the street address) of the address.<br>**Constraints**: *Maximum Length*: `200` | getPrimaryLine(): ?string | setPrimaryLine(?string primaryLine): void |
| `secondaryLine` | `?string` | Optional | The secondary delivery line of the address. This field is typically empty but may contain information if `primary_line` is too long.<br>**Constraints**: *Maximum Length*: `500` | getSecondaryLine(): ?string | setSecondaryLine(?string secondaryLine): void |
| `id` | `?string` | Optional | Unique identifier prefixed with `intl_ver_`.<br>**Constraints**: *Pattern*: `^intl_ver_[a-zA-Z0-9]+$` | getId(): ?string | setId(?string id): void |
| `lastLine` | `?string` | Optional | Combination of the following applicable `components`:<br><br>* `city`<br>* `state`<br>* `zip_code`<br>* `zip_code_plus_4` | getLastLine(): ?string | setLastLine(?string lastLine): void |
| `country` | `?string` | Optional | The country of the address. Will be returned as a 2 letter country short-name code (ISO 3166). | getCountry(): ?string | setCountry(?string country): void |
| `coverage` | [`?string(CoverageEnum)`](../../doc/models/coverage-enum.md) | Optional | - | getCoverage(): ?string | setCoverage(?string coverage): void |
| `deliverability` | [`?string(Deliverability1Enum)`](../../doc/models/deliverability-1-enum.md) | Optional | - | getDeliverability(): ?string | setDeliverability(?string deliverability): void |
| `status` | [`?string(Status1Enum)`](../../doc/models/status-1-enum.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `components` | [`?Components1`](../../doc/models/components-1.md) | Optional | - | getComponents(): ?Components1 | setComponents(?Components1 components): void |
| `object` | [`?string(Object2Enum)`](../../doc/models/object-2-enum.md) | Optional | - | getObject(): ?string | setObject(?string object): void |

## Example (as JSON)

```json
{
  "country": "CA",
  "recipient": "recipient0",
  "primary_line": "primary_line8",
  "secondary_line": "secondary_line4",
  "id": "id8",
  "last_line": "last_line8"
}
```

