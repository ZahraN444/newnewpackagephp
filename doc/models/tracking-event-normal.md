
# Tracking Event Normal

## Structure

`TrackingEventNormal`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | Unique identifier prefixed with `evnt_`.<br>**Constraints**: *Pattern*: `^evnt_[a-zA-Z0-9]+$` | getId(): string | setId(string id): void |
| `time` | `?DateTime` | Optional | A timestamp in ISO 8601 format of the date USPS registered the event. | getTime(): ?\DateTime | setTime(?\DateTime time): void |
| `dateCreated` | `DateTime` | Required | A timestamp in ISO 8601 format of the date the resource was created. | getDateCreated(): \DateTime | setDateCreated(\DateTime dateCreated): void |
| `dateModified` | `DateTime` | Required | A timestamp in ISO 8601 format of the date the resource was last modified. | getDateModified(): \DateTime | setDateModified(\DateTime dateModified): void |
| `object` | [`string(Object3Enum)`](../../doc/models/object-3-enum.md) | Required | - | getObject(): string | setObject(string object): void |
| `type` | `string` | Required, Constant | non-Certified postcards, self mailers, letters, and checks<br>**Default**: `'normal'` | getType(): string | setType(string type): void |
| `name` | [`string(NameEnum)`](../../doc/models/name-enum.md) | Required | - | getName(): string | setName(string name): void |
| `details` | [`?array`](../../doc/models/object-enum.md) | Optional | Will be `null` for `type=normal` events | getDetails(): ?array | setDetails(?array details): void |
| `location` | `?string` | Optional | The zip code in which the scan event occurred. Null for `Mailed` events. | getLocation(): ?string | setLocation(?string location): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "date_created": "2016-03-13T12:52:32.123Z",
  "date_modified": "2016-03-13T12:52:32.123Z",
  "object": "tracking_event",
  "type": "normal",
  "name": "Delivered",
  "time": "2016-03-13T12:52:32.123Z",
  "details": {
    "key1": "val1",
    "key2": "val2"
  },
  "location": "location4"
}
```

