
# Tracking Event Details

## Structure

`TrackingEventDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `event` | [`string(EventEnum)`](../../doc/models/event-enum.md) | Required | - | getEvent(): string | setEvent(string event): void |
| `description` | `string` | Required | The description as listed in the description for event. | getDescription(): string | setDescription(string description): void |
| `notes` | `?string` | Optional | Event-specific notes from USPS about the tracking event. | getNotes(): ?string | setNotes(?string notes): void |
| `actionRequired` | `bool` | Required | `true` if action is required by the end recipient, `false` otherwise. | getActionRequired(): bool | setActionRequired(bool actionRequired): void |

## Example (as JSON)

```json
{
  "event": "contact_carrier",
  "description": "description4",
  "notes": "notes4",
  "action_required": false
}
```

