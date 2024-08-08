
# Custom Envelope Returned

A nested custom envelope object containing more information about the custom envelope used or `null` if a custom envelope was not used.

## Structure

`CustomEnvelopeReturned`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | The unique identifier of the custom envelope used.<br>**Constraints**: *Maximum Length*: `40` | getId(): string | setId(string id): void |
| `url` | `string` | Required | The url of the envelope asset used. | getUrl(): string | setUrl(string url): void |
| `object` | `string` | Required, Constant | **Default**: `'envelope'` | getObject(): string | setObject(string object): void |

## Example (as JSON)

```json
{
  "id": "id6",
  "url": "url0",
  "object": "envelope"
}
```

