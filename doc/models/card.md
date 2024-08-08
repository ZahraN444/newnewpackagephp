
# Card

## Structure

`Card`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dateCreated` | `DateTime` | Required | A timestamp in ISO 8601 format of the date the resource was created. | getDateCreated(): \DateTime | setDateCreated(\DateTime dateCreated): void |
| `dateModified` | `DateTime` | Required | A timestamp in ISO 8601 format of the date the resource was last modified. | getDateModified(): \DateTime | setDateModified(\DateTime dateModified): void |
| `deleted` | `?bool` | Optional | Only returned if the resource has been successfully deleted. | getDeleted(): ?bool | setDeleted(?bool deleted): void |
| `object` | `string` | Required, Constant | Value is resource type.<br>**Default**: `'card'` | getObject(): string | setObject(string object): void |
| `description` | `?string` | Required | Description of the card.<br>**Constraints**: *Maximum Length*: `255` | getDescription(): ?string | setDescription(?string description): void |
| `size` | [`?string(Size1Enum)`](../../doc/models/size-1-enum.md) | Optional | - | getSize(): ?string | setSize(?string size): void |
| `id` | `string` | Required | Unique identifier prefixed with `card_`.<br>**Constraints**: *Pattern*: `^card_[a-zA-Z0-9]+$` | getId(): string | setId(string id): void |
| `url` | `string` | Required | The signed link for the card.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `2083` | getUrl(): string | setUrl(string url): void |
| `autoReorder` | `bool` | Required | True if the cards should be auto-reordered. | getAutoReorder(): bool | setAutoReorder(bool autoReorder): void |
| `reorderQuantity` | `?int` | Required | The number of cards to be reordered. | getReorderQuantity(): ?int | setReorderQuantity(?int reorderQuantity): void |
| `rawUrl` | `string` | Required | The raw URL of the card.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `2083` | getRawUrl(): string | setRawUrl(string rawUrl): void |
| `frontOriginalUrl` | `string` | Required | The original URL of the front template.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `2083` | getFrontOriginalUrl(): string | setFrontOriginalUrl(string frontOriginalUrl): void |
| `backOriginalUrl` | `string` | Required | The original URL of the back template.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `2083` | getBackOriginalUrl(): string | setBackOriginalUrl(string backOriginalUrl): void |
| `thumbnails` | [`Thumbnail[]`](../../doc/models/thumbnail.md) | Required | - | getThumbnails(): array | setThumbnails(array thumbnails): void |
| `availableQuantity` | `int` | Required | The available quantity of cards. | getAvailableQuantity(): int | setAvailableQuantity(int availableQuantity): void |
| `pendingQuantity` | `int` | Required | The pending quantity of cards. | getPendingQuantity(): int | setPendingQuantity(int pendingQuantity): void |
| `status` | [`string(ThestatusofthecardEnum)`](../../doc/models/thestatusofthecard-enum.md) | Required | - | getStatus(): string | setStatus(string status): void |
| `orientation` | [`string(OrientationEnum)`](../../doc/models/orientation-enum.md) | Required | - | getOrientation(): string | setOrientation(string orientation): void |
| `thresholdAmount` | `int` | Required | The threshold amount of the card | getThresholdAmount(): int | setThresholdAmount(int thresholdAmount): void |

## Example (as JSON)

```json
{
  "date_created": "2016-03-13T12:52:32.123Z",
  "date_modified": "2016-03-13T12:52:32.123Z",
  "object": "card",
  "description": "description6",
  "id": "id6",
  "url": "url0",
  "auto_reorder": false,
  "reorder_quantity": 2,
  "raw_url": "raw_url8",
  "front_original_url": "front_original_url0",
  "back_original_url": "back_original_url2",
  "thumbnails": [
    {
      "small": "small8",
      "medium": "medium8",
      "large": "large6"
    }
  ],
  "available_quantity": 22,
  "pending_quantity": 140,
  "status": "processed",
  "orientation": "horizontal",
  "threshold_amount": 124,
  "deleted": false,
  "size": "3.375x2.125"
}
```

