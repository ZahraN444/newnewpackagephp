
# Intl Verifications Payload

## Structure

`IntlVerificationsPayload`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `addresses` | [`MultipleComponentsIntl[]`](../../doc/models/multiple-components-intl.md) | Required | **Constraints**: *Minimum Items*: `1`, *Maximum Items*: `20` | getAddresses(): array | setAddresses(array addresses): void |

## Example (as JSON)

```json
{
  "addresses": [
    {
      "recipient": "recipient6",
      "primary_line": "primary_line4",
      "secondary_line": "secondary_line0",
      "city": "city4",
      "state": "state0",
      "postal_code": "postal_code6",
      "country": "AU"
    }
  ]
}
```

