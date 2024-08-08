
# Generated

## Structure

`Generated`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `to` | [`array`](../../doc/models/object-enum.md) | Required | - | getTo(): array | setTo(array to): void |
| `carrier` | `string` | Required, Constant | **Default**: `'USPS'` | getCarrier(): string | setCarrier(string carrier): void |
| `thumbnails` | [`?(Thumbnail[])`](../../doc/models/thumbnail.md) | Optional | - | getThumbnails(): ?array | setThumbnails(?array thumbnails): void |
| `expectedDeliveryDate` | `?DateTime` | Optional | A date in YYYY-MM-DD format of the mailpiece's expected delivery date based on its `send_date`. | getExpectedDeliveryDate(): ?\DateTime | setExpectedDeliveryDate(?\DateTime expectedDeliveryDate): void |
| `dateCreated` | `?DateTime` | Optional | A timestamp in ISO 8601 format of the date the resource was created. | getDateCreated(): ?\DateTime | setDateCreated(?\DateTime dateCreated): void |
| `dateModified` | `?DateTime` | Optional | A timestamp in ISO 8601 format of the date the resource was last modified. | getDateModified(): ?\DateTime | setDateModified(?\DateTime dateModified): void |
| `deleted` | `?bool` | Optional | Only returned if the resource has been successfully deleted. | getDeleted(): ?bool | setDeleted(?bool deleted): void |

## Example (as JSON)

```json
{
  "to": {
    "key1": "val1",
    "key2": "val2"
  },
  "carrier": "USPS",
  "thumbnails": [
    {
      "small": "small8",
      "medium": "medium8",
      "large": "large6"
    },
    {
      "small": "small8",
      "medium": "medium8",
      "large": "large6"
    }
  ],
  "expected_delivery_date": "2016-03-13",
  "date_created": "2016-03-13T12:52:32.123Z",
  "date_modified": "2016-03-13T12:52:32.123Z",
  "deleted": false
}
```

