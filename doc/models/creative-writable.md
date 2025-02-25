
# Creative Writable

## Structure

`CreativeWritable`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `resourceType` | `string` | Required, Constant | Mailpiece type for the creative<br>**Default**: `'postcard'` | getResourceType(): string | setResourceType(string resourceType): void |
| `campaignId` | `string` | Required | Unique identifier prefixed with `cmp_`.<br>**Constraints**: *Pattern*: `^cmp_[a-zA-Z0-9]+$` | getCampaignId(): string | setCampaignId(string campaignId): void |
| `front` | [`array`](../../doc/models/object-enum.md) | Required | - | getFront(): array | setFront(array front): void |
| `back` | [`array`](../../doc/models/object-enum.md) | Required | - | getBack(): array | setBack(array back): void |
| `details` | [`Details2`](../../doc/models/details-2.md) | Required | - | getDetails(): Details2 | setDetails(Details2 details): void |
| `from` | [`?array`](../../doc/models/object-enum.md) | Optional | - | getFrom(): ?array | setFrom(?array from): void |
| `description` | `?string` | Optional | An internal description that identifies this resource. Must be no longer than 255 characters.<br>**Constraints**: *Maximum Length*: `255` | getDescription(): ?string | setDescription(?string description): void |
| `metadata` | `?array<string,string>` | Optional | Use metadata to store custom information for tagging and labeling back to your internal systems. Must be an object with up to 20 key-value pairs. Keys must be at most 40 characters and values must be at most 500 characters. Neither can contain the characters `"` and `\`. i.e. '{"customer_id" : "NEWYORK2015"}' Nested objects are not supported.  See [Metadata](#section/Metadata) for more information. | getMetadata(): ?array | setMetadata(?array metadata): void |

## Example (as JSON)

```json
{
  "resource_type": "postcard",
  "campaign_id": "campaign_id2",
  "front": {
    "key1": "val1",
    "key2": "val2"
  },
  "back": {
    "key1": "val1",
    "key2": "val2"
  },
  "details": {
    "mail_type": "usps_first_class",
    "size": "6x11",
    "qr_code": {
      "position": "position2",
      "top": "top8",
      "right": "right2",
      "left": "left2",
      "bottom": "bottom4",
      "redirect_url": "String9",
      "width": "width0"
    }
  },
  "from": {
    "key1": "val1",
    "key2": "val2"
  },
  "description": "description2",
  "metadata": {
    "key0": "metadata1"
  }
}
```

