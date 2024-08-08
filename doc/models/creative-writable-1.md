
# Creative Writable 1

## Structure

`CreativeWritable1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `resourceType` | `string` | Required, Constant | Mailpiece type for the creative<br>**Default**: `'letter'` | getResourceType(): string | setResourceType(string resourceType): void |
| `campaignId` | `string` | Required | Unique identifier prefixed with `cmp_`.<br>**Constraints**: *Pattern*: `^cmp_[a-zA-Z0-9]+$` | getCampaignId(): string | setCampaignId(string campaignId): void |
| `details` | [`Details3`](../../doc/models/details-3.md) | Required | - | getDetails(): Details3 | setDetails(Details3 details): void |
| `file` | [`array`](../../doc/models/object-enum.md) | Required | - | getFile(): array | setFile(array file): void |
| `from` | [`array`](../../doc/models/object-enum.md) | Required | - | getFrom(): array | setFrom(array from): void |
| `description` | `?string` | Optional | An internal description that identifies this resource. Must be no longer than 255 characters.<br>**Constraints**: *Maximum Length*: `255` | getDescription(): ?string | setDescription(?string description): void |
| `metadata` | `?array<string,string>` | Optional | Use metadata to store custom information for tagging and labeling back to your internal systems. Must be an object with up to 20 key-value pairs. Keys must be at most 40 characters and values must be at most 500 characters. Neither can contain the characters `"` and `\`. i.e. '{"customer_id" : "NEWYORK2015"}' Nested objects are not supported.  See [Metadata](#section/Metadata) for more information. | getMetadata(): ?array | setMetadata(?array metadata): void |

## Example (as JSON)

```json
{
  "resource_type": "letter",
  "campaign_id": "campaign_id0",
  "details": {
    "color": false,
    "double_sided": true,
    "address_placement": "top_first_page",
    "add_on_types": [
      "cards"
    ],
    "buckslips": [
      "buckslips2",
      "buckslips3"
    ],
    "cards": [
      "cards7"
    ],
    "custom_envelope": "custom_envelope0"
  },
  "file": {
    "key1": "val1",
    "key2": "val2"
  },
  "from": {
    "key1": "val1",
    "key2": "val2"
  },
  "description": "description0",
  "metadata": {
    "key0": "metadata7"
  }
}
```

