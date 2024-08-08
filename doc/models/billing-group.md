
# Billing Group

## Structure

`BillingGroup`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `description` | `?string` | Optional | Description of the billing group.<br>**Constraints**: *Maximum Length*: `255` | getDescription(): ?string | setDescription(?string description): void |
| `name` | `?string` | Optional | Name of the billing group.<br>**Constraints**: *Maximum Length*: `255` | getName(): ?string | setName(?string name): void |
| `id` | `?string` | Optional | Unique identifier prefixed with `bg_`.<br>**Constraints**: *Pattern*: `^bg_[a-zA-Z0-9]+$` | getId(): ?string | setId(?string id): void |
| `dateCreated` | `?DateTime` | Optional | A timestamp in ISO 8601 format of the date the resource was created. | getDateCreated(): ?\DateTime | setDateCreated(?\DateTime dateCreated): void |
| `dateModified` | `?DateTime` | Optional | A timestamp in ISO 8601 format of the date the resource was last modified. | getDateModified(): ?\DateTime | setDateModified(?\DateTime dateModified): void |
| `object` | [`?string(ObjectEnum)`](../../doc/models/object-enum.md) | Optional | - | getObject(): ?string | setObject(?string object): void |

## Example (as JSON)

```json
{
  "description": "description0",
  "name": "name0",
  "id": "id0",
  "date_created": "2016-03-13T12:52:32.123Z",
  "date_modified": "2016-03-13T12:52:32.123Z"
}
```

