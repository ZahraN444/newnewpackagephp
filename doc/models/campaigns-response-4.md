
# Campaigns Response 4

## Structure

`CampaignsResponse4`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Unique identifier prefixed with `cmp_`.<br>**Constraints**: *Pattern*: `^cmp_[a-zA-Z0-9]+$` | getId(): ?string | setId(?string id): void |
| `deleted` | `?bool` | Optional | True if the resource has been successfully deleted. | getDeleted(): ?bool | setDeleted(?bool deleted): void |

## Example (as JSON)

```json
{
  "id": "id2",
  "deleted": false
}
```

