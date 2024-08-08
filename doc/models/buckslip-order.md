
# Buckslip Order

## Structure

`BuckslipOrder`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dateCreated` | `DateTime` | Required | A timestamp in ISO 8601 format of the date the resource was created. | getDateCreated(): \DateTime | setDateCreated(\DateTime dateCreated): void |
| `dateModified` | `DateTime` | Required | A timestamp in ISO 8601 format of the date the resource was last modified. | getDateModified(): \DateTime | setDateModified(\DateTime dateModified): void |
| `deleted` | `?bool` | Optional | Only returned if the resource has been successfully deleted. | getDeleted(): ?bool | setDeleted(?bool deleted): void |
| `object` | `string` | Required | Value is resource type. | getObject(): string | setObject(string object): void |
| `id` | `?string` | Optional | Unique identifier prefixed with `bo_`.<br>**Constraints**: *Pattern*: `^bo_[a-zA-Z0-9]+$` | getId(): ?string | setId(?string id): void |
| `buckslipId` | `?string` | Optional | Unique identifier prefixed with `bck_`.<br>**Constraints**: *Pattern*: `^bck_[a-zA-Z0-9]+$` | getBuckslipId(): ?string | setBuckslipId(?string buckslipId): void |
| `status` | [`?string(StatusEnum)`](../../doc/models/status-enum.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `quantityOrdered` | `?float` | Optional | The quantity of buckslips ordered.<br>**Default**: `0` | getQuantityOrdered(): ?float | setQuantityOrdered(?float quantityOrdered): void |
| `unitPrice` | `?float` | Optional | The unit price for the buckslip order.<br>**Default**: `0` | getUnitPrice(): ?float | setUnitPrice(?float unitPrice): void |
| `inventory` | `?float` | Optional | The inventory of the buckslip order.<br>**Default**: `0` | getInventory(): ?float | setInventory(?float inventory): void |
| `cancelledReason` | `?string` | Optional | The reason for cancellation. | getCancelledReason(): ?string | setCancelledReason(?string cancelledReason): void |
| `availabilityDate` | `?DateTime` | Optional | A timestamp in ISO 8601 format of the date the resource was created. | getAvailabilityDate(): ?\DateTime | setAvailabilityDate(?\DateTime availabilityDate): void |
| `expectedAvailabilityDate` | `?DateTime` | Optional | The fixed deadline for the buckslips to be printed. | getExpectedAvailabilityDate(): ?\DateTime | setExpectedAvailabilityDate(?\DateTime expectedAvailabilityDate): void |

## Example (as JSON)

```json
{
  "date_created": "2016-03-13T12:52:32.123Z",
  "date_modified": "2016-03-13T12:52:32.123Z",
  "object": "object2",
  "quantity_ordered": 0.0,
  "unit_price": 0,
  "inventory": 0,
  "deleted": false,
  "id": "id0",
  "buckslip_id": "buckslip_id6",
  "status": "cancelled"
}
```

