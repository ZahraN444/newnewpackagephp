
# Buckslip

## Structure

`Buckslip`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dateCreated` | `DateTime` | Required | A timestamp in ISO 8601 format of the date the resource was created. | getDateCreated(): \DateTime | setDateCreated(\DateTime dateCreated): void |
| `dateModified` | `DateTime` | Required | A timestamp in ISO 8601 format of the date the resource was last modified. | getDateModified(): \DateTime | setDateModified(\DateTime dateModified): void |
| `deleted` | `?bool` | Optional | Only returned if the resource has been successfully deleted. | getDeleted(): ?bool | setDeleted(?bool deleted): void |
| `object` | `string` | Required, Constant | Value is resource type.<br>**Default**: `'buckslip'` | getObject(): string | setObject(string object): void |
| `description` | `?string` | Required | Description of the buckslip.<br>**Constraints**: *Maximum Length*: `255` | getDescription(): ?string | setDescription(?string description): void |
| `size` | [`?string(SizeEnum)`](../../doc/models/size-enum.md) | Optional | - | getSize(): ?string | setSize(?string size): void |
| `id` | `string` | Required | Unique identifier prefixed with `bck_`.<br>**Constraints**: *Pattern*: `^bck_[a-zA-Z0-9]+$` | getId(): string | setId(string id): void |
| `autoReorder` | `bool` | Required | True if the buckslips should be auto-reordered. | getAutoReorder(): bool | setAutoReorder(bool autoReorder): void |
| `reorderQuantity` | `?int` | Required | The number of buckslips to be reordered. | getReorderQuantity(): ?int | setReorderQuantity(?int reorderQuantity): void |
| `thresholdAmount` | `int` | Required | The threshold amount of the buckslip | getThresholdAmount(): int | setThresholdAmount(int thresholdAmount): void |
| `url` | `string` | Required | The signed link for the buckslip.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `2083` | getUrl(): string | setUrl(string url): void |
| `rawUrl` | `string` | Required | The raw URL of the buckslip.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `2083` | getRawUrl(): string | setRawUrl(string rawUrl): void |
| `frontOriginalUrl` | `string` | Required | The original URL of the front template.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `2083` | getFrontOriginalUrl(): string | setFrontOriginalUrl(string frontOriginalUrl): void |
| `backOriginalUrl` | `string` | Required | The original URL of the back template.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `2083` | getBackOriginalUrl(): string | setBackOriginalUrl(string backOriginalUrl): void |
| `thumbnails` | [`Thumbnail[]`](../../doc/models/thumbnail.md) | Required | - | getThumbnails(): array | setThumbnails(array thumbnails): void |
| `availableQuantity` | `float` | Required | The available quantity of buckslips. | getAvailableQuantity(): float | setAvailableQuantity(float availableQuantity): void |
| `allocatedQuantity` | `float` | Required | The allocated quantity of buckslips. | getAllocatedQuantity(): float | setAllocatedQuantity(float allocatedQuantity): void |
| `onhandQuantity` | `float` | Required | The onhand quantity of buckslips. | getOnhandQuantity(): float | setOnhandQuantity(float onhandQuantity): void |
| `pendingQuantity` | `float` | Required | The pending quantity of buckslips. | getPendingQuantity(): float | setPendingQuantity(float pendingQuantity): void |
| `projectedQuantity` | `float` | Required | The sum of pending and onhand quantities of buckslips. | getProjectedQuantity(): float | setProjectedQuantity(float projectedQuantity): void |
| `buckslipOrders` | [`BuckslipOrder[]`](../../doc/models/buckslip-order.md) | Required | An array of buckslip orders that are associated with the buckslip.<br>**Constraints**: *Minimum Items*: `0` | getBuckslipOrders(): array | setBuckslipOrders(array buckslipOrders): void |
| `stock` | [`string(ThestockofthebuckslipEnum)`](../../doc/models/thestockofthebuckslip-enum.md) | Required | - | getStock(): string | setStock(string stock): void |
| `weight` | `string` | Required, Constant | **Default**: `'80#'` | getWeight(): string | setWeight(string weight): void |
| `finish` | [`string(ThefinishofthebuckslipEnum)`](../../doc/models/thefinishofthebuckslip-enum.md) | Required | - | getFinish(): string | setFinish(string finish): void |
| `status` | [`string(ThestatusofthebuckslipEnum)`](../../doc/models/thestatusofthebuckslip-enum.md) | Required | - | getStatus(): string | setStatus(string status): void |

## Example (as JSON)

```json
{
  "date_created": "2016-03-13T12:52:32.123Z",
  "date_modified": "2016-03-13T12:52:32.123Z",
  "object": "buckslip",
  "description": "description0",
  "id": "id0",
  "auto_reorder": false,
  "reorder_quantity": 254,
  "threshold_amount": 120,
  "url": "url4",
  "raw_url": "raw_url2",
  "front_original_url": "front_original_url6",
  "back_original_url": "back_original_url6",
  "thumbnails": [
    {
      "small": "small8",
      "medium": "medium8",
      "large": "large6"
    }
  ],
  "available_quantity": 89.78,
  "allocated_quantity": 3.82,
  "onhand_quantity": 14.26,
  "pending_quantity": 175.52,
  "projected_quantity": 156.88,
  "buckslip_orders": [
    {
      "date_created": "2016-03-13T12:52:32.123Z",
      "date_modified": "2016-03-13T12:52:32.123Z",
      "object": "object0",
      "quantity_ordered": 0.0,
      "unit_price": 0,
      "inventory": 0,
      "deleted": false,
      "id": "id2",
      "buckslip_id": "buckslip_id8",
      "status": "printing"
    }
  ],
  "stock": "text",
  "weight": "80#",
  "finish": "gloss",
  "status": "rendered",
  "deleted": false,
  "size": "8.75x3.75"
}
```

