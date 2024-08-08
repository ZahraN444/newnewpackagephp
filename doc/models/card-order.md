
# Card Order

## Structure

`CardOrder`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dateCreated` | `DateTime` | Required | A timestamp in ISO 8601 format of the date the resource was created. | getDateCreated(): \DateTime | setDateCreated(\DateTime dateCreated): void |
| `dateModified` | `DateTime` | Required | A timestamp in ISO 8601 format of the date the resource was last modified. | getDateModified(): \DateTime | setDateModified(\DateTime dateModified): void |
| `deleted` | `?bool` | Optional | Only returned if the resource has been successfully deleted. | getDeleted(): ?bool | setDeleted(?bool deleted): void |
| `object` | `string` | Required | Value is resource type. | getObject(): string | setObject(string object): void |
| `id` | `?string` | Optional | Unique identifier prefixed with `co_`.<br>**Constraints**: *Pattern*: `^co_[a-zA-Z0-9]+$` | getId(): ?string | setId(?string id): void |
| `cardId` | `?string` | Optional | Unique identifier prefixed with `card_`.<br>**Constraints**: *Pattern*: `^card_[a-zA-Z0-9]+$` | getCardId(): ?string | setCardId(?string cardId): void |
| `status` | [`?string(Status2Enum)`](../../doc/models/status-2-enum.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `inventory` | `?float` | Optional | The inventory of the card order.<br>**Default**: `0` | getInventory(): ?float | setInventory(?float inventory): void |
| `quantityOrdered` | `?float` | Optional | The quantity of cards ordered<br>**Default**: `0` | getQuantityOrdered(): ?float | setQuantityOrdered(?float quantityOrdered): void |
| `unitPrice` | `?float` | Optional | The unit price for the card order.<br>**Default**: `0` | getUnitPrice(): ?float | setUnitPrice(?float unitPrice): void |
| `cancelledReason` | `?string` | Optional | The reason for cancellation. | getCancelledReason(): ?string | setCancelledReason(?string cancelledReason): void |
| `availabilityDate` | `?DateTime` | Optional | A timestamp in ISO 8601 format of the date the resource was created. | getAvailabilityDate(): ?\DateTime | setAvailabilityDate(?\DateTime availabilityDate): void |
| `expectedAvailabilityDate` | `?DateTime` | Optional | The fixed deadline for the cards to be printed. | getExpectedAvailabilityDate(): ?\DateTime | setExpectedAvailabilityDate(?\DateTime expectedAvailabilityDate): void |

## Example (as JSON)

```json
{
  "date_created": "2016-03-13T12:52:32.123Z",
  "date_modified": "2016-03-13T12:52:32.123Z",
  "object": "object8",
  "inventory": 0.0,
  "quantity_ordered": 0,
  "unit_price": 0,
  "deleted": false,
  "id": "id4",
  "card_id": "card_id0",
  "status": "depleted"
}
```

