
# Registered

## Structure

`Registered`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `extraService` | `string` | Required, Constant | Add an extra service to your letter. See <a href="https://www.lob.com/pricing/print-mail#compare" target="_blank">pricing</a> for extra costs incurred.<br><br>* registered - provides tracking and confirmation for international addresses<br>**Default**: `'registered'` | getExtraService(): string | setExtraService(string extraService): void |
| `trackingNumber` | `?string` | Optional | The tracking number will appear here when it becomes available.<br>Dummy tracking numbers are not created in test mode. | getTrackingNumber(): ?string | setTrackingNumber(?string trackingNumber): void |
| `trackingEvents` | [`?(TrackingEventNormal[])`](../../doc/models/tracking-event-normal.md) | Optional | Tracking events are not populated for registered letters.<br>**Constraints**: *Maximum Items*: `0` | getTrackingEvents(): ?array | setTrackingEvents(?array trackingEvents): void |
| `returnAddress` | [`?array`](../../doc/models/object-enum.md) | Optional | - | getReturnAddress(): ?array | setReturnAddress(?array returnAddress): void |
| `description` | `?string` | Optional | An internal description that identifies this resource. Must be no longer than 255 characters.<br>**Constraints**: *Maximum Length*: `255` | getDescription(): ?string | setDescription(?string description): void |
| `metadata` | `?array<string,string>` | Optional | Use metadata to store custom information for tagging and labeling back to your internal systems. Must be an object with up to 20 key-value pairs. Keys must be at most 40 characters and values must be at most 500 characters. Neither can contain the characters `"` and `\`. i.e. '{"customer_id" : "NEWYORK2015"}' Nested objects are not supported.  See [Metadata](#section/Metadata) for more information. | getMetadata(): ?array | setMetadata(?array metadata): void |
| `mergeVariables` | [`?array`](../../doc/models/object-enum.md) | Optional | You can input a merge variable payload object to your template to render dynamic content. For example, if you have a template like: `{{variable_name}}`, pass in `{"variable_name": "Harry"}` to render `Harry`. `merge_variables` must be an object. Any type of value is accepted as long as the object is valid JSON; you can use `strings`, `numbers`, `booleans`, `arrays`, `objects`, or `null`. The max length of the object is 25,000 characters. If you call `JSON.stringify` on your object, it can be no longer than 25,000 characters. Your variable names cannot contain any whitespace or any of the following special characters: `!`, `"`, `#`, `%`, `&`, `'`, `(`, `)`, `*`, `+`, `,`, `/`, `;`, `<`, `=`, `>`, `@`, `[`, `\`, `]`, `^`, `````, `{`, `\|`, `}`, `~`. More instructions can be found in <a href="https://help.lob.com/print-and-mail/designing-mail-creatives/dynamic-personalization#using-html-and-merge-variables-10" target="_blank">our guide to using html and merge variables</a>. Depending on your <a href="https://dashboard.lob.com/#/settings/account" target="_blank">Merge Variable strictness</a> setting, if you define variables in your HTML but do not pass them here, you will either receive an error or the variable will render as an empty string. | getMergeVariables(): ?array | setMergeVariables(?array mergeVariables): void |
| `sendDate` | [`?array`](../../doc/models/object-enum.md) | Optional | - | getSendDate(): ?array | setSendDate(?array sendDate): void |
| `mailType` | [`?string(MailTypeEnum)`](../../doc/models/mail-type-enum.md) | Optional | - | getMailType(): ?string | setMailType(?string mailType): void |
| `color` | `bool` | Required | Set this key to `true` if you would like to print in color. Set to `false` if you would like to print in black and white. | getColor(): bool | setColor(bool color): void |
| `doubleSided` | `?bool` | Optional | Set this attribute to `true` for double sided printing, or `false` for for single sided printing. Defaults to `true`.<br>**Default**: `true` | getDoubleSided(): ?bool | setDoubleSided(?bool doubleSided): void |
| `addressPlacement` | [`?string(AddressPlacementEnum)`](../../doc/models/address-placement-enum.md) | Optional | - | getAddressPlacement(): ?string | setAddressPlacement(?string addressPlacement): void |
| `returnEnvelope` | [`?array`](../../doc/models/object-enum.md) | Optional | - | getReturnEnvelope(): ?array | setReturnEnvelope(?array returnEnvelope): void |
| `perforatedPage` | `?int` | Optional | Required if `return_envelope` is `true`. The number of the page that should be perforated for use with the return envelope. Must be greater than or equal to `1`. The blank page added by `address_placement=insert_blank_page` will be ignored when considering the perforated page number. To see how perforation will impact your letter design, view our <a href="https://s3-us-west-2.amazonaws.com/public.lob.com/assets/templates/letter_perf_template.pdf" target="_blank">perforation guide</a>. | getPerforatedPage(): ?int | setPerforatedPage(?int perforatedPage): void |
| `customEnvelope` | [`?array`](../../doc/models/object-enum.md) | Optional | - | getCustomEnvelope(): ?array | setCustomEnvelope(?array customEnvelope): void |
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
  "extra_service": "registered",
  "color": false,
  "double_sided": true,
  "to": {
    "key1": "val1",
    "key2": "val2"
  },
  "carrier": "USPS",
  "from": {
    "key1": "val1",
    "key2": "val2"
  },
  "id": "id0",
  "use_type": {
    "key1": "val1",
    "key2": "val2"
  },
  "fsc": false,
  "tracking_number": "tracking_number8",
  "tracking_events": [
    {
      "id": "id8",
      "time": "2016-03-13T12:52:32.123Z",
      "date_created": "2016-03-13T12:52:32.123Z",
      "date_modified": "2016-03-13T12:52:32.123Z",
      "object": "tracking_event",
      "type": "type2",
      "name": "Delivered",
      "details": {
        "key1": "val1",
        "key2": "val2"
      },
      "location": "location2"
    }
  ],
  "return_address": {
    "key1": "val1",
    "key2": "val2"
  },
  "description": "description0",
  "metadata": {
    "key0": "metadata7",
    "key1": "metadata6",
    "key2": "metadata5"
  }
}
```

