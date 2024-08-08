
# Letter Generated Base

## Structure

`LetterGeneratedBase`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `to` | [`array`](../../doc/models/object-enum.md) | Required | - | getTo(): array | setTo(array to): void |
| `carrier` | `string` | Required, Constant | **Default**: `'USPS'` | getCarrier(): string | setCarrier(string carrier): void |
| `thumbnails` | [`?(Thumbnail[])`](../../doc/models/thumbnail.md) | Optional | - | getThumbnails(): ?array | setThumbnails(?array thumbnails): void |
| `expectedDeliveryDate` | `?DateTime` | Optional | A date in YYYY-MM-DD format of the mailpiece's expected delivery date based on its `send_date`. | getExpectedDeliveryDate(): ?\DateTime | setExpectedDeliveryDate(?\DateTime expectedDeliveryDate): void |
| `dateCreated` | `?DateTime` | Optional | A timestamp in ISO 8601 format of the date the resource was created. | getDateCreated(): ?\DateTime | setDateCreated(?\DateTime dateCreated): void |
| `dateModified` | `?DateTime` | Optional | A timestamp in ISO 8601 format of the date the resource was last modified. | getDateModified(): ?\DateTime | setDateModified(?\DateTime dateModified): void |
| `deleted` | `?bool` | Optional | Only returned if the resource has been successfully deleted. | getDeleted(): ?bool | setDeleted(?bool deleted): void |
| `from` | [`array`](../../doc/models/object-enum.md) | Required | - | getFrom(): array | setFrom(array from): void |
| `url` | `?string` | Optional | A [signed link](#section/Asset-URLs) served over HTTPS. The link returned will expire in 30 days to prevent mis-sharing. Each time a GET request is initiated, a new signed URL will be generated.<br>**Constraints**: *Pattern*: `^https://lob-assets\.com/(letters\|postcards\|bank-accounts\|checks\|self-mailers\|cards)/[a-z]{3,4}_[a-z0-9]{15,16}(\.pdf\|_thumb_[a-z]+_[0-9]+\.png)\?(version=[a-z0-9-]*&)?expires=[0-9]{10}&signature=[a-zA-Z0-9-_]+$` | getUrl(): ?string | setUrl(?string url): void |
| `id` | `string` | Required | Unique identifier prefixed with `ltr_`.<br>**Constraints**: *Pattern*: `^ltr_[a-zA-Z0-9]+$` | getId(): string | setId(string id): void |
| `templateId` | `?string` | Optional | **Constraints**: *Pattern*: `^tmpl_[a-zA-Z0-9]+$` | getTemplateId(): ?string | setTemplateId(?string templateId): void |
| `templateVersionId` | `?string` | Optional | **Constraints**: *Pattern*: `^vrsn_[a-zA-Z0-9]+$` | getTemplateVersionId(): ?string | setTemplateVersionId(?string templateVersionId): void |
| `campaignId` | `?string` | Optional | The unique ID of the associated campaign if the resource was generated from a campaign. | getCampaignId(): ?string | setCampaignId(?string campaignId): void |
| `useType` | [`array`](../../doc/models/object-enum.md) | Required | - | getUseType(): array | setUseType(array useType): void |
| `fsc` | `?bool` | Optional | This is in beta. Contact support@lob.com or your account contact to learn more. Not available for `A4` letter size.<br>**Default**: `false` | getFsc(): ?bool | setFsc(?bool fsc): void |
| `status` | [`?string(ThestatusofthebuckslipEnum)`](../../doc/models/thestatusofthebuckslip-enum.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `failureReason` | `?string` | Optional | A string describing the reason for failure if the letter failed to render. | getFailureReason(): ?string | setFailureReason(?string failureReason): void |
| `object` | [`?string(Object8Enum)`](../../doc/models/object-8-enum.md) | Optional | - | getObject(): ?string | setObject(?string object): void |

## Example (as JSON)

```json
{
  "to": {
    "key1": "val1",
    "key2": "val2"
  },
  "carrier": "USPS",
  "from": {
    "key1": "val1",
    "key2": "val2"
  },
  "id": "id4",
  "use_type": {
    "key1": "val1",
    "key2": "val2"
  },
  "fsc": false,
  "thumbnails": [
    {
      "small": "small8",
      "medium": "medium8",
      "large": "large6"
    },
    {
      "small": "small8",
      "medium": "medium8",
      "large": "large6"
    },
    {
      "small": "small8",
      "medium": "medium8",
      "large": "large6"
    }
  ],
  "expected_delivery_date": "2016-03-13",
  "date_created": "2016-03-13T12:52:32.123Z",
  "date_modified": "2016-03-13T12:52:32.123Z",
  "deleted": false
}
```

