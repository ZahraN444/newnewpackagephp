
# Campaign Updatable

## Structure

`CampaignUpdatable`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `description` | `?string` | Optional | An internal description that identifies this resource. Must be no longer than 255 characters.<br>**Constraints**: *Maximum Length*: `255` | getDescription(): ?string | setDescription(?string description): void |
| `scheduleType` | [`?string(CmpScheduleTypeEnum)`](../../doc/models/cmp-schedule-type-enum.md) | Optional | - | getScheduleType(): ?string | setScheduleType(?string scheduleType): void |
| `targetDeliveryDate` | `?DateTime` | Optional | If `schedule_type` is `target_delivery_date`, provide a targeted delivery date for mail pieces in this campaign. | getTargetDeliveryDate(): ?\DateTime | setTargetDeliveryDate(?\DateTime targetDeliveryDate): void |
| `sendDate` | `?DateTime` | Optional | If `schedule_type` is `scheduled_send_date`, provide a date to send this campaign. | getSendDate(): ?\DateTime | setSendDate(?\DateTime sendDate): void |
| `cancelWindowCampaignMinutes` | `?int` | Optional | A window, in minutes, within which the campaign can be canceled. | getCancelWindowCampaignMinutes(): ?int | setCancelWindowCampaignMinutes(?int cancelWindowCampaignMinutes): void |
| `metadata` | `?array<string,string>` | Optional | Use metadata to store custom information for tagging and labeling back to your internal systems. Must be an object with up to 20 key-value pairs. Keys must be at most 40 characters and values must be at most 500 characters. Neither can contain the characters `"` and `\`. i.e. '{"customer_id" : "NEWYORK2015"}' Nested objects are not supported.  See [Metadata](#section/Metadata) for more information. | getMetadata(): ?array | setMetadata(?array metadata): void |
| `isDraft` | `?bool` | Optional | Whether or not the campaign is still a draft. Can either be excluded or `false`. | getIsDraft(): ?bool | setIsDraft(?bool isDraft): void |
| `useType` | [`?array`](../../doc/models/object-enum.md) | Optional | - | getUseType(): ?array | setUseType(?array useType): void |
| `autoCancelIfNcoa` | `?bool` | Optional | Whether or not a mail piece should be automatically canceled and not sent if the address is updated via NCOA. | getAutoCancelIfNcoa(): ?bool | setAutoCancelIfNcoa(?bool autoCancelIfNcoa): void |

## Example (as JSON)

```json
{
  "name": "name4",
  "description": "description6",
  "schedule_type": "immediate",
  "target_delivery_date": "2016-03-13T12:52:32.123Z",
  "send_date": "2016-03-13T12:52:32.123Z"
}
```

