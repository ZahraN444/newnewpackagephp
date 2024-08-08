
# Campaign Item

## Structure

`CampaignItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `billingGroupId` | `?string` | Optional | Unique identifier prefixed with `bg_`.<br>**Constraints**: *Pattern*: `^bg_[a-zA-Z0-9]+$` | getBillingGroupId(): ?string | setBillingGroupId(?string billingGroupId): void |
| `name` | `string` | Required | Name of the campaign. | getName(): string | setName(string name): void |
| `description` | `?string` | Required | An internal description that identifies this resource. Must be no longer than 255 characters.<br>**Constraints**: *Maximum Length*: `255` | getDescription(): ?string | setDescription(?string description): void |
| `scheduleType` | `string` | Required, Constant | How the campaign should be scheduled. Only value available today is `immediate`.<br>**Default**: `'immediate'` | getScheduleType(): string | setScheduleType(string scheduleType): void |
| `targetDeliveryDate` | `?DateTime` | Optional | If `schedule_type` is `target_delivery_date`, provide a targeted delivery date for mail pieces in this campaign. | getTargetDeliveryDate(): ?\DateTime | setTargetDeliveryDate(?\DateTime targetDeliveryDate): void |
| `sendDate` | `?DateTime` | Optional | If `schedule_type` is `scheduled_send_date`, provide a date to send this campaign. | getSendDate(): ?\DateTime | setSendDate(?\DateTime sendDate): void |
| `cancelWindowCampaignMinutes` | `?int` | Optional | A window, in minutes, within which the campaign can be canceled. | getCancelWindowCampaignMinutes(): ?int | setCancelWindowCampaignMinutes(?int cancelWindowCampaignMinutes): void |
| `metadata` | `?array<string,string>` | Optional | Use metadata to store custom information for tagging and labeling back to your internal systems. Must be an object with up to 20 key-value pairs. Keys must be at most 40 characters and values must be at most 500 characters. Neither can contain the characters `"` and `\`. i.e. '{"customer_id" : "NEWYORK2015"}' Nested objects are not supported.  See [Metadata](#section/Metadata) for more information. | getMetadata(): ?array | setMetadata(?array metadata): void |
| `useType` | [`array`](../../doc/models/object-enum.md) | Required | - | getUseType(): array | setUseType(array useType): void |
| `autoCancelIfNcoa` | `bool` | Required | Whether or not a mail piece should be automatically canceled and not sent if the address is updated via NCOA. | getAutoCancelIfNcoa(): bool | setAutoCancelIfNcoa(bool autoCancelIfNcoa): void |
| `id` | `string` | Required | Unique identifier prefixed with `cmp_`.<br>**Constraints**: *Pattern*: `^cmp_[a-zA-Z0-9]+$` | getId(): string | setId(string id): void |
| `isDraft` | `bool` | Required | Whether or not the campaign is still a draft. | getIsDraft(): bool | setIsDraft(bool isDraft): void |
| `creatives` | [`array[]`](../../doc/models/object-enum.md) | Required | An array of creatives that have been associated with this campaign. | getCreatives(): array | setCreatives(array creatives): void |
| `uploads` | [`array[]`](../../doc/models/object-enum.md) | Required | A single-element array containing the upload object that is assocated with this campaign.<br>**Constraints**: *Minimum Items*: `0`, *Maximum Items*: `1` | getUploads(): array | setUploads(array uploads): void |
| `object` | `string` | Required, Constant | Value is resource type.<br>**Default**: `'campaign'` | getObject(): string | setObject(string object): void |
| `dateCreated` | `DateTime` | Required | A timestamp in ISO 8601 format of the date the resource was created. | getDateCreated(): \DateTime | setDateCreated(\DateTime dateCreated): void |
| `dateModified` | `DateTime` | Required | A timestamp in ISO 8601 format of the date the resource was last modified. | getDateModified(): \DateTime | setDateModified(\DateTime dateModified): void |
| `deleted` | `?bool` | Optional | Only returned if the resource has been successfully deleted. | getDeleted(): ?bool | setDeleted(?bool deleted): void |

## Example (as JSON)

```json
{
  "name": "name2",
  "description": "description2",
  "schedule_type": "immediate",
  "use_type": {
    "key1": "val1",
    "key2": "val2"
  },
  "auto_cancel_if_ncoa": false,
  "id": "id2",
  "is_draft": false,
  "creatives": [
    {
      "key1": "val1",
      "key2": "val2"
    }
  ],
  "uploads": [
    {
      "key1": "val1",
      "key2": "val2"
    }
  ],
  "object": "campaign",
  "date_created": "2016-03-13T12:52:32.123Z",
  "date_modified": "2016-03-13T12:52:32.123Z",
  "billing_group_id": "billing_group_id4",
  "target_delivery_date": "2016-03-13T12:52:32.123Z",
  "send_date": "2016-03-13T12:52:32.123Z",
  "cancel_window_campaign_minutes": 238,
  "metadata": {
    "key0": "metadata1",
    "key1": "metadata2"
  }
}
```

